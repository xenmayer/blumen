<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        Schema::create( 'posts', function ( Blueprint $table ) {
            $table->increments( 'id' );
            $table->string( 'name', 250 );
            $table->text( 'content' )->nullable();
            $table->integer( 'category_id' );
            $table->foreign( 'category_id' )->references( 'id' )->on( 'categories' );
            $table->timestamps();
            $table->timestamp( 'deleted_at' )->nullable();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down ()
    {
        Schema::drop( 'posts' );
    }
}
