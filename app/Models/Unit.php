<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Unit extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nama_unit',
        'deskripsi_unit',
        'is_available',
    ];

    /**
     * Get all of the facilities for the Unit
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilities(): HasMany
    {
        return $this->hasMany(Facility::class, 'unit_id', 'id');
    }

    /**
     * Get all of the prices for the Unit
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prices(): HasMany
    {
        return $this->hasMany(Price::class, 'unit_id', 'id');
    }

    /**
     * Get all of the galleries for the Unit
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function galleries(): HasMany
    {
        return $this->hasMany(Gallery::class, 'unit_id', 'id');
    }
}
