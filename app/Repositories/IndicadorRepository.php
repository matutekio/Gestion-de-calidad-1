<?php

namespace App\Repositories;

use App\Models\Indicador;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class IndicadorRepository
 * @package App\Repositories
 * @version April 18, 2018, 9:59 pm -05
 *
 * @method Indicador findWithoutFail($id, $columns = ['*'])
 * @method Indicador find($id, $columns = ['*'])
 * @method Indicador first($columns = ['*'])
*/
class IndicadorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'indicador',
        'descripcion',
        'proceso_id',
        'actividad_id',
        'frecuencia_id',
        'tipoIndicador_id',
        'meta',
        'forma_calculo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Indicador::class;
    }
}
