<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VehicleOut extends Model
{
    use HasFactory;

    protected $fillable = ['vehicleIn_id','created_by'];

    public function vehicleIn(): BelongsTo
    {
        return $this->belongsTo(VehicleIn::class, 'vehicleIn_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public static function booted(){

        static::creating(function($model)
        {
            $model->created_by = auth()->id();
        });
    }

}
