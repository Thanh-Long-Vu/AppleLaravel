<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id('id_blog');
            $table->string('title');
            $table->string('description');
            $table->tinyInteger('active')->default(0);
            $table->string('content');
            $table->string('avatar');
            $table->unsignedBigInteger('product_type_id')->nullable()->index()->default(0);
            $table->foreign('product_type_id')->references('id_product_type')->on('product_types');
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
