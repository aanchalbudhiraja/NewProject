<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'parent_id'];

    public function children()
    {
        return $this->hasMany(Student::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Student::class, 'parent_id');
    }
}
?>
