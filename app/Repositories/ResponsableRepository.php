<?php

namespace App\Repositories;

use App\Models\Responsable;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ResponsableRepository
 * @package App\Repositories
 * @version April 13, 2018, 12:18 am -05
 *
 * @method Responsable findWithoutFail($id, $columns = ['*'])
 * @method Responsable find($id, $columns = ['*'])
 * @method Responsable first($columns = ['*'])
*/
class ResponsableRepository extends BaseRepository
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
        return Responsable::class;
    }
}
