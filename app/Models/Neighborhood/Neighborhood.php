<?php


namespace App\Models\Neighborhood;


use App\Models\Cities\Cities;
use Illuminate\Database\Eloquent\Model;

class Neighborhood extends Model
{
    protected $fillable = ['name','city_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function city()
    {
        return $this->hasMany(Cities::class,'id','city_id');
    }

}
