<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TestPage extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='test_pages';
}
        