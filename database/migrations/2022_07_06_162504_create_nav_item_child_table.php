<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavItemChildTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nav_item_child', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('link');

            $table->text('styles'); //font, bg, colors
            $table->foreignId('nav_item_father')->constrained('nav_items');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nav_item_child');
    }
}
