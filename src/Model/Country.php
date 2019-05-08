<?php
namespace Vsb\Model;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vsb_countries';
    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    const CREATED_AT = null;
    const UPDATED_AT = null;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'iso','code','name','enabled'
    ];
}
