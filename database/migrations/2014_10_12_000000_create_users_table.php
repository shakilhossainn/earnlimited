<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('balance')->default(0);
            $table->integer('active_id')->default(2);
            $table->string('refer_by')->nullable();
            $table->string('refer_code');
            $table->bigInteger('phone_num')->nullable();
            $table->string('tranjecton_id')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->text('address')->nullable();
            $table->string('slug')->nullable();
            $table->tinyInteger('user_roll')->default(3);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
