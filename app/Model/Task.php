<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

//use Laravel\Cashier\Billable;

class Task extends Model {
	
    
    protected $table = 'tasks';
    protected $fillable = [
        'user_id','name','priority','task_date','task_time','status'
    ];
  
    

}
