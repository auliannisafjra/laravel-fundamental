<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $table = 'products';
    protected $fillable = ['foto', 'nama', 'berat', 'harga', 'stok', 'kondisi', 'deskripsi'];
}
