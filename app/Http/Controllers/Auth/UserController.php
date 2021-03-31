<?php

namespace App\Http\Controllers\Auth;

use App\Http\Models\User;
use App\Http\Requests\AuthorizationRequest;
use App\Http\Requests\RegistersRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function create(RegistersRequest $validateData)
    {
        $this->checkAuth();

        $user = new User();
        $user->nickname = $validateData['nickname'];
        $user->email = $validateData['email'];
        $user->password = $validateData['password'];
        $user->status = 'user';

        if($user) {
            $user->save();
            return redirect(route('authorization'));
        }

        return redirect(route('registration'))->withErrors([
            'registration-error' => 'ппроизошла ошибка при сохранение пользователя'
        ]);
    }

    public function login(AuthorizationRequest $validateData) {

        $this->checkAuth();

        $formData = $validateData->only(['nickname','password']);

        if(Auth::attempt($formData)) {
            return redirect()->intended(route('profile'));
        }

        return redirect(route('authorization'))->withErrors(['nickname'=>'не удалось авторизоваться']);
    }

    public function save() {
        return 0;
    }

    public function getUser($id) {
        $user = new User();
        return view('profile.id', ['user' => $user->find($id)] );
    }

    private function checkAuth(){
        if(Auth::check()) {
            return redirect(route('home'));
        }
    }
}
