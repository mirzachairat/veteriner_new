<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
          /**
     * User login API method
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function __construct() {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email',
            'password' => 'required'
        ]);
        if ($validator->fails()) return sendError('Validation Error.', $validator->errors(), 422);

        $credentials = $request->only('email', 'password');
        if (! $token = auth()->attempt($credentials)) {
            return response()->json([
                'success' => false,
                'error' => 'Unauthorized',
            ], 401);
        }

        return $this->respondWithToken([
            'token' => $token,
            'success' => true,
            'message' => 'Berhasil Login',
            // 'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }

    /**
     * User registration API method
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'nama'     => 'required',
                'email'    => 'required|email|unique:users',
                'password' => 'required|min:8'
            ]);

            if ($validator->fails()) return sendError('Validation Error.', $validator->errors(), 422);

            try {
                $user = User::create([
                    'nama'     => $request->nama,
                    'email'    => $request->email,
                    'password' => bcrypt($request->password)
                ]);

                $success['nama']  = $user->nama;
                $message          = 'Yay! A user has been successfully created.';
                $success['token'] = $user->createToken('accessToken')->accessToken;
            } catch (Exception $e) {
                $success['token'] = [];
                $message          = 'Oops! Unable to create a new user.';
            }

            return sendResponse($success, $message);
        }

        /**
         * Refresh a token.
         *
         * @return \Illuminate\Http\JsonResponse
         */
        public function refresh()
        {
            return $this->respondWithToken(auth()->refresh());
        }

        protected function respondWithToken($token)
        {
            return response()->json([
                'access_token' => $token,
                'token_type' => 'bearer',
                'expires_in' => auth()->factory()->getTTL() * 60
            ]);
        }
}
