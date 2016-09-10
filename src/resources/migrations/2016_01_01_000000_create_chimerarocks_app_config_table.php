<?php

use ChimeraRocks\AppConfig\Models\AppConfig;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChimerarocksAppConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chimerarocks_appconfig', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('options');
            $table->timestamps();
        });

        $appConfig = new AppConfig();
        $options = [
            'frontLayout' => ''
        ];

        $appConfig->options = $options;
        $appConfig->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('chimerarocks_appconfig');
    }
}
