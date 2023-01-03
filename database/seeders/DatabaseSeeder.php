<?php

namespace Database\Seeders;

use App\Models\Form;
use App\Models\Hero;
use App\Models\About;
use App\Models\Choose;
use App\Models\Package;
use App\Models\Portfolio;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user1 = User::create([
            'name' => 'Mohamed',
            'email' => 'Med@gmail.com',
            'password'=> Hash::make('password')
        ]);

        $package1 = Package::create([
            'title' => 'Package A',
            'price' => '120',
            'description' => '2 Core Subject + 1 Science Subject',
            'core_limit' => '2',
            'science_limit'=> '1',
            'user_id' => $user1->id
        ]);

        
        Package::create([
            'title' => 'Package B',
            'price' => '165',
            'description' => '2 Core Subject + 2 Science Subject',
            'core_limit' => '2',
            'science_limit'=> '2',
            'user_id' => $user1->id
        ]);

        
        Package::create([
            'title' => 'Package C',
            'price' => '280',
            'description' => 'All Subject',
            'core_limit' => '4',
            'science_limit'=> '3',
            'user_id' => $user1->id
        ]);

        Subject::create([
            'title'=> 'Bahasa Inggeris',
            'type' => 'Teras',
            'user_id' => $user1->id
        ]);

        Subject::create([
            'title'=> 'Sejarah',
            'type' => 'Teras',
            'user_id' => $user1->id
        ]);

        Subject::create([
            'title'=> 'Matematik',
            'type' => 'Teras',
            'user_id' => $user1->id
        ]);



        Subject::create([
            'title'=> 'Sains',
            'type' => 'Teras',
            'user_id' => $user1->id
        ]);

        Subject::create([
            'title'=> 'Add Math',
            'type' => 'Sains',
            'user_id' => $user1->id
        ]);

        Subject::create([
            'title'=> 'Fizik',
            'type' => 'Sains',
            'user_id' => $user1->id
        ]);

        
        Subject::create([
            'title'=> 'Kimia',
            'type' => 'Sains',
            'user_id' => $user1->id
        ]);

        Form::create([
            'name'=> 'Hanaf',
            'email' => 'hanaf@gmail.com',
            'gender'=> 'Male',
            'phone_number' => '01933444567',
            'ic_number'=> '970640563201',
            'address' => 'Block 1-2-3',
            'package_id' => $package1->id
        ]);

        About::create([
            'title'=> 'Pusat Tuisyen Terbang Tinggi',
            'discription'=>'Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit',
            'mission'=> '"To develop a holistic education through experiential learning that leads to boundless creativity, innovation, and entrepreneurship values among students."',
            'vission'=> '“To generate students who have the innovation mindset and ability to empower others for the global success.”',
            'user_id' => $user1->id
        ]);

        Question::create([
            'Question'=> 'Pusat Tuisyen Terbang Tinggi',
            'Answer'=>'Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit',
            'user_id' => $user1->id
        ]);

        Question::create([
            'Question'=> 'Pusat Tuisyen Terbang Tinggi',
            'Answer'=>'Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit',
            'user_id' => $user1->id
        ]);


        Question::create([
            'Question'=> 'Pusat Tuisyen Terbang Tinggi',
            'Answer'=>'Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit',
            'user_id' => $user1->id
        ]);


        Question::create([
            'Question'=> 'Pusat Tuisyen Terbang Tinggi',
            'Answer'=>'Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit',
            'user_id' => $user1->id
        ]);


        Question::create([
            'Question'=> 'Pusat Tuisyen Terbang Tinggi',
            'Answer'=>'Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit',
            'user_id' => $user1->id
        ]);

        
        Question::create([
            'Question'=> 'Pusat Tuisyen Terbang Tinggi',
            'Answer'=>'Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit',
            'user_id' => $user1->id
        ]);

        Teacher::create([
            'name'=> 'Teacher 1',
            'subject_teach'=> 'Subject 1',
            'profile_image'=> 'null'
        ]);

        Teacher::create([
            'name'=> 'Teacher 2',
            'subject_teach'=> 'Subject 2',
            'profile_image'=> 'null'
        ]);

        Teacher::create([
            'name'=> 'Teacher 3',
            'subject_teach'=> 'Subject 3',
            'profile_image'=> 'null'
        ]);

        Teacher::create([
            'name'=> 'Teacher 4',
            'subject_teach'=> 'Subject 4',
            'profile_image'=> 'null'
        ]);

        Hero::create([
            'Title' => 'Your education is our priority',
            'description_1' => 'Pusat Tuisyen by University College of Aviation Malaysia (UniCAM)',
            'description_2' => 'We Provided Science and Core Subject'
        ]);

        Choose::create([
            'point' => 'Handpicked Teacher and Tutor',
            'description' => 'We thoroughly interview every teacher and tutor listed on our platform. With over 14 years of experience in the field of education, we assure you – your child’s education is in safe hands. Expect to see a marked improvement in exams performance.',
            'point_image' => 'null'

        ]);

        Choose::create([
            'point' => 'Proven Track Record',
            'description' => 'Managed by the same team that has received an average of 4.9 stars on social media through our past seminars over a span of 14 years.',
            'point_image' => 'null'

        ]);

        Choose::create([
            'point' => 'Great Support',
            'description' => 'The only company that provides you with client support, ensuring you a peace of mind when hiring our tutor.',
            'point_image' => 'null'

        ]);

        Choose::create([
            'point' => 'Comfortable Environment',
            'description' => 'The only company that provides you with client support, ensuring you a peace of mind when hiring our tutor.',
            'point_image' => 'null'

        ]);

        Portfolio::create([
            'title' => 'Portfolio 1',
            'description' => 'Port 1.',
            'portfolio_image' => 'null'

        ]);

        Portfolio::create([
            'title' => 'Portfolio 2',
            'description' => 'Port 2.',
            'portfolio_image' => 'null'

        ]);

        Portfolio::create([
            'title' => 'Portfolio 3',
            'description' => 'Port 3.',
            'portfolio_image' => 'null'

        ]);

        Portfolio::create([
            'title' => 'Portfolio 4',
            'description' => 'Port 4.',
            'portfolio_image' => 'null'

        ]);

        Portfolio::create([
            'title' => 'Portfolio 5',
            'description' => 'Port 5.',
            'portfolio_image' => 'null'

        ]);

        Portfolio::create([
            'title' => 'Portfolio 6',
            'description' => 'Port 6.',
            'portfolio_image' => 'null'

        ]);

        Portfolio::create([
            'title' => 'Portfolio 7',
            'description' => 'Port 7.',
            'portfolio_image' => 'null'

        ]);





        // Choose::create([
        //     'point' => 'Your education is our priority',
        //     'description' => 'Pusat Tuisyen by University College of Aviation Malaysia (UniCAM)',
        //     'point_image' => 'null'

        // ]);




        // Form::create([
        //     'name' => 'Abu',
        //     'email' => 'abu@gmail.com',
        //     'gender' => 'Male',
        //     'phone_number' => '0111254333',
        //     'ic_number' => '98080808080',
        //     'address' => 'Jalan Kampung 3/33',
        //     'subject_id' => $user1->id
        // ]);
    }
}
