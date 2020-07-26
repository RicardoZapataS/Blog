<?php namespace App\Models;

use App\Models\PaginaModel;
use CodeIgniter\Model;

class CategoriaModel extends Model
{
    protected $table                = 'categoria';
    protected $primaryKey           = 'id';

    protected $returnType           = 'array';
    protected $useSoftDeletes       = true;

    protected $allowedFields        = ['nombre'];

    protected $useTimestamps        = false;
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    protected $validationRules      = ['nombre'=>'required'];
    protected $validationMessages   = [];
    protected $skipValidation       = false;

    public function getPaginas($id)
    {
        $model = new PaginaModel;
        return $model->where('categoria_id', $id)->findAll();;
    }
}
