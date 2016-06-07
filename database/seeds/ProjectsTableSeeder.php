// Seeder for Projects table
<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment below line to wipe the table clean before populating
        DB::table('Projects')->delete();
      //  die(var_dump(DB::table('Projects')));
        $projects = [
          ['id' => 1, 'name' => 'Oh my fish', 'slug' => 'oh-my-fish', 'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => 2, 'name' => 'Lets Yue', 'slug' => 'lets-yue', 'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => 3, 'name' => 'Lan Hub', 'slug' => 'lan-hub', 'created_at' => new DateTime, 'updated_at' => new DateTime]
        ];

        DB::table('Projects')->insert($projects);
    }
}
