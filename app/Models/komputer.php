<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komputer extends Model
{
    use HasFactory;
    protected $table = 'warnet';
    protected $fillable = ['PC'];
    protected $primaryKey = 'id';

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
