<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Auth extends Authenticatable
{
 use Notifiable;

    protected $guard = 'admin';
	protected $primaryKey = 'id_admin';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_admin', 'name','email', 'password'];
}
