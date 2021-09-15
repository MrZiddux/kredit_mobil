<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $table = 'mobils';
    protected $primaryKey = 'kode_mobil';
    public $incrementing = false;
    protected $keyType = 'string';

    public function kredits()
    {
    	return $this->hasMany(Kredit::class, 'kode_mobil');
    }

    public function beli_cashes()
    {
    	return $this->hasMany(BeliCash::class, 'kode_mobil');
    }
}
