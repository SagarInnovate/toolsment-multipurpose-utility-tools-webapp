<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tools extends Model
{
    protected $table = 'tools';
    protected $primaryKey = 'id';
    protected $fillable = ["name", "category", "icon", "discription", "source_code_file_url", "tags", "for_register_users"];
    use HasFactory;
}