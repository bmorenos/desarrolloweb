<?php

namespace App\Models\models\privado;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use LogsActivity;

    protected $table = 'productos';
    protected $fillable = ['prod_id','prod_nombre','prod_categoria','prod_descripcion','prod_cantidad'];
    protected $guarded = 'prod_id';
    protected $primaryKey = 'prod_id';
    protected static $logName = 'productos';
}
