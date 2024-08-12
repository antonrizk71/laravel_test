<?php

namespace App\Models\website;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'exdate',
        'details',
        'company_id'
    ];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
