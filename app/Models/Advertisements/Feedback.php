<?php

namespace App\Models\Advertisements;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Advertisements\Feedback
 *
 * @mixin \Eloquent
 */

class Feedback extends Model
{
    //
    public $table = "feedback";
    protected $guarded = ['id'];
}
