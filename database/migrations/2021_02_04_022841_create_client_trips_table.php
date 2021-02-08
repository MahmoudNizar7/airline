<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateClientTripsTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('client_trips', function (Blueprint $table) {
                $table->id();
                $table->string('first_name');
                $table->string('last_name');
                $table->date('DOB');
                $table->string('nationality');
                $table->string('passport_no');
                $table->date('passport_expiration_date');
                $table->string('type');
                $table->foreignId('reservation_id')->references('id')->on('reservations')->onDelete('cascade');
                $table->timestamps();
                $table->rememberToken();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('client_trips');
        }
    }
