<?php

namespace GuestReviews;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    /**
     * Связанная с моделью таблица.
     *
     * @var string
     */
    protected $table = 'gr_guests';

    public function reviews()
    {
        return $this->hasMany('GuestReviews\Review', 'author_id', 'id');
    }

}