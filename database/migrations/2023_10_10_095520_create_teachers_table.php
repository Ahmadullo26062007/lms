<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("role_id");
            $table->unsignedBigInteger("subject_id");
            $table->unsignedBigInteger("salary_id");
            
            $table->string("first_name");
            $table->string("last_name");

            $table->boolean("gender_type");  #0 = False or 1 = True

            $table->foreign("salary_id")->references("id")->on("salaries"); 
            $table->foreign("subject_id")->references('id')->on("subjects");
            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("role_id")->references("id")->on("roles");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
