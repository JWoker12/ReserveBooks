<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
    public function book(): BelongsTo
    {
        return $this
        ->belongsTo(Books::class);
    }
}
