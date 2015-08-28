<?php
namespace web\models;

use liw\core\Model;
use liw\core\Liw;
use liw\core\web\Session;

/**
 * Class ModelBD
 * @package web\model
 */
class User extends Model
{
    /**
     * @var string это название таблицы, для которой создается модель
     */
    protected $table = 'user';

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            'login'       => ['required', 'unique', 'min'=>3],
            'hash'        => ['required'],
            'date_create' => ['required'],
            'last_visit'  => ['required'],
        ];
    }

    public function labelFields(){
        return [
            'login' => Liw::$lang['label']['login'],
            'hash'  => Liw::$lang['label']['pass'],
            'date_create' => 'date_create',
            'last_visit'  => 'last_visit',
        ];
    }

    /**
     * Добавляем информацию о пользователе в сессию
     */
    private function addUserInSession(){
        Liw::$isGuest = false;
        Session::set(['user' => $this->fields]);
    }

    static public function deleteUserFromSession(){
        Liw::$isGuest = true;
        Session::delete('user');
    }

    public function saveUser($fields){
        $this->fields['login'] = $fields['login'];
        $this->fields['hash']  = $this->hash($fields['pass']);
        $this->fields['levels']= '011';
        $this->fields['last_visit'] = $this->fields['date_create'] = time();
        if($this->save()){
            self::addUserInSession();
            return true;
        } else {
            $this->error = Liw::$lang['error']['user_exist'];
            self::deleteUserFromSession();
            return false;
        }
    }

    private function hash($password){
        unset($this->fields['pass']);
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function verify($fields){
        $this
            ->select()
            ->where(['login' => $fields['login']])
            ->get();
        if(!empty($this->fields['login']) && password_verify($fields['pass'], $this->fields['hash'])){
            $this->fields['last_visit'] = time();
            $this
                ->update(['last_visit'])
                ->where(['id'=>$this->fields['id']])
                ->push();
            self::addUserInSession();
            return $this;
        }
        $this->error = Liw::$lang['error']['verify'];
        return false;
    }

    public function findById($id, $fields){
        $result =  $this
            ->select($fields)
            ->where(['id'=>$id])
            ->get();
        return $result;
    }

} 