<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Test\User;
use Test\Model\Payment;
class Student extends Model
{
    protected $table = "tb_teachers";
    public $timestamps = false;

    public function getGender()
    {
        if($this->gender==1)
            return "Ayol";
        if($this->gender==0)
            return "Erkak";
        return "";
    }
    public function getStatus()
    {
        if($this->status==1)
            return "Faol";;
        return "Nofaol";
    }
    public function getCitizenship()
    {
        $country = Country::find($this->citizenship);
        return $country->country_name;
    }
    public function getFullName()
    {
        return $this->first_name." ".$this->last_name." ".$this->middle_name;
    }
}

