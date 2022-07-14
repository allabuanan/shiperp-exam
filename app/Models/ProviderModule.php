<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderModule extends Model
{
    use HasFactory;

    protected $fillable = ['providerName', 'url'];
}
