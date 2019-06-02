<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('job_title');
            $table->string('company')->nullable();
            $table->string('street_address')->nullable();
            $table->string('secondary_street_address')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();
            $table->float('salary')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('status')->nullable();
            $table->string('source')->nullable();
            $table->string('link')->nullable();
            $table->string('description')->nullable();
            $table->boolean('favourite')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
