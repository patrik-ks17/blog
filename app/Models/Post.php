<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['category', 'author'];

    public function category()
    {
        //* hasOne, hasMany, belongsTo, belongsToMany
        return $this->belongsTo(Category::class);
    }


    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function scopeFilter($query, array $filters)
    {
        $query->when(
            $filters['search'] ?? false,
            fn ($query, $search) =>
            $query->where(
                fn ($query) =>
                $query
                    ->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%')
            )
        );

        $query->when(
            $filters['category'] ?? false,
            fn ($query, $category) =>
            $query
                //->rightJoin('categories', 'categories.id', '=', 'posts.category_id')
                //->where('categories.slug', $category)
                ->whereHas('category', fn ($query) =>
                $query
                    ->where('slug', $category))
        );

        $query->when(
            $filters['author'] ?? false,
            fn ($query, $author) =>
            $query
                //->rightJoin('categories', 'categories.id', '=', 'posts.category_id')
                //->where('categories.slug', $category)
                ->whereHas('author', fn ($query) =>
                $query
                    ->where('username', $author))
        );
    }



    /* protected $fillable = ['title', 'body', 'excerpt', 'slug', 'category_id']; */

    // public function getRouteKeyName() {
    //     return 'slug';
    // }
}
