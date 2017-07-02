<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExpandedTextAd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expanded_text_ad', function (Blueprint $table) {
            $table->increments('id');
            $table->string('xsi_type');
            $table->string('ad_group_id');
            $table->string('headline_part1');
            $table->string('headline_part2')->nullable();
            $table->string('description');
            $table->string('path1');
            $table->string('path2');
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
        Schema::dropIfExists('expanded_text_ad');
    }
}
