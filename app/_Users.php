<?php
// EZE
namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public $table = "users";
    //public $primarykey = "id";
    //public $timestamps = "";
    protected $fillable = ['name', 'email', 'password', 'updated_at', 'created_at'];
}