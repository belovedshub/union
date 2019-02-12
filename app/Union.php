<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

class Union extends Model
{
    use SoftDeletes;
    //

    public function with_poll() {
        return $this->hasMany('App\Poll', 'union_id');
    }
}
