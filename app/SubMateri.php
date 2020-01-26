<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubMateri extends Model
{
	protected $primaryKey = 'id_sub_materi';
    protected $fillable = ['id_sub_materi', 'id_materi','judul_sub_materi','gambar_sub_materi'];
}
