<?php
namespace Database\Seeders\Auth;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

/**
 * Class PermissionRoleTableSeeder.
 */
class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        // Create Roles
        $super_admin = Role::create(['name' => 'super admin']);
        $ilmiy_rahbar = Role::create(['name' => 'ilmiy_rahbar']);
        $kafedra_mudiri = Role::create(['name' => 'kafedra_mudiri']);
        $direktor = Role::create(['name' => 'direktor']);
        $talaba = Role::create(['name' => 'talaba']);

        // Create Permissions
        Permission::firstOrCreate(['name' => 'view_backend']);
        Permission::firstOrCreate(['name' => 'edit_settings']);
        Permission::firstOrCreate(['name' => 'view_logs']);

        $permissions = Permission::defaultPermissions();

        foreach ($permissions as $perms) {
            Permission::firstOrCreate(['name' => $perms]);
        }

        \Artisan::call('auth:permission', [
            'name' => 'student',
        ]);
        echo "\n _Talabalar_ Permissions Created.";

        \Artisan::call('auth:permission', [
            'name' => 'teacher',
        ]);
        echo "\n _Teachers_ Permissions Created.";

        \Artisan::call('auth:permission', [
            'name' => 'group',
        ]);
        echo "\n _Guruhlar_ Permissions Created.";

        \Artisan::call('auth:permission', [
            'name' => 'theme',
        ]);
        echo "\n _Mavzular_ Permissions Created.";

        \Artisan::call('auth:permission', [
            'name' => 'rate',
        ]);
        echo "\n _Baholash_ Permissions Created.";

        \Artisan::call('auth:permission', [
            'name' => 'report',
        ]);
        echo "\n _Hisobotlar_ Permissions Created.";

        echo "\n\n";

        // Assign Permissions to Roles
        $super_admin->givePermissionTo(Permission::all());
        $ilmiy_rahbar->givePermissionTo(['view_backend', 'view_groups', 'view_students', 'view_themes', 'view_rates', 'view_reports']);
        $direktor->givePermissionTo('view_reports');
        $kafedra_mudiri->givePermissionTo('view_reports');

        Schema::enableForeignKeyConstraints();
    }
}
