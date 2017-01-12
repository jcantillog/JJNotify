<?php

namespace JJNotify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genre extends Model
{
	use SoftDeletes;
    protected $table = "genres";

    protected $fillable = ['genre'];

    protected $dates = ['deleted_at'];
}
