<?php
namespace App\Controllers;
use App\Models\User;
class AuthController
{
    public function registerForm(){
        view('auth/register');
    }
    public function register(){
        $user = User::where('email', $_POST['email']);
        if(count($user) === 0 && $_POST['password'] === $_POST['password_confirm']){
            $user = new User();
            $user->email = $_POST['email'];
            $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $user->save();
            redirect('/');
        } else {
            redirect('/register');
        }
       
        
    }
    public function loginForm(){
    }
    public function login(){
        
    }
    public function logout(){
        
    }
}