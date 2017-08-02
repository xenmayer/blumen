<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        Schema::create( 'categories', function ( Blueprint $table ) {
            $table->increments( 'id' );
            $table->string( 'name', 250 );
            $table->integer( 'parent_id' )->nullable()->index();
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
        Schema::drop( 'categories' );
    }
}
