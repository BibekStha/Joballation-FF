<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCompanyContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
      Schema::table('applications', function(Blueprint $table) {
        $table->string('email', 100);
        $table->string('phone', 25);
        $table->dropColumn('secondary_street_address');
      });
      Schema::table('users', function(Blueprint $table) {
        $table->dropColumn('user_id');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
