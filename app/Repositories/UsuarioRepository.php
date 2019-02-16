<?php

namespace App\Repositories;

use App\Models\Usuario;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UsuarioRepository
 * @package App\Repositories
 * @version April 12, 2018, 9:40 pm -05
 *
 * @method Usuario findWithoutFail($id, $columns = ['*'])
 * @method Usuario find($id, $columns = ['*'])
 * @method Usuario first($columns = ['*'])
*/
class UsuarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'lastname',
        'username',
        'email',
        'password',
        'birthdate',
        'role',
        'organizacion_id',
        'remember_token'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Usuario::class;
    }
}
