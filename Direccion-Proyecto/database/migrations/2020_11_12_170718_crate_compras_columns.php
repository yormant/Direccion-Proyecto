<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrateComprasColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('compras', function (Blueprint $table) {
            $table->string('producto');
            $table->string('cantidad');
            $table->string('precio_unidad');
            $table->string('precio_total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('compras', function (Blueprint $table) {
            $table->dropColumn('producto');
            $table->dropColumn('cantidad');
            $table->dropColumn('precio_unidad');
            $table->dropColumn('precio_total');
        });
    }
}
