<?php

namespace App\Http\Controllers\Api;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Traits\GeneralTrait;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use function PHPUnit\Framework\isEmpty;

class AuthController
{
    use GeneralTrait;
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
            $validator = Validator::make($request->all(), [
                'name' => 'required|unique:users',
                'phone'=>'required',
                'college_id'=>'required|numeric',
                'code'=>'required'
            ]);

        if($validator->fails()){
            return $this->errorResponse($validator->errors(),422);
        }
        try {

            $uuid = Str::uuid()->toString();
            $request->merge(['uuid' =>$uuid]);
            $request->merge(['role' =>'student']);
            DB::transaction(function() use ($request)
            {
            $user = User::create($request->all());
           $code=$user->codes()->create([
            'uuid' =>Str::uuid()->toString(),
            'value'=>$request->code,
            'college_id'=>$request->college_id
           ]);
         
            $data=$user;
            return $this->successResponse($data
                , 'User is registered successfully.');
            });
        }
        catch (\Exception $ex){
            return $this->errorResponse($ex->getMessage(),500);
        }
    }

    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $validator =Validator::make($request->all(),[
            'name' => 'required',
            'code'=>'required'
        ]);
        if($validator->fails()){
            return $this->errorResponse($validator->errors(),422);
        }

try {
    $user = User::where('name', $request['name'])->first();
    
    if (!$user || !$user->codes()->where('value','=',$request['code'])) {
        return $this->errorResponse( 'incorrect username or password',400);
    }
    $data['token'] = $user->createToken('apiToken')->plainTextToken;
    $data['name'] = $user->name;
    return $this->successResponse($data, 'User has logged in successfully.');

}
        catch(\Exception $ex)
        {
            return $this>$this->errorResponse($ex->getMessage(),500);
        }

    }

//   public function logout(Request $request)
//   {
//       auth('sanctum')->user()->tokens()->delete();

//       return $this->successResponse([],'User has logged out successfully.');
//   }

}
