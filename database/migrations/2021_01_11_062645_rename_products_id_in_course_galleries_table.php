<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameProductsIdInCourseGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course_galleries', function (Blueprint $table) {
            $table->renameColumn('products_id', 'courses_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course_galleries', function (Blueprint $table) {
            $table->renameColumn('courses_id', 'products_id');
        });
    }
}
