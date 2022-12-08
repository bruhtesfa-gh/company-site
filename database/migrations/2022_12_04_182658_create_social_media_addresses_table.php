<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialMediaAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_media_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->references('id')
                ->on('teams')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('media');
            $table->string('url')->nullable();
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
        Schema::dropIfExists('social_media_addresses');
    }
}
