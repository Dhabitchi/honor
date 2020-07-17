<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenishr extends Model
{
    protected $table = 'jenishr';
    protected $fillable = ['nama_jns'];

    public function user(){
        return $this -> belongsTo('App\User');
    }
}
