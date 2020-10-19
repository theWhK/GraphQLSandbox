<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
	protected $table = 'addresses';

	public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
