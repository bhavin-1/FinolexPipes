<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Fortify::loginView(function () {
            return view('auth.login');
        });

        Fortify::authenticateUsing(function (Request $request) {
            $user = User::where('email', $request->email)->orwhere('mobile', $request->email)->first();
            if ($user && Hash::check($request->password, $user->password)){
                return $user;
            } else {
                Auth::logout();
                $request->session()->flash('class', 'alert alert-warning');
                $request->session()->flash('status', 'Error Has Occuered.');
                return null;
            }
        });
    }
}
