<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCapacitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('capacitations', function (Blueprint $table) {
            $table->foreign(['capacitations_types_id'], 'fk_capacitations_type')->references(['id'])->on('capacitations_types')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('capacitations', function (Blueprint $table) {
            $table->dropForeign('fk_capacitations_type');
        });
    }
}
