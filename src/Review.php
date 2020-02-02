<?php

namespace GuestReviews;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /**
     * Связанная с моделью таблица.
     *
     * @var string
     */
    protected $table = 'gr_reviews';

    public function author()
    {
        return $this->belongsTo('GuestReviews\Guest', 'foreign_key', 'other_key');
    }
}