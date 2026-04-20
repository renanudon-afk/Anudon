<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    use HasFactory;
    protected $table='StudentInfo';
    protected $fillable=[
    	'id',
    	'lname',
    	'mname',
    	'fname',
    	'bday',
    	'address',
    	'created_at',
    	'updated_at',
    	'deleted_at',
		'created_user_id',
		'updated_user_id',
		'deleted_user_id'
	];
}
