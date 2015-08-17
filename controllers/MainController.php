<?php
namespace web\controllers;

use liw\core\base\model\ConnectPDO;
use liw\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $this->render('index', [
            'test' => 'Это test variable'
        ]);
    }

    public function testAction()
    {
        $con = new ConnectPDO();

        /*if(mail("razvanlomov@gmail.com", "Test", "Test message")){
            $this->render('error', [
                'error' => 'Письмо отправлено'
            ]);
        } else {
            $this->render('error', [
                'error' => 'ХРен там'
            ]);
        }*/

    }
}
