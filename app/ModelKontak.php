<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelKontak extends Model
{
    protected $table = 'kategori';
    protected $primaryKey= 'id';
    protected $fillable= ['kode_kategori','nama_kategori'];

    public function Sub ()
    {
    	return $this->hasOne('App\ModelSub', 'kategori_id');
    	return $this->hasOne('App\ModelTransaksi', 'kategori_id');
    }
    

}
