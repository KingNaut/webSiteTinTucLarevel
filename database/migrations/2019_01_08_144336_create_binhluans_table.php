<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBinhluansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binhluans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tennguoibl');
            $table->string('emailnguoibl');
            $table->string('noidungbl');
            $table->unsignedInteger('mabv');
            $table->foreign('mabv')->references('id')->on('baiviets');

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
        Schema::dropIfExists('binhluans');
    }
}
