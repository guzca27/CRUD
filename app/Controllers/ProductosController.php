<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ProductosModel;

class ProductosController extends ResourceController
{
    protected $productoModel;

    public function __construct()
    {
        $this->productoModel = new ProductosModel();
    }


    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $productos = $this->productoModel->orderBy('nombre', 'asc')->findAll();

        $data = [
            'productos' => $productos 
             
        ];

    
        return $this->response->setJSON($data);

       

    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
    
            return view('add_productos');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $productoModel = new ProductosModel();
        $id = $this->request->getVar('id');
        $data = [
            'nombre' => $this->request->getVar('nombre'),
            'created_at'  => $this->request->getVar('created_at'),
        ];
        $productoModel->update($id, $data);
        return $this->response->redirect(site_url('/produdctos-lista'));
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $productoModel = new ProductosModel();
        $data['productos'] = $productoModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/productos-lista'));
    } 
    
}
