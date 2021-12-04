<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{

    public function formLogin(){
        return view('login');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    public function handleProviderCallback(Request $request)
    {
        try {
            $user_google = Socialite::driver('google')->stateless()->user();
            $user = User::where('email', $user_google->getEmail())->first();

            if ($user != null) {
                \auth()->login($user, true);
            } else {
                $new_user = User::create([
                    'email' => $user_google->getEmail(),
                    'name' => $user_google->getName(),
                    'password' => Hash::make($user_google->getId()),
                    'email_verified_at' => now()
                ]);
                if(env('ADMIN_EMAIL') == $user_google->getEmail()){
                    $new_user->assignRole('Administrator');
                }
                else{
                    $new_user->assignRole('InfUser');
                }
                \auth()->login($new_user, true);
            }
            app('debugbar')->info('login');
            return redirect('/');
        }
        catch (\Exception $e){
            echo $e->getMessage();
        }
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}
