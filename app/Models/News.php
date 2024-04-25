<?php

namespace App\Models;

use App\Enums\PostType;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Observers\NewsObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use App\Utils\ReadingTimeCalculator;

#[ObservedBy([NewsObserver::class])]
class News extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'news_and_stories';

    protected $guarded = [];

    public function scopeNews($query){

        return $query->where('type',PostType::NEWS->value);
    }

    public function scopeStory($query){

        return $query->where('type',PostType::STORIES->value);
    }

    public function author(){
        
        return $this->belongsTo(User::class,'author_id');
    }

    public function readingTime(){

        return ReadingTimeCalculator::calculateReadingTime($this->content);
    }
}
