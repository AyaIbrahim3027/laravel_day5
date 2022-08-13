<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'user_id',
        'title',
        'body',
        'enabled',
        'image'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];




    //In user list page display the count of posts every user has
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }







}