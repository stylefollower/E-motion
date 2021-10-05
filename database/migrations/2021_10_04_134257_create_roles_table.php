<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        */

        // Insert default roles
        DB::table('roles')->insert(
            array(
                'id' => 1,
                'name' => 'guest',
                'guard_name' => 'admin'
            ),
            array(
                'id' => 2,
                'name' => 'common',
                'guard_name' => 'admin'
            ),
            array(
                'id' => 3,
                'name' => 'admin',
                'guard_name' => 'superadmin'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
