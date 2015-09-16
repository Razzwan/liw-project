<?php
namespace web\controllers;

use liw\core\Controller;
use liw\core\Liw;
use liw\core\web\Session;
use web\models\LoginForm;
use web\models\User;
use Gregwar\Captcha\CaptchaBuilder;

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
                'error'   => $loginForm->error?:$user->error,
                'login'   => isset($loginForm->login)?$loginForm->login: null,
                'captcha' => $this->newCaptcha()
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
                    'login' => isset($loginForm->login) ? $loginForm->login : null,
                    'error' => Liw::$lang['error']['verify'],
                    'captcha' => $this->newCaptcha()
                ]);
            }
        } else {
            $this->redirect(['user', 'registration'], [
                'login' => isset($loginForm->login) ? $loginForm->login : null,
                'error' => Liw::$lang['error']['verify'],
                'captcha' => $this->newCaptcha()
            ]);
        }
    }

    public function logoutAction(){
        User::deleteUserFromSession();
        $this->redirect('/');
    }

    private function newCaptcha()
    {
        $builder = new CaptchaBuilder;
        $builder->build();
        Session::set(['phrase' => $builder->getPhrase()]);
        return $builder->inline();
    }

}
