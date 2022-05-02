<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('patronymic');
            $table->string('email');
            $table->date('dob');
            $table->unsignedBigInteger('phone_number');
            $table->tinyInteger('foreign_passport')->default(0);
            $table->string('passport_series');
            $table->unsignedBigInteger('passport_number');
            $table->string('passport_issued');
            $table->date('passport_d_issue');
            $table->string('type')->default('parent');
            $table->timestamps();
            $table->index(['name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
