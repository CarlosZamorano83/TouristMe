<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rols extends Model

{

	protected $fillable = ['name'];

    protected $table = 'rols';


    

public function users()

{
	return $this -> hasMany ('App\Users');
}
    
}
