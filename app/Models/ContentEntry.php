<?php

namespace App\Models;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContentEntry extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = ['menu_id', 'template_id', 'title', 'user_id','values'];
    
    protected $casts = [
        'values' => 'array', // JSON akan di-cast ke array otomatis
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
    
    public function template()
    {
        return $this->belongsTo(Template::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function values()
    {
        return $this->hasMany(ContentValue::class, 'entry_id');
    }
}