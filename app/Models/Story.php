<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use App\Enums\PostType;

class Story extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'news_and_stories';

    protected $guarded = [];

    protected static function booted(): void
    {
        static::addGlobalScope('onlyStories', function (Builder $builder) {
            $builder->where('type',PostType::STORIES->value);
        });
    }
}
