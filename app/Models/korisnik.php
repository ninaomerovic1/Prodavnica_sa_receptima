<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class korisnik extends Model
{
    protected $table='korisnik';
    public $timestamps = false;

    use HasFactory;

    public function korpa(){
        return $this->hasMany(korpa::class);
    }
    protected $fillable = [
        'id',
        'Ime',
        'Prezime',
        'Adresa',
        'Email',
        'broj_telefona',

    ];
}

Osoba::korisnik([
    'Ime' => 'Milutin',
    'Prezime' => 'Mirkovic',
    'Adresa' => 'Luke Vukalovica 7',
    'Email' => 'milutin.mirkovic1.mm@gmail.com',
    'broj_telefona' => '0640854858'
]);