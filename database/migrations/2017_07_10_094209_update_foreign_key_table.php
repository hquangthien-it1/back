<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::table('users', function (Blueprint $table) {
            $table->string('sex')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->integer('role_id');
            $table->integer('is_vip')->nullable();
            $table->dateTime('dateoff_vip')->nullable();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });

        Schema::table('albums', function (Blueprint $table) {
            $table->foreign('cat_id')->references('id')->on('cats')->onDelete('cascade');
        });

        Schema::table('playlists', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('sources', function (Blueprint $table) {
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
        });

        Schema::table('lyrics', function (Blueprint $table) {
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });*/

        Schema::table('charts', function (Blueprint $table) {
            $table->foreign('chart_cat_id')->references('id')->on('chart_cats')->onDelete('cascade');
        });

        Schema::table('chart_songs', function (Blueprint $table) {
            $table->foreign('chart_id')->references('id')->on('charts')->onDelete('cascade');
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
        });

        Schema::table('playlist_songs', function (Blueprint $table) {
            $table->foreign('playlist_id')->references('id')->on('playlists')->onDelete('cascade');
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
        });

        Schema::table('comments', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
        });

        Schema::table('artist_songs', function (Blueprint $table) {
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
        });

        Schema::table('artist_albums', function (Blueprint $table) {
            $table->foreign('album_id')->references('id')->on('albums')->onDelete('cascade');
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');
        });

        Schema::table('songs', function (Blueprint $table) {
            $table->foreign('cat_id')->references('id')->on('cats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
