<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleaves', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employeeId')->constrained('employees', 'id');
            $table->foreignId('leavesTypeId')->constrained('_leaves_types', 'id');
            $table->string ('leave_description')->nullable(); 
            $table->date('leave_from');
            $table->date('leave_to');
            $table->string ('leave_status'); 
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
        Schema::dropIfExists('empleaves');
    }
};
