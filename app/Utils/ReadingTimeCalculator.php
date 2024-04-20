<?php

namespace App\Utils;

class ReadingTimeCalculator
{
    /**
     * Calculate the reading time for a given text.
     *
     * @param string $text The text content for which to calculate the reading time.
     * @param int $wordsPerMinute Average words per minute for reading.
     * @return int The estimated reading time in minutes.
     */
    public static function calculateReadingTime(string $text, int $wordsPerMinute = 200): int
    {
        // Count words in the text
        $wordCount = str_word_count(strip_tags($text));

        // Calculate reading time
        $readingTime = ceil($wordCount / $wordsPerMinute);

        return $readingTime;
    }
}
