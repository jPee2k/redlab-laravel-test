<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_staff', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->bigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('staff')->onDelete('cascade');
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
        Schema::table('department_staff', function (Blueprint $table) {
            $table->dropForeign('department_staff_department_id_foreign'); // ['department_id']
            $table->dropForeign('department_staff_employee_id_foreign'); // ['employee_id']
        });

        Schema::dropIfExists('department_staff');
    }
}
