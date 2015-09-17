<?php
namespace web\models;

use liw\core\model\BaseModel;
use liw\core\Lang;

class LoginForm extends BaseModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            'login' => ['required', 'string', 'min'=>2, 'login'],
            'pass'  => ['required', 'min'=>6]
        ];
    }

    public function labels(){
        return [
            'login' => Lang::$uage['login'],
            'pass'  => Lang::$uage['pass'],
        ];
    }

}