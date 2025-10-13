<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['main_menu_id', 'name', 'slug', 'order', 'content_type', 'template_id', 'status','description'];
    
    
    public function mainMenu()
    {
        return $this->belongsTo(MainMenu::class);
    }
    
    
    public function template()
    {
        return $this->belongsTo(Template::class);
    }
    
    
    public function entries()
    {
        return $this->hasMany(ContentEntry::class);
    }
}