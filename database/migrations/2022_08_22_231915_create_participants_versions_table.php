<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsVersionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants_versions', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('participant_id')->index('fk_participant');
            $table->enum('grade', ['A', 'B', 'C', 'D', 'F', 'I', 'En curso'])->nullable()->default('En curso');
            $table->boolean('is_deleted')->default(false);
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('update_at')->useCurrentOnUpdate()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants_versions');
    }
}
