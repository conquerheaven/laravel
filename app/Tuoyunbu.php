<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tuoyunbu extends Model {

	//
    protected $table = 'tuoyunbu';

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
