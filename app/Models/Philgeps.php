<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Philgeps extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use NodeTrait;

    protected $fillable = ['name'];
    protected $appends = ['file_url'];

    public function getFileUrlAttribute()
    {
        $media = $this->getMedia('philgeps_file')->first();
        if ($media) {
            return $this->getMedia('philgeps_file')->first()->getUrl();
        }
        return null;
    }
}
