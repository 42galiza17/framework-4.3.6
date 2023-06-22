<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table = "tbl";
  protected $primaryKey = "id";
  protected $useAutoIncrement = true;
  protected $allowedFields = ['firstName', 'lastName'];
   
}
