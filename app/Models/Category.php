<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function services()
    {
        return $this->belongsToMany(Service::class, 'category_services', 'category_id', 'service_id');
    }

}
