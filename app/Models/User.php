<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users' ;

    protected $fillable = [
        'name' , 'email' , 'password' ,
    ];

    public function links(){
        return $this->belongsToMany('App\Models\Link' , 'users_links' , 'user_id' , 'link_id');
    }
}
