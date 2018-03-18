<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    public $timestamps = false;
    protected $table = "users"; // call table called users in the database
    protected $fillable =['name','email','password']; //no id, id cannot be inserted manually
    protected $guarded = [];
}
