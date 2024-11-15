<?php
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $ramesh = Student::create(['name' => 'Ramesh']);
        $gaurav = Student::create(['name' => 'Gaurav', 'parent_id' => $ramesh->id]);
        $shalu = Student::create(['name' => 'Shalu', 'parent_id' => $ramesh->id]);

        $deepu = Student::create(['name' => 'Deepu']);
        $amit = Student::create(['name' => 'Amit', 'parent_id' => $deepu->id]);
        $sham_lal = Student::create(['name' => 'Sham Lal', 'parent_id' => $amit->id]);
        $kapil = Student::create(['name' => 'Kapil', 'parent_id' => $deepu->id]);

        $prem_chopra = Student::create(['name' => 'Prem Chopra']);
    }
}
?>