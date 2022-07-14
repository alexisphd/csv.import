<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('Код');
            $table->text('Наименование');
            $table->string('Уровень1')->nullable();
            $table->string('Уровень2')->nullable();
            $table->string('Уровень3')->nullable();
            $table->string('Цена')->nullable();
            $table->string('ЦенаСП')->nullable();
            $table->string('Количество')->nullable();
            $table->text('ПоляСвойств')->nullable();
           $table->string('СовместныеПокупки')->nullable();
            $table->string('ЕдиницаИзмерения')->nullable();
            $table->string('Картинка')->nullable();
            $table->string('ВыводитьНаГлавной')->nullable();
            $table->text('Описание')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
