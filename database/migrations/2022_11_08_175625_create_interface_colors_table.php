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
        Schema::create('interface_color', function (Blueprint $table) {
            $table->id();
            $table->string("hd_cl_background");
            $table->string("hd_cl_text_category");
            $table->string("hd_cl_text_contact");
            $table->string("hd_cl_text_contact_content");
            $table->string("bd_cl_background_category");
            $table->string("bd_cl_text_category");
            $table->string("ft_cl_background");
            $table->string("ft_cl_text");
            $table->unsignedBigInteger("create_by");
            $table->timestamps();
            $table->foreign('create_by')->references('id')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interface_colors');
    }
};
