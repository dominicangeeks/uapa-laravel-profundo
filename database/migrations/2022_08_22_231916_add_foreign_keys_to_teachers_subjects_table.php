<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTeachersSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teachers_subjects', function (Blueprint $table) {
            $table->foreign(['teacher_id'], 'fk_teacher')->references(['id'])->on('participants')->onUpdate('NO ACTION');
            $table->foreign(['subjects_id'], 'fk_subject')->references(['id'])->on('subjects')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teachers_subjects', function (Blueprint $table) {
            $table->dropForeign('fk_teacher');
            $table->dropForeign('fk_subject');
        });
    }
}
