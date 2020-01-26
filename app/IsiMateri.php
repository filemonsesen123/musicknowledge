<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IsiMateri extends Model
{
    protected $primaryKey = 'id_isi';
	protected $fillable = ['id_isi', 'id_sub_materi','header1', 'image1','paragraf1','header2', 'image2','paragraf2','header3', 'image3','paragraf3','header4', 'image4','paragraf4','header5', 'image5','paragraf5','header6', 'image6','paragraf6','header7', 'image7','paragraf7','header8', 'image8','paragraf8','header9', 'image9','paragraf9','header10', 'image10','paragraf10'];
}
