<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    protected $fillable = [
      'name',
      'slug',
      'description',
      'status',
      'image'

    ];

    public function imageUrl(): ?string
    {
        if (!$this->image) {
            return null;
        }
        return Storage::disk($this->image_disk ?? 'public')->url($this->image);
    }
}
