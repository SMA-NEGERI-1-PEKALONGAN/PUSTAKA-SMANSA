<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContentValue extends Model
{
    use HasFactory;
    
    protected $fillable = ['entry_id', 'field_id', 'value'];

    public function entry()
    {
        return $this->belongsTo(ContentEntry::class, 'entry_id');
    }

    public function field()
    {
        return $this->belongsTo(TemplateField::class, 'field_id');
    }
}