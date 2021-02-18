<?php namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    /**
     * table name
     */
    protected $table = "login";

    /**
     * allowed Field
     */
    protected $allowedFields = [
        'full_name',
        'username',
        'password',
        'avatar'
    ];
}