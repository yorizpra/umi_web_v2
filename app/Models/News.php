<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @SWG\Definition(
 *      definition="News",
 *      required={"title", "sub_title", "description", "author"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="title",
 *          description="title",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="sub_title",
 *          description="sub_title",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="description",
 *          description="description",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="author",
 *          description="author",
 *          type="string"
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
class News extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'news';


    protected $dates = ['deleted_at'];

    protected $appends = ['photos'];


    public $fillable = [
        'id',
        'title',
        'sub_title',
        'description',
        'author',
        'is_headline',
        'title_related_link',
        'related_link',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'sub_title' => 'string',
        'description' => 'string',
        'author' => 'string',
        'is_headline'=>'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'sub_title' => 'required',
        'description' => 'required',
        'author' => 'required',
        'title_related_link' => 'required',
        'related_link' => 'required',
        'is_headline' => 'required',
    ];


    public function getPhotosAttribute()
    {
        return GeneralFile::where('news_id',$this->id)->get();
    }
}
