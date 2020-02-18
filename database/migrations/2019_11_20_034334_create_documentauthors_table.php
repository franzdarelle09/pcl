<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentauthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentauthors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('document_id')->unsigned();
            $table->bigInteger('author_id')->unsigned();
            $table->foreign('document_id')->references('id')->on('documents'); 
            $table->foreign('author_id')->references('id')->on('authors'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentauthors');
    }
}
