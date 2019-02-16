<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Usuario
 * @package App\Models
 * @version April 12, 2018, 9:40 pm -05
 *
 * @property string name
 * @property string lastname
 * @property string username
 * @property string email
 * @property string password
 * @property string birthdate
 * @property integer role
 * @property integer organizacion_id
 * @property string remember_token
 */
class Usuario extends Model
{

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'lastname' => 'string',
        'username' => 'string',
        'email' => 'string',
        'password' => 'string',
        'birthdate' => 'string',
        'role' => 'integer',
        'organizacion_id' => 'integer',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
    public function role($id){
        $role = Role::find($id);
        return $role->role;
    }
}
