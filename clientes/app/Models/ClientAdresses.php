<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientAdresses extends Model
{
    protected $table = 'client_adresses';
    protected $fillable = ['user_id', 'zipcode', 'street', 'city', 'state'];
}
