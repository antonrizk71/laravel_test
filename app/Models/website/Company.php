<?php

namespace App\Models\website;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'country',
        'city',
        'size',
       ];
    public function products ()
    {
        return $this->hasMany(Product::class);
    }
}
