<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategorijaNamirniceTable extends Migration
{
    public function up()
    {
        Schema::create('kategorija_namirnice', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
          
        });
    }

    public function down()
    {
        Schema::dropIfExists('kategorija_namirnice');
    }
}
