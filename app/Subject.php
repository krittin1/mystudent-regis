<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use SoftDeletes;
    protected $fillable = ['subjectID','name','labC','lecC','role'];

    public function users() {

        return $this->belongsTo('\App\User');
    }
}




