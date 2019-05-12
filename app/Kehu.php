<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Kehu extends Model {

	//
    protected $table = 'kehulist';

    /**
     * @var array
     * mass update black list
     */
    protected $guarded = array();

    /**
     * @var bool
     * do not update timestamp , because haoke db do not have [update_at] attribute
     */
    public $timestamps = false;

}
