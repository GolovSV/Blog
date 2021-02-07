<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Fields\BelongsTo;

class Post extends Model
{
    public function user()
    {
        return $this->BelongsTo(User::class);
    }
}
