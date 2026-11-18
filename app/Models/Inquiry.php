<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Inquiry
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string|null $event_type
 * @property string|null $event_date
 * @property int|null $guests_count
 * @property string|null $service_needed
 * @property string|null $food_preference
 * @property string|null $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
class Inquiry extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'phone',
        'event_type',
        'event_date',
        'guests_count',
        'service_needed',
        'food_preference',
        'message',
    ];
}
