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
        Schema::create('leave_applies', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id');
            $table->integer('leave_type_id');
            $table->integer('total_leave_day');
            $table->date('leaver_starts_date');
            $table->date('leaver_ends_date');
            $table->string('approved_by');
            $table->text('description');
            $table->text('attached_document')->nullable();
            $table->tinyInteger('leave_status')->default(1);
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
        Schema::dropIfExists('leave_applies');
    }
};
