<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhoneAndInterestToContactformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contactforms', function (Blueprint $table) {
            $table->string('phone')->nullable()->after('email'); 
            $table->string('interest')->nullable()->after('phone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contactforms', function (Blueprint $table) {
            $table->dropColumn(['phone', 'interest']);
        });
    }
}
