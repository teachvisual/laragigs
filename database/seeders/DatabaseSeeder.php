<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'is_admin' => true ,
            'password' => '$2y$10$a66xxWEnny2gguCtDVCyR.568VDFYijVSJpWv2pvg4/cWRWwfxC5m'            
        ]) ;
        

        $user1 = User::factory()->create([
            'name' => 'Teach',
            'email' => 'teach@gmail.com',
            'password' => '$2y$10$a66xxWEnny2gguCtDVCyR.568VDFYijVSJpWv2pvg4/cWRWwfxC5m'            
        ]) ;

        $user2 = User::factory()->create([
            'name' => 'Yacine',
            'email' => 'yacine@gmail.com',
            'password' => '$2y$10$a66xxWEnny2gguCtDVCyR.568VDFYijVSJpWv2pvg4/cWRWwfxC5m'            
        ]) ;

        Listing::create([
            'title' => 'Laravel Senior Developer',
            'user_id' => $user1->id ,
            'tags' => 'laravel, javascript',
            'company' => 'Acme Corp',
            'location' => 'Boston, MA',
            'email' => 'email1@email.com',
            'website' => 'https://www.acme.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        ]);

        Listing::create([
            'title' => 'Full-Stack Engineer',
            'user_id' => $user2->id ,
            'tags' => 'laravel, backend ,api',
            'company' => 'Stark Industries',
            'location' => 'New York, NY',
            'email' => 'email2@email.com',
            'website' => 'https://www.starkindustries.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        ]);
        
        Listing::create([
            'title' => 'Laravel Developer',
            'user_id' => $user1->id ,
            'tags' => 'laravel, vue, javascript',
            'company' => 'Wayne Enterprises',
            'location' => 'Gotham, NY',
            'email' => 'email3@email.com',
            'website' => 'https://www.wayneenterprises.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        ]);

        Listing::create([
            'title' => 'Backend Developer',
            'user_id' => $user2->id ,
            'tags' => 'laravel, php, api',
            'company' => 'Skynet Systems',
            'location' => 'Newark, NJ',
            'email' => 'email4@email.com',
            'website' => 'https://www.skynet.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        ]);

        Listing::create([
            'title' => 'Junior Developer',
            'user_id' => $user1->id ,
            'tags' => 'laravel, php, javascript',
            'company' => 'Wonka Industries',
            'location' => 'Boston, MA',
            'email' => 'email4@email.com',
            'website' => 'https://www.wonka.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        ]);
        
    }
}
