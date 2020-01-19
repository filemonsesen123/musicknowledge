<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
	protected $primaryKey = 'id_materi';
    protected $fillable = ['id_materi', 'judul_materi'];
}
