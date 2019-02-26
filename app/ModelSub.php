<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelSub extends Model
{
    protected $table = 'sub';
	protected $primaryKey= 'id';
    protected $fillable= ['kode_sub_kategori','nama_sub_kategori','kategori_id'];

    public function kategori ()
    {
    	return $this->belongsTo('App\ModelKontak', 'kategori_id');
    }
    
    public function transaksi ()
    {
    	return $this->hasOne('App\ModelTransaksi', 'subkategori_id');
    }
   
}

