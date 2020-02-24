<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;

    public $table = 'clients';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'email',
        'phone',
        'skype',
        'company',
        'website',
        'country',
        'last_name',
        'status_id',
        'first_name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public static function boot()
    {
        parent::boot();

        Client::observe(new \App\Observers\ClientActionObserver);
    }

    public function status()
    {
        return $this->belongsTo(ClientStatus::class, 'status_id');
    }
}
