<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Task extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        ];
}
