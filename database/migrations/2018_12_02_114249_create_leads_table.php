<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_primary');
            $table->string('phone_secondary');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('city');
            $table->string('province_state');
            $table->string('country');
            $table->text('note');
            $table->string('status')->default('lead');
            $table->dateTime('first_contact')->nullable();
            $table->dateTime('last_contact')->nullable();
            $table->timestamp('date_added')->useCurrent();
            $table->integer('user_added')->nullable();
            $table->integer('assigned_to')->nullable();
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
        Schema::dropIfExists('leads');
    }
}
