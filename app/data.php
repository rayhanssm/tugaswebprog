<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    protected $table = "data";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'nama', 'jurusan'];
}
