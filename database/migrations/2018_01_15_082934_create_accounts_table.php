<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('goal_title', 30);
            $table->text('description');
            $table->double('target_amount', 8, 2)->unsigned();
            $table->double('deposit', 8, 2)->nullable()->unsigned();
            $table->double('withdraw', 8, 2)->nullable()->unsigned();
            $table->double('balance', 8, 2)->unsigned()->default(0.00);
            $table->timestamps();
            $table->dateTime('target_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
