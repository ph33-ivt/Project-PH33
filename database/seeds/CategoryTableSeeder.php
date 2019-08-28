<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Category::insert([
    		[
    			'name' => 'Sach',
    			'parent_id' => NULL,
    			'created_at' => now(),
    			'updated_at' => now()
    		],
    		[
    			'name' => 'Truyen',
    			'parent_id' => NULL,
    			'created_at' => now(),
    			'updated_at' => now()
    		],
    		[
    			'name' => 'Sach giao khoa',
    			'parent_id' => 1,
    			'created_at' => now(),
    			'updated_at' => now()
    		],
    		[
    			'name' => 'Sach tham khao',
    			'parent_id' => 1,
    			'created_at' => now(),
    			'updated_at' => now()
    		],
    		[
    			'name' => 'Truyen kiem hiep',
    			'parent_id' => 2,
    			'created_at' => now(),
    			'updated_at' => now()
    		],
    		[
    			'name' => 'Truyen ma',
    			'parent_id' => 2,
    			'created_at' => now(),
    			'updated_at' => now()
    		]

    	]);
    }
}
