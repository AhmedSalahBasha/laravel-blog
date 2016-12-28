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
        $category = new Category();
        $category->name = 'Modern Technologies';
        $category->save();
        
        $category = new Category();
        $category->name = 'Programming';
        $category->save();
        
        $category = new Category();
        $category->name = 'Web Science';
        $category->save();
        
        $category = new Category();
        $category->name = 'Mobile Development';
        $category->save();
        
        $category = new Category();
        $category->name = 'Education';
        $category->save();
    }
}
