<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @SWG\Definition(
 *      definition="EventRegister",
 *      required={"event_id", "user_id"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="event_id",
 *          description="event_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="user_id",
 *          description="user_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class EventRegister extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'event_registers';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'event_id',
        'user_id',
        'name',
        'jenis_kelamin',
        'tanggal_lahir',
        'no_hp',
        'foto',
        'city',
        'subdistrict',
        'full_address',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'event_id' => 'integer',
        'user_id' => 'integer',
        'name',
        'jenis_kelamin',
        'tanggal_lahir',
        'no_hp',
        'foto',
        'city',
        'subdistrict',
        'full_address',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'event_id' => 'required',
        'user_id' => 'required',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function events()
    {
        return $this->belongsTo(\App\Models\Event::class, 'event_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function users()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }

    public function getFotoAttribute()
    {
        if ($this->attributes['foto']) {
            return url('') . Storage::url($this->attributes['foto']);
        } else {
            return null;
        }
    }
}
