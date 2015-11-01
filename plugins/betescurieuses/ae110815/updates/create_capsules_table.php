<?php namespace BetesCurieuses\Ae110815\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCapsulesTable extends Migration
{

    public function up()
    {
        Schema::create('betescurieuses_ae110815_capsules', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->text('link');
            $table->dateTime('published_at');
            $table->boolean('published');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('betescurieuses_ae110815_capsules');
    }

}
