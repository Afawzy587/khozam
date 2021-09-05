<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Project extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['name','title','offer','about'];
    public function floorplans(){
        return $this->hasMany(FloorPlan::class);
    }

    public function iteriors(){
        return $this->hasMany(Iterior::class);
    }

    public function amaneties(){
        return $this->hasMany(Amenety::class);
    }

    public function facilities(){
        return $this->hasMany(Facility::class);
    }
    public function galleries(){
        return $this->hasMany(Gallery::class);
    }
    public function ProjectConstractions(){
        return $this->hasMany(ProjectConstraction::class);
    }
    public function contact_buys(){
        return $this->hasMany(ContactUsBuy::class);
    }


}
