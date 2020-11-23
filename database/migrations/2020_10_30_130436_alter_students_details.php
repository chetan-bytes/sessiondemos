<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterStudentsDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students_details', function (Blueprint $table) {
            $table->renameColumn('last_name', 'student_last_name'); // rename column
            $table->string('first_name', 170)->change(); // length of column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students_details', function (Blueprint $table) {
            $table->renameColumn('student_last_name', 'last_name');
            $table->string('first_name', 50)->change();
        });
    }
}
