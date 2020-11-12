<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasColumns extends Migration
{
   
    
    public function up()
    {
        Schema::table('ventas', function (Blueprint $table) {
            $table->string('Producto');
            $table->integer('Cantidad_Vendida');
            $table->integer('Precio_Unidad');
            $table->integer('Precio_Total');
            $table->integer('Ganacias_Ventas');
        });
    }

   
    public function down()
    {
        Schema::table('ventas', function (Blueprint $table) {
            $table->dropColumn('Producto');
            $table->dropColumn('Cantidad_Vendida');
            $table->dropColumn('Precio_Unida');
            $table->dropColumn('Precio_Total');
            $table->dropColumn('Ganacias_Ventas');
        });
      
    }
}
