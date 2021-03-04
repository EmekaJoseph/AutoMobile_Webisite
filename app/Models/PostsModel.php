<?php 
namespace App\Models;

use CodeIgniter\Model;

class PostsModel extends Model
{
    protected $table      = 'uploads';
    protected $primaryKey = 'id';

//     protected returnType = 'array';
//     protected useSoftDeletes = true;

     protected $allowedFields = ['title','description', 'image', 'image2', 'image3', 'date', 'price' ];

//     protected useTimestamps = false;
//     protected createdField  = 'created_at';
//     protected updatedField  = 'updated_at';
//     protected deletedField  = 'deleted_at';

//     protected validationRules    = [];
//     protected validationMessages = [];
//     protected skipValidation     = false;
 }


?>