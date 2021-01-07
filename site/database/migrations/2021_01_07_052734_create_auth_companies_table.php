<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth_companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_tin');
            $table->string('company_phone');
            $table->string('company_email');
            $table->string('company_password');
            $table->boolean('company_mail_check');
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
        Schema::dropIfExists('auth_companies');
    }
}
