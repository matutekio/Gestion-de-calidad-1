<?php

namespace App\Repositories;

use App\Models\Destino;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DestinoRepository
 * @package App\Repositories
 * @version April 12, 2018, 10:50 pm -05
 *
 * @method Destino findWithoutFail($id, $columns = ['*'])
 * @method Destino find($id, $columns = ['*'])
 * @method Destino first($columns = ['*'])
*/
class DestinoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'destino',
        'organizacion_id',
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Destino::class;
    }
}
