<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
	protected $primaryKey = 'id_soal';
    
    protected $fillable = ['id_soal', 'a','b', 'c', 'd','jawaban', 'id_sub_materi', 'soal'];
}
