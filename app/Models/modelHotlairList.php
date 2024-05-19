<?php

namespace App\Models;

use CodeIgniter\Model;

class modelHotlairList extends Model
{
    protected $table            = 'hotlair_list';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['email','password','status'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    // public function getUsers()
    // {
    //     $builder = $this->db->table('candidate_list');

    //     $builder->select('*');
    //     $builder->where('id !=', session()->get('id'));
    //     $builder->where('type !=', 'super_admin');

    //     $query = $builder->get();
    //     // var_dump($query);
    //     // die;

    //     return $query->getResultArray();
    // }
}
