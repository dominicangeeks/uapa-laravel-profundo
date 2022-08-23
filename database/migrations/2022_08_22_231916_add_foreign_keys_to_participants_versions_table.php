<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToParticipantsVersionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('participants_versions', function (Blueprint $table) {
            $table->foreign(['participant_id'], 'fk_participant')->references(['id'])->on('participants')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('participants_versions', function (Blueprint $table) {
            $table->dropForeign('fk_participant');
        });
    }
}
