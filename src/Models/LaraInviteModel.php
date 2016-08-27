<?php

namespace Junaidnasir\Larainvite\Models;

use Illuminate\Database\Eloquent\Model;

class LaraInviteModel extends Model
{
    protected $table;

    public function __construct(array $attributes = [])
    {
        $this->table = config('larainvite.table');

        parent::__construct($attributes);
    }
    
    /**
     * Referral User
     */
    public function user()
    {
        return $this->belongsTo(config('larainvite.UserModel'));
    }
}
