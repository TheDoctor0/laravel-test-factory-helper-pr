<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestPostgresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_postgres', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('company');
            $table->string('country');
            $table->string('description');
            $table->string('email');
            $table->string('first_name');
            $table->string('firstname');
            $table->string('guid');
            $table->string('last_name');
            $table->string('lastname');
            $table->decimal('lat');
            $table->decimal( 'latitude');
            $table->decimal('lng');
            $table->decimal('longitude');
            $table->string('name');
            $table->string('password');
            $table->string('phone');
            $table->string('phone_number');
            $table->string('postcode');
            $table->string('postal_code');
            $table->string('remember_token');
            $table->string('slug');
            $table->string('street');
            $table->string('address1');
            $table->string('address2');
            $table->string('summary');
            $table->string('url');
            $table->string('user_name');
            $table->string('username');
            $table->string('uuid');
            $table->string('zip');
            $table->string('string');
            $table->text('text');
            $table->date('date');
            $table->time('time');
            $table->dateTimeTz('datetimetz');
            $table->dateTime('datetime');
            $table->integer('integer');
            $table->bigInteger('bigint');
            $table->smallInteger('smallint');
            $table->decimal('decimal');
            $table->float('float');
            $table->boolean('boolean');
            $table->enum('enum', ['one', 'two', 'three']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_postgres');
    }
}
