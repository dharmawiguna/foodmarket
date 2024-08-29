<?php

namespace App\Http\Controllers\API;

use App\Actions\Fortify\PasswordValidationRules;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;
use Validator;

class UserController extends Controller
{

    use PasswordValidationRules;

    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'email|required',
                'password' => 'required',
            ]);

            // check credetentials
            $credentials = request(['email', 'password']);
            if(!Auth::attempt($credentials)){
                return ResponseFormatter::error([
                    'message' => 'Your Email or Password is wrong! '
                ], 'Authentication Failed', 401);
            }

            // Check if hashed password matches
            $user = User::where('email', $request->email)->first();
            if (!$user || !Hash::check($request->password, $user->password)) {
                return ResponseFormatter::error([
                    'message' => 'The provided credentials do not match our records.',
                ], 'Authentication Failed', 401);
            }

            $tokenResult = $user->createToken('authToken')->plainTextToken;
            return ResponseFormatter::success([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user'  => $user,
            ], 'Authenticated');

        } catch (\Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 'Authenticated Failed', 500);
        }
    }

    public function register(Request $request)
    {
        try {
            // $request->validate([
            //     'name' => ['required', 'string', 'max:255'],
            //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            //     'password' => $this->passwordRules()
            // ]);

            $validator = Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => $this->passwordRules()
            ]);

            // if ($validator->fails()) {
            //     return ResponseFormatter::error([
            //         'message' => 'Gagal Memvalidasi',
            //         'error' => $validator,
            //     ], 'Authentication Failed', 500);
            // }

            
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'houseNumber' => $request->houseNumber,
                'phoneNumber' => $request->phoneNumber,
                'city' => $request->city,
                'password' => Hash::make($request->password),
            ]);

            $user = User::where('email', $request->email)->first();

            $tokenResult = $user->createToken('authToken')->plainTextToken;

            return ResponseFormatter::success([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user' => $user
            ]);
        } catch (\Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error
            ], 'Authentication Failed', 500);
        }
    }

    public function logout(Request $request)
    {
        $token = $request->user()->currentAccessToken()->delete();

        return ResponseFormatter::success($token,'Token Revoked');
    }

    public function updateProfile(Request $request)
    {
        $data = $request->all();

        $user = Auth::user();
        $user->update($data);

        return ResponseFormatter::success($user, 'Profile Updated');
    }

    public function fetch(Request $request)
    {
        return ResponseFormatter::success($request->user(), 'Data Profile user berhasil didapatkan');
    }

    public function updatePhoto(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|image|max:2048'
        ]);

        if($validator->fails()){
            return ResponseFormatter::error([
                'error' => $validator->errors()
            ], 'Update Photo Fails', 401);
        }

        if($request->file('file')){
            $file = $request->file->store('assets/user', 'public');

            //save url to db
            $user = Auth::user();
            $user->profile_photo_path = $file;
            $user->update();

            return ResponseFormatter::success([$file], 'File Successfully uploaded');
        }
    }
}
