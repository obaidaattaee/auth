<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $table = 'links';

    function users(){
            return $this->belongsToMany('App\Models\User' , 'users_links' , 'link_id' , 'user_id');
    }
    public function subLink(){
        return $this->hasMany('App\Models\Link' , 'paren_id' , 'id');
    }
    public function parentLink(){
        return $this->belongsTo('App\Models\Link' , 'parent_id' , 'id');
    }
}
