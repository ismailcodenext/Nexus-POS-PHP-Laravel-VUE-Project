<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function UserRegistration(Request $request)
    {
        try {
            // $request->validate([
            //     'firstName' => 'required|string|max:50',
            //     'lastName' => 'required|string|max:50',
            //     'email' => 'required|string|email|max:50|unique:users,email',
            //     'mobile' => 'required|string|max:50',
            //     'password' => 'required|string|min:3',
            //      // Add role validation
            // ]);

            $img = $request->file('img');
            $t = time();
            $file_name = $img->getClientOriginalName();
            $img_name = "{$t}-{$file_name}";
            $img_url = "uploads/user-img/{$img_name}";
            $img->move(public_path('uploads/user-img'), $img_name);

            $user = new User([
                'img_url' => $img_url,
                'firstName' => $request->input('firstName'),
                'lastName' => $request->input('lastName'),
                'email' => $request->input('email'),
                'mobile' => $request->input('mobile'),
                'password' => Hash::make($request->input('password')),
                'role' => $request->input('role'), // Set the role based on user input
                'status' => $request->input('status'), // Default status to pending
            ]);

            $user->save();

            return response()->json(['status' => 'success', 'message' => 'User Registration Successfully']);
        } catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }


    public function register(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'firstName' => 'required|string|max:50',
        //     'email' => 'required|string|email|max:50|unique:users',
        //     'mobile' => 'required|string|max:50',
        //     'password' => 'required|string|min:8',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json(['status' => 'error', 'message' => $validator->errors()], 400);
        // }

        $user = User::create([
            'firstName' => $request->firstName,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => Hash::make($request->password),
            'status' => 'pending',
            'role' => 'user',
        ]);

        return response()->json(['status' => 'success', 'user' => $user], 201);
    }


    public function UserLogin(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|string|email|max:50',
                'password' => 'required|string|min:3'
            ]);

            $user = User::where('email', $request->input('email'))->first();

            if (!$user || !Hash::check($request->input('password'), $user->password)) {
                return response()->json(['status' => 'failed', 'message' => 'Invalid User'], 401);
            }

            $token = $user->createToken('authToken')->plainTextToken;
            return response()->json(['status' => 'success', 'message' => 'Login Successful', 'token' => $token]);

        } catch (\Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()], 500);
        }
    }

}
