<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
   protected $table = 'test';
   protected $fillable = ['name','password','email','number','date_of_birth'];
}