<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use Illuminate\Database\Eloquent\SoftDeletes;
class Attendance extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'date', 'status'];

    public function student() {
        return $this->belongsTo(Student::class);
    }
    use SoftDeletes;

}
