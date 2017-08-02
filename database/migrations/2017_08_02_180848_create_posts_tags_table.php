<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        Schema::create( 'posts_tags', function ( Blueprint $table ) {
            $table->integer( 'post_id' );
            $table->foreign( 'post_id' )->references( 'id' )->on( 'posts' );
            $table->integer( 'tag_id' );
            $table->foreign( 'tag_id' )->references( 'id' )->on( 'tags' );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down ()
    {
        Schema::drop( 'posts_tags' );
    }
}
