<?php
namespace App\classes;
class User
{
    public $city = 'Dhaka';
    protected $country = 'Bangladesh';
    private $area = 'Lalmonirhat';

    public function login()
    {
        echo 'In LogIn';
    }

    protected function logout()
    {
        echo 'In Logout';
    }

    private function profile()
    {
        echo 'In profile';
    }
}