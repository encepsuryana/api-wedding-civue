<?php namespace App\Models;

use CodeIgniter\Model;

class WeddingModel extends Model
{
    /**
     * table name
     */
    protected $table = "weddings";

    /**
     * allowed Field
     */
    protected $allowedFields = [
        'nama_lengkap_pria',
        'nama_panggilan_pria',
        'asal_pria',
        'orangtua_pria',
        'nama_lengkap_wanita',
        'nama_panggilan_wanita',
        'asal_wanita',
        'orangtua_wanita',
        'ket_akad',
        'waktu_akad',
        'ket_resepsi',
        'waktu_resepsi',
        'hari_pernikahan',
        'tgl_pernikahan',
        'ket_tempat',
        'alamat_lengkap',
        'google_maps',
        'google_maps_direction',
        'google_calendar',
        'google_maps',
        'judul_undangan',
        'kalimat_udangan',
        'text_undangan',
        'doa_pernikahan',
        'video_pernikahan'
    ];
}