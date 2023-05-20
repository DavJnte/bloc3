<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table -> string('code');
            $table -> string('author');
            $table -> string('libelle');
            $table -> longText('description');
            $table -> string('prix');
            $table -> decimal('prix_promo', 5, 2)->default(0);
            // date de debut de la promo
            $table -> date('date_debut')->nullable();
            // date de fin de la promo
            $table -> date('date_fin')->nullable();

            $table -> string('category');
            $table -> string('image');
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
        Schema::dropIfExists('products');
    }
};
