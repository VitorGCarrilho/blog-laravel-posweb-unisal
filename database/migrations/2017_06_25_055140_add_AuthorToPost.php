<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAuthorToPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->bigInteger('author_id');
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->foreign('author_id')
                ->references('id')->on('authors')
                ->onDelete('cascade');
        });           
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('posts_author_id_foreign');
    }
}
