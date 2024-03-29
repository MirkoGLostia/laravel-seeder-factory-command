<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::table('products', function (Blueprint $table) {
      // creo una colonna per il tipo
      $table->unsignedBigInteger('category_id')->nullable()->after('id');

      // assegno una foreign key alla colonna
      $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('products', function (Blueprint $table) {
      // droppo la foreign key
      $table->dropForeign(['category_id']);

      // droppo la colonna
      $table->dropColumn('category_id');
    });
  }
};
