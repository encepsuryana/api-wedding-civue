<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Guestbook extends ResourceController
{
    protected $modelName = 'App\Models\GuestbookModel';
    protected $format = 'json';

    /**
     * index function
     * @method : GET
     */
    public function index()
    {
        return $this->respond([
            'statusCode' => 200,
            'message'    => 'OK',
            'data'       => $this->model->orderBy('id', 'DESC')->findAll()
        ], 200);
    }

    /**
     * show function
     * @method : GET with params ID
     */
    public function show($id = null)
    {
        return $this->respond([
            'statusCode' => 200,
            'message'    => 'OK',
            'data'       => $this->model->find($id)
        ], 200);
    }

    /**
     * create function
     * @method : POST
     */
    public function create()
    {
        if ($this->request) {
            //get request from Vue Js
            if ($this->request->getJSON()) {

                $json = $this->request->getJSON();

                $post = $this->model->insert([
                    'id_wedding'    => $json->id_wedding,
                    'nama_lengkap'  => $json->nama_lengkap,
                    'ucapan'        => $json->ucapan
                ]);
            } else {

                //get request from Postman and more
                $post = $this->model->insert([
                    'id_wedding'    => $this->request->getPost('id_wedding'),
                    'nama_lengkap'  => $this->request->getPost('nama_lengkap'),
                    'ucapan'        => $this->request->getPost('ucapan')
                ]);
            }

            return $this->respond([
                'statusCode' => 201,
                'message'    => 'Data Berhasil Disimpan!',
            ], 201);
        }
    }

    /**
     * update function
     * @method : PUT or PATCH
     */
    public function update($id = null)
    {
        //model
        $post = $this->model;

        if ($this->request) {
            //get request from Vue Js
            if ($this->request->getJSON()) {

                $json = $this->request->getJSON();

                $post->update($json->id, [
                    'id_wedding'    => $json->id_wedding,
                    'nama_lengkap'  => $json->nama_lengkap,
                    'ucapan'        => $json->ucapan
                ]);
            } else {

                //get request from Postman and more
                $data = $this->request->getRawInput();
                $post->update($id, $data);
            }

            return $this->respond([
                'statusCode' => 200,
                'message'    => 'Data Berhasil Diupdate!',
            ], 200);
        }
    }


    /**
     * edit function
     * @method : DELETE with params ID
     */
    public function delete($id = null)
    {
        $post = $this->model->find($id);

        if ($post) {

            $this->model->delete($id);

            return $this->respond([
                'statusCode' => 200,
                'message'    => 'Data Berhasil Dihapus!',
            ], 200);
        }
    }
}
