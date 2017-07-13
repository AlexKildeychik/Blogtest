<?php


namespace App\Models;

use App\db;
use App\Model;

class User extends Model
{
   const TABLE = 'users';
   public $name;
   public $email;
}