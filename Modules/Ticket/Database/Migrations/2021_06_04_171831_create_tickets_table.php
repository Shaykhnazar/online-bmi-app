<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pass_type_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('created_by');

            $table->tinyInteger('status')->nullable()->default(0);
            $table->json('params')->nullable();

            $table->integer('moderated_by')->unsigned()->nullable();
            $table->datetime('moderated_at')->nullable();

            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('deleted_by')->unsigned()->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('tickets');
    }
}
