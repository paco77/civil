<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Teacher as Authenticatable;

class Teacher extends Model
{
        //use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'nombre', 'rpe', 'titulo',
        'esPosgrado', 'fecha_nac', 'rfc',
        'tel_particular', 'tel_cel', 'tel_oficina',
        'correo', 'correo_alter',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAtribute($val)
    {
        if(!empty($val)){
            $this->atributes['password']=\hash::make($val);
        }
    }
}     
