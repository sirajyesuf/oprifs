<?php

namespace App\Models;

use App\Enums\PostType;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Utils\ReadingTimeCalculator;

class Story extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'news_and_stories';

    protected $guarded = [];

    protected static function booted(): void
    {
        static::addGlobalScope('onlyStories', function (Builder $builder) {
            
            $builder->where('type', PostType::STORIES->value);
        });
    }

    public function author(){
        
        return $this->belongsTo(User::class,'author_id');
    }

    public function readingTime(){

        return ReadingTimeCalculator::calculateReadingTime($this->content);
    }
}
