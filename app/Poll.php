<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

class Poll extends Model
{
    use SoftDeletes;
    //

    public function get_union() {
        return $this->belongsTo('App\Union', 'union_id', 'union_id');
    }
}
