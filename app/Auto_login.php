<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Cookie;

class Auto_login extends Model {

	protected $table = 'auto_logins';
	protected $primaryKey = ['auto_login_id', 'user_id'];


}
