<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public $timestamps = false;
    
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->date('created_at');
            $table->bigInteger('income_accounts_id');
            $table->bigInteger('income_categories_id');
            $table->decimal('amount');
            $table->string('note');
            $table->string('description');
            // date
            // account
            // category
            // amount
            // note
            // description
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incomes');
    }
};
