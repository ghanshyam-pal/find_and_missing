<?php

namespace App\Models;

use CodeIgniter\Model;

class modelDepartment extends Model
{
    protected $table            = 'department';
    protected $primaryKey       = 'd_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['department_name','status','slug_url'];

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

    public function getDepartment()
    {
        $builder = $this->db->table('department');

        $builder->select('*');
        $builder->where('status !=', '0');

        $query = $builder->get();
        // var_dump($query);
        // die;

        return $query->getResultArray();
    }
}
