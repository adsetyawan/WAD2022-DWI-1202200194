<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showroom extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $dates = ['purchase_date'];

    public function image()
    {
        return asset('storage/' . $this->image);
    }
}
