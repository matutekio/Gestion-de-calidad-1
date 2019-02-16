<?php

namespace App\Repositories;

use App\Models\Objetivos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ObjetivosRepository
 * @package App\Repositories
 * @version April 14, 2018, 10:46 pm -05
 *
 * @method Objetivos findWithoutFail($id, $columns = ['*'])
 * @method Objetivos find($id, $columns = ['*'])
 * @method Objetivos first($columns = ['*'])
*/
class ObjetivosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'objetivo',
        'organizacion_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Objetivos::class;
    }
}
