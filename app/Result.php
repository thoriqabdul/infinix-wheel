<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $guarded =['_token','id'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
