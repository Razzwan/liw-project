<?php
namespace web\controllers;

use liw\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $this->render('index');
    }

    public function testAction()
    {
        $this->render('error', [
            'error' => 'Это test variable'
        ]);

    }
}
