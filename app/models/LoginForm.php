<?php
namespace web\models;

use liw\core\model\BaseModel;
use liw\core\Liw;

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

    public function labelFields(){
        return [
            'login' => Liw::$lang['label']['login'],
            'pass'  => Liw::$lang['label']['pass']
        ];
    }

}