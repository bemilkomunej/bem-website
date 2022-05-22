<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

/**
 * @property integer $id
 * @property string $title
 * @property string $slug
 * @property string $content
 * @property int $view
 * @property string $thumbnail
 * @property string $created_at
 * @property string $updated_at
 */
class Blog extends Model
{
    use HasFactory;
    use Sluggable;

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['title', 'slug', 'contents','thumbnail', 'status','tag_id', 'user_id', 'created_at', 'updated_at'];

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%'. $search .  '%')->orWhere('contents', 'like', '%'. $search .  '%');
        });
        $query->when($filters['category'] ?? false, function($query, $category){

            return $query->whereHas('tag', function($query) use ($category){
                $query->where('title', $category);
            });
        });
        $query->when($filters['author'] ?? false, function($query, $author){

            return $query->whereHas('user', function($query) use ($author){
                $query->where('name', $author);
            });
        });
    }

    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('title', 'like', '%'.$query.'%');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tag(){
        return $this->belongsTo(Tag::class);
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
