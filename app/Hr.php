<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Hr extends Model
{
    protected $table = 'hr';
    protected $fillable = ['nama','jenishr','tgl','nominal','keterangan'];

    use Sortable;
    public $sortable=['id','nama','jenishr','tgl','nominal','keterangan'];

}
