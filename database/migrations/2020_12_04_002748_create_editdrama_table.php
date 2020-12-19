<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditdramaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editdrama', function (Blueprint $table) {
            $table->bigIncrements('id_drama');
            $table->string('judul');
            $table->string('episode');
            $table->string('durasi');
            $table->string('cast');
            $table->longText('sinopsis');
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
        Schema::dropIfExists('editdrama');
    }
}
