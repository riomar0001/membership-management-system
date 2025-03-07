<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Member extends Model
{
    use HasUuids;

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The data type of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'student_id',
        'first_name',
        'last_name',
        'umindanao_email',
        'program',
        'year_level',
        'proof_of_membership',
        'agree_to_terms_and_conditions'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'student_id' => 'integer',
        'year_level' => 'integer',
        'agree_to_terms_and_conditions' => 'boolean',
    ];

    /**
     * Get the membership status associated with the member.
     */
    public function membershipStatus(): HasOne
    {
        return $this->hasOne(MembershipStatus::class, 'members_id', 'id');
    }

    /**
     * Get the membership type associated with the member.
     */
    public function membershipType(): HasOne
    {
        return $this->hasOne(MembershipType::class, 'members_id', 'id');
    }

    /**
     * Get the member's full name.
     *
     * @return string
     */
    public function getFullNameAttribute(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }
}
