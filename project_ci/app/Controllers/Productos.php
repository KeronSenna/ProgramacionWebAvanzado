<?php

namespace App\Controllers;

use App\Models\ProductosModel;

class Productos extends BaseController
{
    /* public function index()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT Nombre, Tipo_de_producto, Precio_base FROM productos");
        $result = $query->getResult();
        $data = ['titulo' => 'Catalogo de productos', 'productos' => $result];
        return view('productos', $data);
    } */
    public function index() {
        $productosModel = new ProductosModel();
        $productos = $productosModel->findAll();

        return view('productos', ['productos' => $productos]);
    }


    public function verDetalle($productoId) 
    {
        $productosModel = new ProductosModel();
        $producto = $productosModel->find($productoId);
    
        return view('verDetalle', ['producto' => $producto]);
    }

    public function cat($categoria, $id)
    {
        $data ['categoria'] = $categoria;
        $data ['id'] = $id;
        return view ('productos', $data);
    }
}
