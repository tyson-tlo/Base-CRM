<?php

namespace Models\App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
   protected $table = 'leads';

   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'phone_primary', 'phone_secondary', 'email', 'address', 'city', 'province_state', 'country', 'note', 'status', 'first_contact', 'last_contact', 'user_added', 'assigned_to',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
