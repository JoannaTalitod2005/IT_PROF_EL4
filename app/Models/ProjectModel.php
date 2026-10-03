<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table            = "projects";
    protected $primaryKey       = "id";
    protected $useAutoIncrement = true;
    protected $returnType       = "array";
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["title", "slug", "description", "technologies", "image", "github_url", "demo_url", "is_featured"];

    protected $useTimestamps = true;
    protected $dateFormat    = "datetime";
    protected $createdField  = "created_at";
    protected $updatedField  = "updated_at";
    protected $deletedField  = "deleted_at";

    protected $validationRules      = [
        "title" => "required|min_length[3]|max_length[255]",
        "slug" => "required|max_length[255]|is_unique[projects.slug,id,{id}]",
        "description" => "required",
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}
