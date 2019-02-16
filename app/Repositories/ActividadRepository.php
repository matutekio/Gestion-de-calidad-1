<?php

namespace App\Repositories;

use App\Models\Actividad;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ActividadRepository
 * @package App\Repositories
 * @version April 18, 2018, 9:59 pm -05
 *
 * @method Actividad findWithoutFail($id, $columns = ['*'])
 * @method Actividad find($id, $columns = ['*'])
 * @method Actividad first($columns = ['*'])
*/
class ActividadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'proceso_id',
        'descripcion',
        'actividad'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Actividad::class;
    }
}
