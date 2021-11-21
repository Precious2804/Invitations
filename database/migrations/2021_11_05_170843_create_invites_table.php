<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invites', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->uuid('invite_id');
            $table->string('bride_fam')->nullable();
            $table->string('groom_fam')->nullable();
            $table->string('bride')->nullable();
            $table->string('groom')->nullable();
            $table->string('departed')->nullable();
            $table->string('title')->nullable();
            $table->string('celebrant')->nullable();
            $table->string('event')->nullable();
            $table->string('event_name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('topic')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('venue')->nullable();
            $table->string('reception')->nullable();
            $table->string('address')->nullable();
            $table->longText('duration')->nullable();
            $table->string('reception_address')->nullable();
            $table->string('color')->nullable();
            $table->string('rsvp')->nullable();
            $table->longText('toast')->nullable();
            $table->string('photo')->nullable();
            $table->string('template')->nullable();
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
        Schema::dropIfExists('invites');
    }
}
