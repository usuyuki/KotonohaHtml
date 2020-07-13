<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mails', function (Blueprint $table) {
            $table->id();
            $table->string('for');
            $table->string('from');
            $table->text('text');//text型は65535字まで
            $table->unsignedBigInteger('fold_id');
            $table->unsignedBigInteger('scent_id');
            $table->unsignedBigInteger('sheet_id');
            $table->string('url');
            $table->uuid('token');
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
        Schema::dropIfExists('mails');
    }
}
