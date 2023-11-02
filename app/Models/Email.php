<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    protected $fillable = ['key', 'value','customer_id'];
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

}
