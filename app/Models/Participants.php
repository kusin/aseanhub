<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Participants extends Authenticatable
{
    // ...
    use SoftDeletes, HasFactory;

    // ...
    protected $table      = 'tb_participants';
    protected $primaryKey = 'id_participants';

    // ...
    protected $keyType   = 'int';
    public $incrementing = true;

    // ...
    protected $fillable = [
        'team_name',
        'participants_name_1',
        'participants_name_2',
        'participants_name_3',
        'participants_name_4',
        'participants_name_5',
        'participants_country',
        'participants_phone',
        'status_registration',
        'status_urban_design',
        'status_assessment_one',
        'status_assessment_two',
        'status_final_assessment',
        'email',
        'password',
        'status_data',
    ];

    // ...
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

    // ...
    public function urbanDesign()
    {
        return $this->hasMany(UrbanDesign::class, 'id_participants', 'id_participants');
    }

    protected static function booted()
    {
        static::deleting(function ($participants) {
            if ($participants->isForceDeleting()) {
                $participants->urbanDesign()->forceDelete();
            } else {
                $participants->urbanDesign()->delete();
            }
        });
    }
}
