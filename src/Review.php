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

}