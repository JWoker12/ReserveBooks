<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
        'user_id',
        'book_id',
        'date_departure',
        'date_delivery'
    ];

    public function book($id){
        return Books::where('id', $id);
    }
}
