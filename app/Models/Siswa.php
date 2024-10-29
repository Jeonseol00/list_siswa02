<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    protected $fillable = [
        'nama',
        'nis',
        'kelas',
        'foto',
    ];
   // app/Models/Siswa.php
public function keterlambatan()
{
    return $this->hasMany(Keterlambatan::class);
}

public function getCsvSettings(): array
    {
        return [
            'input_encoding' => 'ISO-8859-1'
        ];
    }
}
