<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 20)->unique();
            $table->string('name', 255);
            $table->string('email', 255)->unique();
            $table->string('phone', 15);
            $table->text('address');
            $table->string('position', 255);
            $table->string('department', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
