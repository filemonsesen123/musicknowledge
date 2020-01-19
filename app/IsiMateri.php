<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IsiMateri extends Model
{
    protected $primaryKey = 'id_isi';
	protected $fillable = ['id_isi', 'id_sub_materi','header1', 'image1','paragraf1','header2', 'image2','paragraf2','header3', 'image3','paragraf3','header4', 'image4','paragraf4'];
}
