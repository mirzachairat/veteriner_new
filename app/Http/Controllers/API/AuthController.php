<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Userklinik;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\SessionGuard;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
          /**
     * User login API method
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    // public function __construct() {
    //     $this->middleware('auth:api', ['except' => ['login', 'register']]);
    // }


    public function index(){
        $data = Userklinik::all();
        return response()->json(compact('data'));
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email',
            'password' => 'required'
        ]);
        if ($validator->fails()) return sendError('Validation Error.', $validator->errors(), 422);

        $credentials = $request->only('email', 'password');
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 400);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }
        $data = Auth::user()->jabatan_id;
        return response()->json(compact(['token','data']));
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
                'email'    => 'required|email',
                'password' => 'required'
            ]);
            if ($validator->fails()) return sendError('Validation Error.', $validator->errors(), 422);
    
            try {
                $user = User::create([
                    'nama'     => $request->nama,
                    'email'    => $request->email,
                    'no_hp'     => $request->no_hp,
                    'type' => "mobile",
                    'jabatan_id' => 1,
                    'password' => bcrypt($request->password)
                ]);

                $message          = 'Yay! A user has been successfully created.';
                $success    = true;
            } catch (Exception $e) {
                $success         = false;
                $message          = 'Oops! Unable to create a new user.';
            }

            return response()->json(compact(['success','message']));
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
