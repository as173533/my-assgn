<?php

namespace App\Model;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

//use Laravel\Cashier\Billable;

class UserMaster extends Model implements Authenticatable {

    use \Illuminate\Auth\Authenticatable;

    public $confirm_password;
    protected $table = 'user_master';
    protected $fillable = [
        'id', 'type_id','full_name','email', 'password', 'phone','image', 'status','remember_token', 
        'reset_password_token', 'activation_token', 'created_at', 'updated_at','last_login'
    ];
    protected $hidden = [
        'password', 'hash_password'
    ];

    

}
