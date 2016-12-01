<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTime;

class Applicant extends Model
{
	protected $table = 'applicants';
    protected $fillable = ['firstname', 'lastname', 'email', 'facebook', 'gender', 'pic', 'status'];

    public function getFormattedIdCard()
    {
        return preg_replace("/^(\d{1})(\d{4})(\d{5})(\d{2})(\d{1})$/", "$1-$2-$3-$4-$5", $this->id_card);
    }

    public function getFormattedTel()
    {
        if (strlen($this->tel) == 9) {
            return preg_replace("/^(\d{2})(\d{3})(\d{4})$/", "$1-$2-$3", $this->tel);
        } else {
            return preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $this->tel);
        }
    }

    public function getFormattedTelHome()
    {
        if (strlen($this->tel_home) == 9) {
            return preg_replace("/^(\d{2})(\d{3})(\d{4})$/", "$1-$2-$3", $this->tel_home);
        } else {
            return preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $this->tel_home);
        }
    }

    public function getFormattedParentTel()
    {
        if (strlen($this->parent_tel) == 9) {
            return preg_replace("/^(\d{2})(\d{3})(\d{4})$/", "$1-$2-$3", $this->parent_tel);
        } else {
            return preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $this->parent_tel);
        }
    }

    public function getAge()
    {
    	$date = new DateTime($this->birthday);
        $now = new DateTime();
        $interval = $now->diff($date);
        return $interval->y;
    }

    public function getBirthday()
    {
    	$date = new DateTime($this->birthday);
        $result = $date->format('Y/m/d');
    	
        if ($result == "-0001/11/30") {
            return NULL;
        } else {
            return $result;
        }
    }
}
