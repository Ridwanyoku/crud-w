<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Notifications\Notifiable;

class Article extends Model
{

    use HasFactory, Notifiable;
    protected $fillable = ['title', 'content', 'author_id'];

    public function author(): BelongsTo
    {
    return $this->belongsTo(User::class, 'author_id');
    }
}

