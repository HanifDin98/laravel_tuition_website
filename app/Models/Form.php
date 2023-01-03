<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    // protected $fillable = ['id','name','email','gender','phone_number','ic_number','address','package_id'];
    public $guarded = ['id'];

    public function subjects()
    {
        return $this ->belongsToMany(Subject::class, 'subject_form', 'form_id','subject_id');
    }

    public function package(){
        return $this->belongsTo(Package::class);
    }

    // public static function semua($columns = ['*'])
    // {
    //     return Form::with('subjects')->orderByDesc('created_at')->with('package')->get(
    //         is_array($columns) ? $columns : func_get_args()
    //     );
    // }
}
