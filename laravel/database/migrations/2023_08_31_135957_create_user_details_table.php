<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * 
     */
    public function up():void
    {
        Schema::create('types', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->primary();
            $table->string('address')->nullable;
            $table->date('birth_date');
            $table->string('office_number')->nullable;
            $table->text('signature');
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')
            ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     *
     */
    public function down():void
    {
        Schema::table('user_datails', function (Blueprint $table) {
            $table->dropForeign('user_datails_user_id_foreign');
        });
        Schema::dropIfExists('user_details');
    }
};
