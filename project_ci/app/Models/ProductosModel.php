<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProductosModel extends Model {
    protected $table = 'productos';
    
    protected $allowedFields = ['nombre', 'tipo_de_producto', 'precio_base', 'detalle'];
}