<?php


class User
{
    private $id;
    private $password;

    public function __construct($id, $pass)
    {
        $this->id = $id;
        $this->password = $pass;
    }

    public function getUserData(){
        try {
            if (!preg_match('/^\d+$/', $this->id)){
                throw new Exception('Id not int');
            }
            if (preg_match('/.{0,8}/', $this->password)){
                throw new Exception('Maximum password length = 8 characters. This password has = ' . strlen($this->password) . ' characters');
            }
        } catch (Exception $e){
            print_r('<pre>' . $e->getMessage() . '</pre>');
            print_r('<pre>' . $e->getFile() . '</pre>');
            print_r('<pre>' . $e->getLine() . '</pre>');
        }

        return [
            'id' => $this->id,
            'password' => $this->password
        ];
    }
}