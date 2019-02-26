<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelTransaksi extends Model
{
	protected $table = 'transaksi';
	protected $primaryKey= 'id';
    protected $fillable= ['tanggal','keterangan','kategori_id','subkategori_id','jenis_transaksi','jumlah'];

    
    public function kategori ()
    {
    	return $this->belongsTo('App\ModelKontak', 'kategori_id');
    	
    }

     public function sub ()
	{
		return $this->belongsTo('App\ModelSub', 'subkategori_id');
	}   
}