<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    protected $fillable = ['price','image','brand_id','status_id','diagonal_id','screen_resolution_id','cpu_processor_id',
        'ram_id','storage_drive_id','matrix_type_id','class_id','weight_id','name'];
}
