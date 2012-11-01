<?php
class UserIdentity extends CUserIdentity
{
    private $_id;
    private $_idType;


    public function authenticate()
    {
        $username=strtolower($this->username);
        $user= Users::model()->find('LOWER(username)=?',array($username));
        //$_typeUs = TypeUs::model()->find();
        if($user===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if(!$user->validatePassword($this->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            //$typeUs = TypeUs::model()->find($user->type_us_id, array($_idType));
            $this->_id=$user->id;
            $this->username=$user->username;
            $this->_idType=$user->type_us_id;
            $this->errorCode=self::ERROR_NONE;
        }
        return $this->errorCode==self::ERROR_NONE;
    }
 
    public function getId()
    {
        return $this->_id;
    }
}