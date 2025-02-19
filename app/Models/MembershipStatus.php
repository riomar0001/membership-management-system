<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class MembershipStatus extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'membership_status';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'members_id',
        'status',
        'approved_by',
        'rejected_by',
        'rejection_title',
        'rejection_reason',
        'update_token',
    ];

    protected $casts = [
        'status' => 'string',
    ];

    public function member()
    {
        return $this->belongsTo(Member::class, 'members_id');
    }
}
