<?php

namespace App\Repositories;

use App\Models\ProcesoRecurso;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProcesoRecursoRepository
 * @package App\Repositories
 * @version April 18, 2018, 9:57 pm -05
 *
 * @method ProcesoRecurso findWithoutFail($id, $columns = ['*'])
 * @method ProcesoRecurso find($id, $columns = ['*'])
 * @method ProcesoRecurso first($columns = ['*'])
*/
class ProcesoRecursoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'proceso_id',
        'recurso_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ProcesoRecurso::class;
    }
}
