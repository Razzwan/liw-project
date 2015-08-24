<?php
namespace web\controllers;

use liw\core\Controller;

class MainController extends Controller
{
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
        $this->redirect('/install');
    }

}
