<?php

namespace App\Repositories;

use App\Models\TipoIndicador;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoIndicadorRepository
 * @package App\Repositories
 * @version April 13, 2018, 12:44 am -05
 *
 * @method TipoIndicador findWithoutFail($id, $columns = ['*'])
 * @method TipoIndicador find($id, $columns = ['*'])
 * @method TipoIndicador first($columns = ['*'])
*/
class TipoIndicadorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo',
        'descripcion',
        'organizacion_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoIndicador::class;
    }
}
