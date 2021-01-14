<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Socialite;
use Auth;
use App\Models\User;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request)
    {
        // Auth::logout();
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function mengalihkanlayanan($layanan)
    {
        return Socialite::driver($layanan)->redirect();
    }

    public function memanggilLayanan($layanan)
    {
        $user = Socialite::driver($layanan)->stateless()->user();
        $authUser = $this->findOrCreateUser($user, $layanan);
        Auth::login($authUser, true);
        return redirect($this->redirectTo);
    }

    public function findOrCreateUser($user, $layanan)
    {
        $authUser = User::where('id_layanan', $user->id)->first();
        if($authUser){
            return $authUser;
        }
        return User::create([
            'name'      => $user->name,
            'email'     => $user->email,
            'layanan'  => strtoupper($layanan),
            'id_layanan'   => $user->id
        ]);
    }
}
