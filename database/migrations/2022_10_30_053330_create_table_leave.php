<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLeave extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Leaves', function (Blueprint $table) {
            $table->id();
            $table->string("employee");
            $table->string("leave_type");
            $table->string("from_date");
            $table->string("to_date");
            $table->string("days");
            $table->string("status")->nullable()->change;
            $table->string("action_by")->nullable()->change;
            $table->string("action_date");
            $table->string("approval");
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
        Schema::dropIfExists('table_leave');
    }
}
