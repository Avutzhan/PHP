<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function departmentName()
    {
        $departments = [
            'florist',
            'logist',
            'courierHiking',
            'courierAuto',
            'courierAutoNight',
        ];

        $key = array_rand($departments);

        return $departments[$key];
    }
}
