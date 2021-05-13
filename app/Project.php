<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

	protected $guarded = ['id', 'approved' , 'created_at','update_at'];

	//Se esta sobreescribiendo el metodo y en la vista index cuando genera la ruta pasar el objeto completo, laravel tambien va usar la url tambien para generar el link
     public function getRouteKeyName()
    {

    	 	return 'url';

    }
}
