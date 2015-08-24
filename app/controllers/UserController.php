<?php
namespace web\controllers;

use liw\core\Controller;
use liw\core\Liw;
use web\models\LoginForm;
use web\models\User;

class UserController extends Controller
{


    public function indexAction(){
        $this->render('index');
    }

    public function registrationAction(){
        $loginForm = new LoginForm();
        $user = new User;

        if ($loginForm->post() && $user->saveUser($loginForm->fields)) {

            $this->redirect('/user');

        } else {
            $model = [
                'error' => $loginForm->error?:$user->error,
                'login' => isset($loginForm->fields['login'])?$loginForm->fields['login']: null
            ];
            $this->render('registration', $model);
        }
    }

    public function loginAction(){
        $loginForm = new LoginForm();

        if ($loginForm->post()){
            $user = new User;
            if($user->verify($loginForm->fields)){
                $this->redirect('/user');
            } else {
                $this->redirect(['user', 'registration'],[
                    'login' => isset($loginForm->fields['login']) ? $loginForm->fields['login'] : null,
                    'error' => Liw::$lang['error']['verify']
                ]);
            }
        } else {
            $this->redirect(['user', 'registration'], [
                'login' => isset($loginForm->fields['login']) ? $loginForm->fields['login'] : null,
                'error' => Liw::$lang['error']['verify']
            ]);
        }
    }

    public function logoutAction(){
        User::session_stop();
        $this->redirect('/');
    }
}
