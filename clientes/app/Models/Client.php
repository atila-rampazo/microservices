<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    protected $table = 'users';

    protected $fillable = ['name', 'email', 'document', 'cellphone'];

    public function adresses(): HasMany
    {
        return $this->hasMany(ClientAdresses::class);
    }
}
