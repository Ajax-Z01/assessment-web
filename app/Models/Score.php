<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string, mixed>
     */
    protected $fillable = [
        'user_id',        // The user associated with this score
        'verbal_sw',      // Verbal score for SW
        'verbal_kat',     // Verbal score for KAT
        'numeric_sw',     // Numeric score for SW
        'numeric_kat',    // Numeric score for KAT
        'abstract_sw',    // Abstract score for SW
        'abstract_kat',   // Abstract score for KAT
        'total_score',    // Total score
        'iq',             // IQ score
    ];

    /**
     * Get the user that owns the score.
     *
     * This defines an inverse one-to-many relationship with User.
     * A score belongs to a single user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
