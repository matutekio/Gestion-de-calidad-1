<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ProcesoRecurso
 * @package App\Models
 * @version April 18, 2018, 9:57 pm -05
 *
 * @property integer proceso_id
 * @property integer recurso_id
 */
class ProcesoRecurso extends Model
{

    public $table = 'proceso_recurso';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'proceso_id',
        'recurso_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'proceso_id' => 'integer',
        'recurso_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
    public function recurso($id){
        $recurso = Recurso::find($id);
        return $recurso->recurso;
    }
    
}
