<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departement extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'departements'; 

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'departement_id');
    }
}
