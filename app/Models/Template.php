<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Template extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'status'];
    
    public function fields()
    {
        return $this->hasMany(TemplateField::class);
    }
    
    
    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}