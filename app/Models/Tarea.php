<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tarea extends Model
{
    use HasFactory;
    use SoftDeletes;

    //si en caso se cambia el nombre de la tabla
    //protected $table = 'nombre de la tabla';

    //Se ponen los atributos de la tabla a la cual hace referencia
    protected $fillable = ['nombre','descripcion','finalizado','fecha_limite','urgencia',];

    //Convierte los formatos fechas
    protected $dates = ['fecha_limite'];

    public const URGENCIAS = ['Baja','Normal','Alta'];

    public function urgencia(){
        return self::URGENCIAS[$this->urgencia];
    }

    public function finalizado(){
        if($this->finalizado==1){
            return 'Si';
        }
        else{
            return 'No';
        }
    }

}
