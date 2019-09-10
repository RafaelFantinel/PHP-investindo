<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Prettus\Repository\Traits\TransformableTrait;


use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use softDeletes;
    use Notifiable;
    
    public $timestamps =true;
    protected $table = 'users';
    protected $fillable =['cpf','name','phone','birth','gender','notes','email','password','status','permission'];
    protected $hidden = ['password','remember_token'];
    
    public function setPasswordAttribute($value){
        $this->attributes['password'] = env('PASSWORD_HASH')? bcrypt($value)  :$value;
    }

}
