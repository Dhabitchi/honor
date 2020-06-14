<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hr extends Model
{
    protected $table = 'hr';
    protected $fillable = ['nama','jenishr','tgl','nominal','keterangan'];
}
