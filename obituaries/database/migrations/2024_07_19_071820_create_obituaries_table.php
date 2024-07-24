<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObituariesTable extends Migration
{
    public function up()
    {
        Schema::create('obituaries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->date('date_of_birth');
            $table->date('date_of_death');
            $table->text('content');
            $table->string('author', 100);
            $table->dateTime('submission_date')->default(now());
            $table->string('slug', 255)->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('obituaries');
    }
}
