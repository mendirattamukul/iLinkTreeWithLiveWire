<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Link;
use Illuminate\Support\Str;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'slug'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function setSlugAttribute($slug)
    {  
        $slug=Str::slug($slug);
    
        $length_of_slug=Str::length($slug);
     
        $len=$length_of_slug+2;
        $users= static::all(\DB::raw("substring(slug,1,$length_of_slug) as slug,substring(slug,$len) as number"))->where(fn($result)=>is_numeric($result->number)&&$result->slug==$slug&&$result->number>0)->sortByDesc('number');
       if($users->count()>0)
       {    
         
          $number= $users->first()->number+1;
          $this->attributes['slug']=$slug.'-'. $number;

       }
       else
       {
        $this->attributes['slug']=$slug.'-'.'1';
       }
    

    }
}
