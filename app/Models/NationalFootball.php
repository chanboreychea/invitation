<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NationalFootball extends Model
{
    use HasFactory;
    protected $table = 'national_footballs';
    protected $fillable =[
        'title',
        'description',
        'image',
        'imageTop',
        'desTop',
        'imageMid',
        'desMid',
        'imageBottom',
        'desBottom',
        'categorieID'
    ];

    public function categorie(){
        return $this->hasMany(Category::class,'categorieID');
    }
}
