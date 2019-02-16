<?php

namespace App\Repositories;

use App\Models\Organizacion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class OrganizacionRepository
 * @package App\Repositories
 * @version April 6, 2018, 12:23 am -05
 *
 * @method Organizacion findWithoutFail($id, $columns = ['*'])
 * @method Organizacion find($id, $columns = ['*'])
 * @method Organizacion first($columns = ['*'])
*/
class OrganizacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'ruc',
        'direccion',
        'telefono',
        'politicaCalidad'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Organizacion::class;
    }
}
