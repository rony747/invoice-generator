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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->string('services');
            $table->date('today_date')->nullable();
            $table->date('start_date')->nullable();
            $table->double('rate')->nullable();
            $table->double('rate_seo')->nullable();
            $table->double('rate_hosting')->nullable();
            $table->double('rate_hosting_ecommerce')->nullable();
            $table->string('company_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->text('scope_intro')->nullable();
            $table->text('scope_methodology')->nullable();
            $table->text('resources_intro')->nullable();
            $table->text('getting_intro')->nullable();
            $table->text('getting_signature')->nullable();
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
        Schema::dropIfExists('projects');
    }
};
