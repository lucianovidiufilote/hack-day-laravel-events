<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductRaw extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'feed_id',
        'name'
    ];

    /**
     * @return BelongsTo
     */
    public function feed(): BelongsTo
    {
        return $this->belongsTo(Feed::class);
    }
}
