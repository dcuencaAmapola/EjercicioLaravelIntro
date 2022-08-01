<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    //protected $fillable = ['title','url','description'];//no importa cuantas columnas haya, solo toma en cuenta las que se definieron
    protected $guarded = [];

    public function getRouteKeyName(){
        return 'url';
    }
}
