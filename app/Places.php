<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Places extends Model


{

	protected $fillable = ['name', 'description', 'start_date','end_date', 'coordinate_x', 'coordinate_y','users_id'];

    protected $table = 'places';

	public function users()

	{

		return $this -> belongsTo ('App\Users');
	}
    //
}
