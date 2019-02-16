<?php

namespace App\Repositories;

use App\Models\Recurso;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RecursoRepository
 * @package App\Repositories
 * @version April 13, 2018, 12:13 am -05
 *
 * @method Recurso findWithoutFail($id, $columns = ['*'])
 * @method Recurso find($id, $columns = ['*'])
 * @method Recurso first($columns = ['*'])
*/
class RecursoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'recurso',
        'descripcion',
        'organizacion_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Recurso::class;
    }
}
