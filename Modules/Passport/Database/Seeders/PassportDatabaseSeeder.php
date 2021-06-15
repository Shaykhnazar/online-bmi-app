<?php

namespace Modules\Passport\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Passport\Entities\Passport;
use Modules\Passport\Entities\PassportType;
use Auth;

class PassportDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Auth::loginUsingId(1);

        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*
         * passport_type Seed
         * ------------------
         */
        DB::table('passport_type')->truncate();
        echo "\nTruncate: passport_type \n";

        $types = [
            [
                'name' => 'Qizil passport'
            ],
            [
                'name' => 'Yashil passport'
            ],
            [
                'name' => 'Id karta'
            ],
        ];
        PassportType::create($types);

        echo " Insert: passport_type \n\n";

        /*
         * Passports Seed
         * ------------------
         */
        DB::table('passports')->truncate();
        echo "Truncate: passports \n";

        // Populate the pivot table
        Passport::factory()
            ->count(21)
            ->create();
        echo " Insert: passports \n\n";


        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
