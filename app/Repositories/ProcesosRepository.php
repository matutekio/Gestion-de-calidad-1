<?php

namespace App\Repositories;

use App\Models\Procesos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProcesosRepository
 * @package App\Repositories
 * @version April 18, 2018, 8:49 pm -05
 *
 * @method Procesos findWithoutFail($id, $columns = ['*'])
 * @method Procesos find($id, $columns = ['*'])
 * @method Procesos first($columns = ['*'])
*/
class ProcesosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion',
        'organizacion_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Procesos::class;
    }
}
