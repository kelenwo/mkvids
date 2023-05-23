<?php

namespace App\Models;

use CodeIgniter\Model;

class MovieModel extends Model
{
    protected $table = 'movies';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'genre', 'url', 'trailer', 'thumbnail', 'description', 'year', 'casts', 'type', 'author', 'date'];
}
