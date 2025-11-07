<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Transparency extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use NodeTrait;

    protected $fillable = ['name'];
    protected $appends = ['file_url'];

    public function getFileUrlAttribute()
    {
        $media = $this->getMedia('transparency_file')->first();
        if ($media) {
            return $this->getMedia('transparency_file')->first()->getUrl();
        }
        return null;
    }
}
