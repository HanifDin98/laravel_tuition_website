<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    public $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function forms()
    {
        return $this ->belongsToMany(Form::class, 'subject_form', 'form_id','subject_id');
    }
  

}
