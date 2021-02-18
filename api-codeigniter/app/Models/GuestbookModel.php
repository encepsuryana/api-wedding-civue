<?php namespace App\Models;

use CodeIgniter\Model;

class GuestbookModel extends Model
{
    /**
     * table name
     */
    protected $table = "guestbook";

    /**
     * allowed Field
     */
    protected $allowedFields = [
        'id_wedding',
        'nama_lengkap',
        'ucapan'
    ];
}