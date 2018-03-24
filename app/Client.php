<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * Indicates if a table should have timestamps
     */
    public $timestamps = false;

    /**
     * Items that are mass assignable
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'company_name',
        'address',
        'city',
        'county',
        'state',
        'zip',
        'phone1',
        'phone2',
        'email',
        'web'
    ];

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
