<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class UniversityEvent extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = ['date_from', 'date_to', 'name', 'description', 'featured'];
    protected $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        $media = $this->getMedia('event_image')->first();
        if ($media) {
            return $this->getMedia('event_image')->first()->getUrl();
        }
        return url('img/no-image-found.png');
    }
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumbnail')
            ->width(160)
            ->height(160)
            ->fit(Manipulations::FIT_CROP, 160, 160);
    }
}
