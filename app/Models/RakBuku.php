<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RakBuku extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $table = 'rak_buku';

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id',
        'id_buku',
        'id_jenis_buku',
    ];

    public function buku(){
        return $this->belongsTo('App\Models\Buku', 'id_buku','id');
        
    }

    public function jenisbuku(){
        return $this->belongsTo('App\Models\JenisBuku', 'id_jenis_buku','id');
    }
}
