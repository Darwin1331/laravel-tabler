<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $primaryKey = 'idProducto';

    public $timestamps = false;

    protected $fillable = [
        'productos',
        'precio',
        'categoria',
        'stock',
    ];
}
