<?php

namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{

    use Authenticatable;

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'firstname',
        'lastname',
        'location',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    public function getName(){
        if( $this->firstname && $this->lastname ){
            return "{$this->firstname} {$this->lastname}";
        }

        if($this->firstname){
            return $this->firstname;
        }

        return null;
    }

    public function getNameOrUsername(){
        return $this->getName() ? : $this->username;
    }


    public function getFirstNameOrUsername(){
        return $this->firstname ? : $this->username;
    }


}
