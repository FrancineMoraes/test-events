<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropTypesOnPivotTickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tickets_has_cart', function (Blueprint $table) {
            $table->dropColumn('type');
            $table->dropColumn('tickets_id');
        });

        Schema::table('tickets_has_cart', function (Blueprint $table) {
            $table->increments('tickets_id')->unsigned();
            $table->foreign('tickets_id')
                ->references('id')->on('tickets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tickets_has_cart', function (Blueprint $table) {
            $table->enum('type', ['Adult', 'Student', 'Kid']);
            $table->increments('tickets_id')->unsigned();
        });
    }
}
