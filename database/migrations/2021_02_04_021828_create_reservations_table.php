<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateReservationsTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('reservations', function (Blueprint $table) {
                $table->id();
                $table->string('PNR');
                $table->tinyInteger('confirmation');
                $table->integer('adult');
                $table->integer('children');
                $table->integer('baby');
                $table->double('cost');
                $table->integer('trip_id');
                $table->integer('client_id');
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
            Schema::dropIfExists('reservations');
        }
    }
