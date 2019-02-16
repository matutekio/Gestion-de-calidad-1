<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Actividad
 * @package App\Models
 * @version April 18, 2018, 9:59 pm -05
 *
 * @property integer proceso_id
 * @property string descripcion
 * @property string actividad
 */
class Actividad extends Model
{

    public $table = 'actividad';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'proceso_id',
        'descripcion',
        'actividad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'proceso_id' => 'integer',
        'descripcion' => 'string',
        'actividad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function proceso($id){
        $proceso = Procesos::find($id);
        return $proceso->nombre;
    }
    
}
