<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }


    protected $table = 'profiles';
    protected $primaryKey = 'profileID';
    protected $fillable = ['data'];

    protected $casts = [
        'data' => 'array',
    ];


    protected function data(): Attribute{
        return Attribute::make(
          get: fn ($value) => json_decode($value, true),
          set: fn ($value) => json_encode($value),
        );
    }
}
