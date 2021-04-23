<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';
    public $timestamps = true;

    protected $fillable = ['category_id','title', 'body'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
