<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
    protected $table = 'pembelis';
    protected $primaryKey = 'ktp_pembeli';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'ktp_pembeli',
        'nama_pembeli',
        'alamat_pembeli',
        'telp_pembeli',
    ];

    public function kredit()
    {
    	return $this->hasMany(Kredit::class, 'ktp_pembeli');
    }

    // public function storePelangganBaru($d)
    // {

    // }
}
