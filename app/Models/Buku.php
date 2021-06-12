<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $table = 'Buku';

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id',
        'judul',
        'tahun_terbit',
    ];

    public function rakbuku(){
        return $this->hasMany('App\Models\RakBuku', 'id' , 'id_buku');
    }
}
