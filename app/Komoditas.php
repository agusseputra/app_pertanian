<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komoditas extends Model
{
    //
    protected $table='komoditas';
    protected $primaryKey='id_komoditas';
    protected $fillable=['nama_komoditas','keterangan','status'];
}
