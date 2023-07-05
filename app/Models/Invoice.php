<?php

namespace App\Models;

use App\Models\Scopes\UserDataScope;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'invoices';

    protected array $dates = [
        'invoice_date',
        'due_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const STATUS_SELECT = [
        '0' => 'Pending',
        '1' => 'Full Paid',
        '2' => 'Partial Paid',
        '3' => 'Cancelled',
    ];

    protected $fillable = [
        'customer_id',
        'invoice_number',
        'invoice_date',
        'due_date',
        'subtotal',
        'tax',
        'total',
        'notes',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    /*public function getInvoiceDateAttribute($value): ?string
    {
        return $value ? Carbon::parse($value)->format(config('saas.date_format')) : null;
    }

    public function setInvoiceDateAttribute($value): void
    {
        $this->attributes['invoice_date'] = $value ? Carbon::createFromFormat(config('saas.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getDueDateAttribute($value): ?string
    {
        return $value ? Carbon::parse($value)->format(config('saas.date_format')) : null;
    }

    public function setDueDateAttribute($value): void
    {
        $this->attributes['due_date'] = $value ? Carbon::createFromFormat(config('saas.date_format'), $value)->format('Y-m-d') : null;
    }*/

    protected static function boot(): void
    {
        parent::boot();

        static::addGlobalScope(new UserDataScope);
    }
}
