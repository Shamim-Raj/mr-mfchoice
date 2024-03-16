<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promotion extends Model
{
    use HasFactory,SoftDeletes;

    protected $dates = ['expire_at'];

    public function scopeEligible($query)
    {
        $query->where('is_active',1)
            ->where('is_approve',1)
            ->where(function($q){
                $q->where('expire_at','>',now())->orWhere('expire_at',null);
            });
    }

    /**
     * A promotion is belongs to a product
     *
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
