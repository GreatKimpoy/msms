<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname', 45);
            $table->string('middlename', 45)->nullable();
            $table->string('lastname', 45);
            $table->text('street')->nullable();
            $table->text('barangay')->nullable();
            $table->text('city')->nullable();
            $table->string('contact', 30);
            $table->string('email')->nullable();
            $table->unique(['firstname', 'middlename','lastname']);
            $table->softDeletes();
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
        Schema::dropIfExists('customers');
    }
}
