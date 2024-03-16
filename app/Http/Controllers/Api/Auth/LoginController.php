<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\Api\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Login the customer.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function login(Request $request): JsonResponse
    {
        $this->validator($request);
        $customer = User::query()->where('username', $request->username)->first();
        if ($customer) {
            if (Hash::check($request->password, $customer->password)) {
                $createdToken = $customer->createToken('Password Grant Customer');
                $token = $createdToken->token;
                return response()->json([
                    'status' => 'Success',
                    'message' => 'Login Successful',
                    'customer' => $customer->apiUserResponse(),
                    'access_token' => $createdToken->accessToken,
                    'token_type' => 'Bearer',
                    'expires_at' => Carbon::parse($token->expires_at)->toDateTimeString()
                ]);
            } else {
                return response()->json([
                    'error' => 'Password mismatch',
                    'success' => 'false',
                ], 422);
            }
        } else {
            return response()->json([
                'error' => 'User does not exist',
                'success' => 'false',
            ], 422);
        }

    }

    /**
     * login field of the user
     *
     * @param Request $request
     * @return string
     */
    public function username(Request $request): string
    {
        // this string is column of users table which we are going use for login
        return filter_var($request->get('username'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    }

    /**
     * Validate the user login request
     *
     * @param Request $request
     */
    private function validator(Request $request)
    {
        //validation rules.
        $rules = [
            $this->username($request) => 'exists:users',
            'username'    => 'required|min:2|max:191',
            'password' => 'required|string|min:4|max:255',
        ];

        //custom validation error messages.
        $messages = [
            'username.exists' => 'These credentials do not match our records.',
        ];

        //validate the request.
        $request->validate($rules,$messages);
    }

    /**
     * An array of user login identifier and password
     *
     * @param Request $request
     * @return array
     */
    private function credentials(Request $request): array
    {
        return [
            $this->username($request) => $request->get('username'),
            'password' => $request->get('password'),
        ];
    }

    /**
     * Redirect back after a failed login.
     *
     * @return RedirectResponse
     */
    private function loginFailed()
    {
        return redirect()
            ->back()
            ->withInput()
            ->with('error','Login failed, please try again!');
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        //Store last login time
        $user = User::query()->findOrFail(auth('api')->id());
        $user->update(['last_login_datetime'=>now()]);

        $token = $request->user('api')->token();
        $token->revoke();
        $token->delete();

        return response()->json([
            'status' => 'Success',
            'message' => 'You have been successfully logged out'
        ]);
    }

}
