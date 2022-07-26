<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use App\Models\Lecon;
use App\Models\Module;
use App\Models\Chapitre;
use App\Models\Formation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        Formation::insert([
            'name'=>'HTML/CSS',
            'description'=>'Decouvrez les bases de la programation a tout les niveaux , beneficier du meilleure',

        ]);

        Formation::insert([
            'name'=>'.Net',
            'description'=>'Decouvrez les bases de la programation a tout les niveaux , beneficier du meilleure',
        ]);

        Formation::insert([
            'name'=>'React',
            'description'=>'Decouvrez les bases de la programation a tout les niveaux , beneficier du meilleure',

        ]);

        Formation::insert([
            'name'=>'Vue Js',
            'description'=>'Decouvrez les bases de la programation a tout les niveaux , beneficier du meilleure',

        ]);
        
        Formation::factory(5)->create();

        $Formation=Formation::all()->each(function($Formation )
        {

            $module= Module::factory(5)->make();

            $Formation->modules()->saveMany($module);


        });

            $modules=Module::all()->each(function ($module){

                $chapitres=Chapitre::factory(5)->make();
                $module->chapitres()->saveMany($chapitres);

            });


            $chapitres=Chapitre::all()->each(function ($chapitres){

                $lecons=Lecon::factory(5)->make();
                $chapitres->lecons()->saveMany($lecons);

            });

            Role::create(['name'=>'utilisateur']);
           $admin= Role::create(['name'=>'admin']);

            $utilisateur = User::create(
                [
                    'name'=>'yvan',
                    'email'=>'yvan@gmail.com',
                    'password'=>Hash::make('password')
                ]
            );

            DB::table('role_user')->insert( ['role_id' =>2, 'user_id' =>1 ]);

          
    





        
    }
}
