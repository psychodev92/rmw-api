<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model {
    protected $table = 'reviews';
    protected $primaryKey = 'id';

    public $timestamps = false;
}
