<?php

class Arkakapi_ArkakapiController extends SecurityController {
    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */

    public function Login() {
        if (Auth::check()) {
            return Redirect::to('arkakapi/panel');
        } else {
            return View::make('Arkakapi.login');
        }
    }

    public function Loginpost() {

        $login = Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')), Input::get('remember'));
        if ($login) {
            return Redirect::to('arkakapi/panel');
        } else {
            return Redirect::to('arkakapi');
        }
    }

    public function getLogout() {
        Auth::logout();
        return Redirect::to('/');
    }

}
