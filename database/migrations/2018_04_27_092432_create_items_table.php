<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
              $table->bigIncrements('ItemsID');
              $table->string('ItemsShortName' , 100 );
              $table->string('ItemsLongName' , 300 );
              $table->bigInteger('ItemsMinQue');
              $table->bigInteger('ItemsMaxQue');
              $table->string('ItemsBarCode', 100);
              $table->bigInteger('Items_ItemsSubGroup_Fk')->unsigned();
              $table->foreign('Items_ItemsSubGroup_Fk')->references('ItemSubGroupID')->on('item_sub_groups');
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
        Schema::dropIfExists('items');
    }
}
