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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->integer('department_id');
            $table->integer('designation_id');
            $table->string('employee_name');
            $table->string('employee_code');
            $table->string('email');
            $table->string('mobile');
            $table->text('address');
            $table->string('nid');
            $table->text('image');
            $table->string('blood_group');
            $table->string('date_of_birth');
            $table->string('joining_state');
            $table->string('employee_type');
            $table->string('basic_salary');
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('employees');
    }
};
