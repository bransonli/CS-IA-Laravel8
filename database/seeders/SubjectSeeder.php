<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $subjects = [
            ['id' => 1, 'name' => 'Physics',],
            ['id' => 2, 'name' => 'Math'],
            ['id' => 3, 'name' => 'Computer science'],
            ['id' => 4, 'name' => 'Langlit'],
            ['id' => 5, 'name' => 'Chinese'],
        ];        
        
        foreach($subjects as $subject){
            Subject::create($subject);
        }
    }
}

/**https://stackoverflow.com/questions/28594076/seed-multiple-rows-at-once-laravel-5 */