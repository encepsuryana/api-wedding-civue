<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Wedding extends ResourceController
{
    protected $modelName = 'App\Models\WeddingModel';
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
                    'nama_lengkap_pria'     => $json->nama_lengkap_pria,
                    'nama_panggilan_pria'   => $json->nama_panggilan_pria,
                    'asal_pria'             => $json->asal_pria,
                    'orangtua_pria'         => $json->orangtua_pria,
                    'nama_lengkap_wanita'   => $json->nama_lengkap_wanita,
                    'nama_panggilan_wanita' => $json->nama_panggilan_wanita,
                    'asal_wanita'           => $json->asal_wanita,
                    'orangtua_wanita'       => $json->orangtua_wanita,
                    'ket_akad'              => $json->ket_akad,
                    'waktu_akad'            => $json->waktu_akad,
                    'ket_resepsi'           => $json->ket_resepsi,
                    'waktu_resepsi'         => $json->waktu_resepsi,
                    'hari_pernikahan'       => $json->hari_pernikahan,
                    'tgl_pernikahan'        => $json->tgl_pernikahan,
                    'ket_tempat'            => $json->ket_tempat,
                    'alamat_lengkap'        => $json->alamat_lengkap,
                    'google_maps'           => $json->google_maps,
                    'google_maps_direction' => $json->google_maps_direction,
                    'google_calendar'       => $json->google_calendar,
                    'google_maps'           => $json->google_maps,
                    'judul_undangan'        => $json->judul_undangan,
                    'kalimat_udangan'       => $json->kalimat_udangan,
                    'text_undangan'         => $json->text_undangan,
                    'doa_pernikahan'        => $json->doa_pernikahan,
                    'video_pernikahan'      => $json->video_pernikahan
                ]);
            } else {

                //get request from Postman and more
                $post = $this->model->insert([
                    'nama_lengkap_pria'     => $this->request->getPost('nama_lengkap_pria'),
                    'nama_panggilan_pria'   => $this->request->getPost('nama_panggilan_pria'),
                    'asal_pria'             => $this->request->getPost('asal_pria'),
                    'orangtua_pria'         => $this->request->getPost('orangtua_pria'),
                    'nama_lengkap_wanita'   => $this->request->getPost('nama_lengkap_wanita'),
                    'nama_panggilan_wanita' => $this->request->getPost('nama_panggilan_wanita'),
                    'asal_wanita'           => $this->request->getPost('asal_wanita'),
                    'orangtua_wanita'       => $this->request->getPost('orangtua_wanita'),
                    'ket_akad'              => $this->request->getPost('ket_akad'),
                    'waktu_akad'            => $this->request->getPost('waktu_akad'),
                    'ket_resepsi'           => $this->request->getPost('ket_resepsi'),
                    'waktu_resepsi'         => $this->request->getPost('waktu_resepsi'),
                    'hari_pernikahan'       => $this->request->getPost('hari_pernikahan'),
                    'tgl_pernikahan'        => $this->request->getPost('tgl_pernikahan'),
                    'ket_tempat'            => $this->request->getPost('ket_tempat'),
                    'alamat_lengkap'        => $this->request->getPost('alamat_lengkap'),
                    'google_maps'           => $this->request->getPost('google_maps'),
                    'google_maps_direction' => $this->request->getPost('google_maps_direction'),
                    'google_calendar'       => $this->request->getPost('google_calendar'),
                    'google_maps'           => $this->request->getPost('google_maps'),
                    'judul_undangan'        => $this->request->getPost('judul_undangan'),
                    'kalimat_udangan'       => $this->request->getPost('kalimat_udangan'),
                    'text_undangan'         => $this->request->getPost('text_undangan'),
                    'doa_pernikahan'        => $this->request->getPost('doa_pernikahan'),
                    'video_pernikahan'      => $this->request->getPost('video_pernikahan')
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
                    'nama_lengkap_pria'     => $json->nama_lengkap_pria,
                    'nama_panggilan_pria'   => $json->nama_panggilan_pria,
                    'asal_pria'             => $json->asal_pria,
                    'orangtua_pria'         => $json->orangtua_pria,
                    'nama_lengkap_wanita'   => $json->nama_lengkap_wanita,
                    'nama_panggilan_wanita' => $json->nama_panggilan_wanita,
                    'asal_wanita'           => $json->asal_wanita,
                    'orangtua_wanita'       => $json->orangtua_wanita,
                    'ket_akad'              => $json->ket_akad,
                    'waktu_akad'            => $json->waktu_akad,
                    'ket_resepsi'           => $json->ket_resepsi,
                    'waktu_resepsi'         => $json->waktu_resepsi,
                    'hari_pernikahan'       => $json->hari_pernikahan,
                    'tgl_pernikahan'        => $json->tgl_pernikahan,
                    'ket_tempat'            => $json->ket_tempat,
                    'alamat_lengkap'        => $json->alamat_lengkap,
                    'google_maps'           => $json->google_maps,
                    'google_maps_direction' => $json->google_maps_direction,
                    'google_calendar'       => $json->google_calendar,
                    'google_maps'           => $json->google_maps,
                    'judul_undangan'        => $json->judul_undangan,
                    'kalimat_udangan'       => $json->kalimat_udangan,
                    'text_undangan'         => $json->text_undangan,
                    'doa_pernikahan'        => $json->doa_pernikahan,
                    'video_pernikahan'      => $json->video_pernikahan
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
