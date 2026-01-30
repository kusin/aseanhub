<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Storage;

class Judges extends Authenticatable
{
    // ...
    use SoftDeletes, HasFactory;

    // ...
    protected $table      = 'tb_judges';
    protected $primaryKey = 'id_judges';

    // ...
    protected $keyType   = 'int';
    public $incrementing = true;

    // ...
    protected $fillable = [
        'judges_name',
        'origin_country',
        'origin_institution',
        'judges_task',
        'judges_photo',
        'email',
        'password',
        'status_data',
    ];

    protected $hidden = [
        'password',
    ];

    // ...
    protected $attributes = [
        'status_data' => 'Active',
    ];

    // ...
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function getPhotoUrlAttribute()
    {
        if ($this->judges_photo && Storage::disk('public')->exists($this->judges_photo)) {
            return asset('storage/' . $this->judges_photo);
        }
        return null;
    }
}
