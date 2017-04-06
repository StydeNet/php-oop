<?php

namespace Styde;

use Exception;
use Carbon\Carbon;

class User extends Model
{
    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getAgeAttribute()
    {
        $date = Carbon::createFromFormat('d/m/Y', $this->birthDate);

        return $date->age;
    }
}







