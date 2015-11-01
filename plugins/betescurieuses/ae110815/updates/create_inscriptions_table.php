<?php namespace BetesCurieuses\Ae110815\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateInscriptionsTable extends Migration
{

    public function up()
    {
        Schema::create('betescurieuses_ae110815_inscriptions', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('email');
            $table->text('message');
            $table->boolean('active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('betescurieuses_ae110815_inscriptions');
    }

}
