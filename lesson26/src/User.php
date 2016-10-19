<?php

namespace Styde;

use Exception;
use Carbon\Carbon;

class User extends Model
{
    public function getAgeAttribute()
    {
        $date = Carbon::createFromFormat('d/m/Y', $this->birthDate);

        return $date->age;
    }
}







