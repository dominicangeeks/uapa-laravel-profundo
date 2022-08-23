<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToVersionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('versions', function (Blueprint $table) {
            $table->foreign(['teacher_id'], 'fk_teacher_participant')->references(['id'])->on('participants')->onUpdate('NO ACTION');
            $table->foreign(['capacitation_id'], 'fk_capacitation')->references(['id'])->on('capacitations')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('versions', function (Blueprint $table) {
            $table->dropForeign('fk_teacher_participant');
            $table->dropForeign('fk_capacitation');
        });
    }
}
