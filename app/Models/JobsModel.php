<?php

namespace App\Models;

use CodeIgniter\Model;

class JobsModel extends Model
{
    protected $table = 'jobs';
    protected $useTimestamps = true;
    protected $allowedFields = ['title', 'slug', 'company_name', 'city', 'brand_logo', 'deskripsi'];

    public function getJob($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return  $this->where(['slug' => $slug])->first();
    }
}
