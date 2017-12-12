<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class companyprofile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companyprofile', function (Blueprint $table) {
            $table->increments('id');            ;            
            $table->string('name',50);
            $table->text('title');           
            $table->text('address')->nullable();
            $table->string('contactno',100)->nullable();
            $table->string('email',100)->nullable();
            $table->string('logo',255)->nullable();        
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
        Schema::dropIfExists('companyprofile');
    }
}
