<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableUserAddColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('lastname')->after('name');
            $table->string('username')->after('lastname');
            $table->string('birthdate')->after('password');
            $table->integer('role')->after('birthdate')->comment('1=Superadmin;2=Admin;3=Usuario');
            $table->integer('organizacion_id')->unsigned()->after('role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('lastname');
            $table->dropColumn('username');
            $table->dropColumn('birthdate');
            $table->dropColumn('role');
            $table->dropColumn('organizacion_id');
        });
    }
}
