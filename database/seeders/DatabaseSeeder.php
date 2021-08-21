
<?php

use Database\Seeders\UserSeederTable;
use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Seeders\CategoriesSeederTable;
use Database\Seeders\LaratrustSeeder;
use Database\Seeders\ProductsSeederTable;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            UserSeederTable::class,
            LaratrustSeeder::class
            ]);

    }
}
