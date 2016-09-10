<?php

namespace ChimeraRocks\LayoutConfig\Models;

use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    protected $table = "chimerarocks_layouts";

    protected $fillable = [
        'name',
        'dirname'
    ];
}
