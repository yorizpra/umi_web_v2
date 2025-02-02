<?php

namespace App\Models;

use App\Models\MasterPrivilege;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


/**
 * @SWG\Definition(
 *      definition="User",
 *      required={"name", "username", "jenis_kelamin", "tanggal_lahir", "no_hp", "foto", "email", "password", "id_privilege", "id_status_pengguna"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="name",
 *          description="name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="username",
 *          description="username",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="jenis_kelamin",
 *          description="jenis_kelamin",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="tanggal_lahir",
 *          description="tanggal_lahir",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="no_hp",
 *          description="no_hp",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="foto",
 *          description="foto",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="email",
 *          description="email",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="password",
 *          description="password",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="id_privilege",
 *          description="id_privilege",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="id_status_pengguna",
 *          description="id_status_pengguna",
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
class User extends Authenticatable
{
    use SoftDeletes;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    public $table = 'users';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'username',
        'jenis_kelamin',
        'tanggal_lahir',
        'no_hp',
        'profile_photo_path',
        'email',
        'password',
        'id_privilege',
        'id_status_pengguna',
        'token_notification'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'username' => 'string',
        'jenis_kelamin' => 'string',
        'tanggal_lahir' => 'string',
        'no_hp' => 'string',
        'profile_photo_path' => 'string',
        'email' => 'string',
        'password' => 'string',
        'email_verified_at' => 'datetime',
        'id_privilege' => 'integer',
        'id_status_pengguna' => 'integer'
    ];


    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'username' => 'required',
        'jenis_kelamin' => 'required',
        'tanggal_lahir' => 'required',
        'no_hp' => 'required|numeric',
        'profile_photo_path' => 'required',
        'email' => 'required',
        // 'password' => 'required',
        'id_privilege' => 'required',
        'id_status_pengguna' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     **/
    public function master_privileges()
    {
        return $this->belongsTo(MasterPrivilege::class, 'id_privilege', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function master_status_users()
    {
        return $this->belongsTo(\App\Models\MasterStatusUser::class, 'id_status_pengguna', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function addresses()
    {
        return $this->hasMany(\App\Models\Address::class, 'id_users', 'id');
    }

    // accessor for user role
    public function getRoleAttribute()
    {
        return $this->master_privileges->nama_hak_akses_pengguna;
    }


    public static function boot() {
        parent::boot();
        static::deleting(function($user) { 
            Business::where('id_user', $user->id)->delete();
            Address::where('id_users', $user->id)->delete();
            
        });
    }
}
