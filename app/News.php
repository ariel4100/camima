<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'titulo','descripcion','breve','ruta','habilitado','portada','orden','pdf','category_id'
    ];

    public function Category(){
        return $this->belongsTo('App\Category','category_id');
    }
}
