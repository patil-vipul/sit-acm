<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;

class BlogModel extends Model
{
    protected $table = 'blogs';
    public function getBlogs($slug = false, $limit = false,$offset = false )
{
    if ($slug === false)
    {
        if($limit && !$offset){
            return $this->findAll($limit);
        }
        return $this->findAll();
    }

    return $this->asArray()
                ->where(['BlogSlug' => $slug])
                ->first();
}
}
