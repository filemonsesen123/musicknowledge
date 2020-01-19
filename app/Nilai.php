<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
	protected $primaryKey = 'id_nilai';
    protected $fillable = ['id_nilai', 'id_soal','id_user', 'nilai'];
}
