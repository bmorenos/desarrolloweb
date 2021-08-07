<?php

namespace App\Models\models\privado;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $guarded = ['prod_id'];
    protected $table = 'productos';
    protected $primaryKey = 'prod_id';

    public $timestamps = false;
}
