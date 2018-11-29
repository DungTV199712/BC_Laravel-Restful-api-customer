<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $filltable =
        ['first_name', 'last_name'
        ];
}
