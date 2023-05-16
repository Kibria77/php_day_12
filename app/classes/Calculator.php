<?php
namespace App\classes;
use App\classes\User;
class Calculator
{
    public $first_number;
    public $last_number;
    public $operator;
    public $result;
    public $user;

    public function __construct($data)
    {
        $this->first_number  = $data['first_number'];
        $this->last_number   = $data['last_number'];
        $this->operator      = $data['operator'];
    }

    public function index()
    {
        switch ($this->operator)
        {
            case '+';
                $this->result = $this->add();
                break;
            case '-';
                $this->result = $this->sub();
                break;
            case '*';
                $this->result = $this->mutiplication();
                break;
            case '/';
                $this->result = $this->divided();
                break;
            case '%';
                $this->result = $this->percentase();
                break;
        }
        return$this->result;
    }

    protected function add()
    {
        return $this->first_number + $this->last_number;
    }

    protected function sub()
    {
        return $this->first_number - $this->last_number;
    }

    protected function mutiplication()
    {
        return $this->first_number * $this->last_number;
    }

    protected function divided()
    {
        return $this->first_number / $this->last_number;
    }

    protected function percentase()
    {
        return $this->first_number % $this->last_number;
    }
}