<?php

namespace App\Models;

use App\Traits\Models\HasSlug;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;
    use HasSlug;
    use SoftDeletes;

    protected $fillable = [
      'title',
      'image',
      'preview_text',
      'detail_text'
    ];

    protected $casts = [
      'created_at' => 'date:d.m.Y'
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn($path) => config('app.url') . '/storage/' . $path
        );
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->orderBy('id','desc');
    }
}
