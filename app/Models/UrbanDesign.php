<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UrbanDesign extends Model
{
    // ...
    use SoftDeletes, HasFactory;

    // ...
    protected $table      = 'tb_urban_design';
    protected $primaryKey = 'id_urban_design';

    // ...
    protected $keyType   = 'int';
    public $incrementing = true;

    // ...
    protected $fillable = [
        'id_participants',
        'design_title',
        'design_description',
        'design_presentation',
        'images_1',
        'images_2',
        'images_3',
        'videos_1',
        'videos_2',
        'videos_3',
        'status_data',
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
    public function participants()
    {
        return $this->belongsTo(Participants::class, 'id_participants', 'id_participants');
    }
}
