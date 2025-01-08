<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = 'tbl_posts';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'title', 'slug', 'user_id', 'content', 'image', 'hits', 'aktif', 'status',
    ];
}
