<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    //..
    public function index()
    {
        $users = User::where('id', '!=', auth()->user()->id)->get();
        return view('users.index', compact('users'));
    }

        public function followers() 
    {
        return $this->belongsToMany(self::class, 'followers', 'follows_id', 'user_id')
                    ->withTimestamps();
    }

    public function follows() 
    {
        return $this->belongsToMany(self::class, 'followers', 'user_id', 'follows_id')
                    ->withTimestamps();
    }

        public function follow($userId) 
    {
        $this->follows()->attach($userId);
        return $this;
    }

    public function unfollow($userId)
    {
        $this->follows()->detach($userId);
        return $this;
    }

    public function isFollowing($userId) 
    {
        return (boolean) $this->follows()->where('follows_id', $userId)->first(['id']);
    }

}