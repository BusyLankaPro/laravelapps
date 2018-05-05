<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemSubGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_sub_groups', function (Blueprint $table) {
              $table->bigIncrements('ItemSubGroupID');
              $table->string('ItemSubGroupName' , 100 );
              $table->bigInteger('ItemSubGroup_ItemMainGroup_FK')->unsigned();
              $table->foreign('ItemSubGroup_ItemMainGroup_FK')->references('ItemMainGroupID')->on('item_main_groups');
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
        Schema::dropIfExists('item_sub_groups');
    }
}
