<?php
namespace Database\Seeders\Auth;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

/**
 * Class UserRoleTableSeeder.
 */
class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        User::findOrFail(1)->assignRole('super admin');
        User::findOrFail(2)->assignRole('ilmiy_rahbar');
        User::findOrFail(3)->assignRole('kafedra_mudiri');
        User::findOrFail(4)->assignRole('direktor');
        User::findOrFail(5)->assignRole('talaba');

        Schema::enableForeignKeyConstraints();
    }
}
