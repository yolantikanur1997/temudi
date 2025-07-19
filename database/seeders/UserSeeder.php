<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        $adminybr = User::create(
            [
              'name'    => 'adminybr',
              'email'   => 'adminybr@example.com',
              'password'   => bcrypt('test1234'),
              'organization_id'   => 1,
              'email_verified_at' => now(),
              'is_management' => 1,
              'active' => 1
            ]
          );

        $adminybr->assignRole('Agent');

        $adminybrstore = User::create(
            [
              'name'    => 'adminybrstore',
              'email'   => 'adminybrstore@example.com',
              'password'   => bcrypt('test1234'),
              'organization_id'   => 2,
              'email_verified_at' => now(),
              'is_management' => 1,
              'active' => 1
            ]
          );

        $adminybrstore->assignRole('Agent');

        //   User::create(
        //     [
        //       'name'    => 'adminybrstore',
        //       'email'   => 'adminybrstore@example.com',
        //       'password'   => bcrypt('test1234'),
        //       'organization_id'   => 2,
        //     ]
        //   );
    }
}
