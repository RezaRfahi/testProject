<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resturant extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'name', 'address', 'manager_name', 'tel', 'capacity', 'free_capacity', 'vote'
        ];

    public function getName()
    {
        return $this->name;
    }

}
