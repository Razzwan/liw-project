<?php
namespace web\controllers;

use liw\core\Controller;
use liw\core\web\Request;
use web\models\User;

class MainController extends Controller
{
    public $layout = 'layout';

    public function indexAction()
    {
        $this->render('index');
    }

    public function moreAction()
    {
        $this->render('more');
    }

    public function installAction()
    {
        $this->render('install');
    }

    public function testAction()
    {
        $user = new User();
        $user->findById(3);
        $this->twig('index.twig');
    }

}
