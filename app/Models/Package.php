<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    // protected $fillable = ['id','title','price','description'];
    public $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class); // relationship
    }

    public function form(){
        return $this->hasMany(Form::class,'package_id','id');
    }


}
