<?php


namespace App\Models\Properties;


use App\Models\Acquisition\Acquisition;
use App\Models\Cities\Cities;
use App\Models\Models\Models;
use App\Models\Neighborhood\Neighborhood;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    protected $fillable = ['title','sub_title','acquisition_id','model_id','city_id','neighborhood_id','description','address','location','value','value_additional'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function city()
    {
        return $this->hasMany(Cities::class,'id','city_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function acquisition()
    {
        return $this->hasMany(Acquisition::class,'id','city_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function model()
    {
        return $this->hasMany(Models::class,'id','model_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function neighborhood()
    {
        return $this->hasMany(Neighborhood::class,'id','neighborhood_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany(ImagesProperties::class,'property_id','id');
    }
}
