<?php

namespace App\Repositories;

use App\Models\Frecuencia;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FrecuenciaRepository
 * @package App\Repositories
 * @version April 12, 2018, 11:22 pm -05
 *
 * @method Frecuencia findWithoutFail($id, $columns = ['*'])
 * @method Frecuencia find($id, $columns = ['*'])
 * @method Frecuencia first($columns = ['*'])
*/
class FrecuenciaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'frecuencia',
        'num_dias',
        'organizacion_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Frecuencia::class;
    }
}
