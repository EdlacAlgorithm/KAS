<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{	
	//private $tables =['users','categories','states','achievements','comments'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	/*foreach ($this->tables as  $table)
    	{
    		DB::table($table)->truncate();
    	}*/

    	Model::unguard();

         //$this->call(UsersTableSeeder::class);
          $this->call(DBSeeder::class);

        Model::reguard();
    }
}
