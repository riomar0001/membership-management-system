<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class MembershipType extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'membership_types';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'members_id',
        'type',
        'reviewed_by',
    ];

    protected $casts = [
        'type' => 'string',
    ];

    public function member()
    {
        return $this->belongsTo(Member::class, 'members_id');
    }
}
