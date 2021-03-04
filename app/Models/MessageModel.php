<?php 
namespace App\Models;

use CodeIgniter\Model;

class MessageModel extends Model
{
    protected $table      = 'messages';
    protected $primaryKey = 'id';

//     protected returnType = 'array';
//     protected useSoftDeletes = true;

     protected $allowedFields = ['senderName','contact', 'message', 'requestId', 'date', 'readStatus' ];

//     protected useTimestamps = false;
//     protected createdField  = 'created_at';
//     protected updatedField  = 'updated_at';
//     protected deletedField  = 'deleted_at';

//     protected validationRules    = [];
//     protected validationMessages = [];
//     protected skipValidation     = false;
 }


?>