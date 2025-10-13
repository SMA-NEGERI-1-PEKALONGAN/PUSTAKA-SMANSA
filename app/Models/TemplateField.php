<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TemplateField extends Model
{
    use HasFactory;

    protected $fillable = ['template_id', 'field_name', 'field_label', 'input_type', 'is_required', 'order', 'meta'];

    protected $casts = ['meta' => 'array'];

    public function template()
    {
        return $this->belongsTo(Template::class);
    }

    public function contentValues()
    {
        return $this->hasMany(ContentValue::class, 'field_id');
    }

}