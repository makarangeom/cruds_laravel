<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $table = "table_users";
    protected $fillable = [
        'first_name', 'last_name', 'sex', 'email', 'dob', 'address'
    ];

}
