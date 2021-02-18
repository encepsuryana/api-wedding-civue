<?php namespace App\Models;

use CodeIgniter\Model;

class AlbumModel extends Model
{
    /**
     * table name
     */
    protected $table = "albums";

    /**
     * allowed Field
     */
    protected $allowedFields = [
        'id_wedding',
        'image'
    ];
}