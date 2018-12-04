<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;
use Illuminate\Notifications\Notifiable;

class message extends Model
{
	use Notifiable, SyncsWithFirebase;
    protected $table="message";
    public $timestamps = false;
    protected $fillable = [
        'touser',
        'fromuser',
        'content'
    ];
}
