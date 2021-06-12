<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisBuku extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $table = 'jenis_buku';

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id',
        'jenis',
    ];

    public function jenisbuku(){
        return $this->hasMany('App\Models\JenisBuku', 'id' , 'id_buku');
    }
}
