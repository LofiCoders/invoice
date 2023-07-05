<?php

namespace App\Models;

use App\Models\Scopes\UserDataScope;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'products';

    protected array $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const PRODUCT_TYPE_SELECT = [
        '1' => 'Service',
        '2' => 'Product',
    ];

    public const STATUS_SELECT = [
        'Active' => 'Available',
        'Inactive' => 'Unavailable',
    ];

    protected $fillable = [
        'name',
        'product_code',
        'type',
        'price',
        'description',
        'status',
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected static function boot(): void
    {
        parent::boot();

        static::addGlobalScope(new UserDataScope);
    }

    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
