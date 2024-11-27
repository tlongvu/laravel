<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'username',
        'password',
        'pass_pin',
        'inviter',
        'invite_code',
        'address',
        'name',
        'total',
        'money',
        'min',
        'commission',
        'vip',
        'vn_account_name',
        'vn_id_bank',
        'more_back',
        'type',
        'status'
    ];

    protected $hidden = [
        'password',
        'pass_pin',
    ];

    protected $casts = [
        'create_date' => 'datetime',
        'vip' => 'boolean',
        'total' => 'decimal:2',
        'money' => 'decimal:2',
        'min' => 'decimal:2',
        'commission' => 'decimal:2',
        'more_back' => 'decimal:2',
    ];
}