<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsBuy extends Model
{
    use HasFactory;
    protected $table ="contact_us_buys";
    protected $fillable = [
        'name', 'email', 'phone','message','project_id'
    ];
    public function project(){
        return $this->belongsTo(Project::class);
    }
}
