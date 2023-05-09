<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'description',
        'stock_out',
        'stock_in',
        'price_in',
        'price_out',
        'provider_id',
    ];

    public function provider(){
        return $this->hasOne(Fornecedor::class, 'id', 'provider_id');
    }
}
