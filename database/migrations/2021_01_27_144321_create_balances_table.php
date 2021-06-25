<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateBalancesTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('balances', function (Blueprint $table) {
                $table->id();
                $table->double('balance');
                $table->foreignId('client_id')->references('id')->on('clients')->onDelete('cascade');
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
            Schema::dropIfExists('balances');
        }
    }

    abstract class testClass
    {
        public $name;
        public $age;

        private function getName()
        {

        }

        abstract public function getAge();
    }

    interface testInterface
    {
        function getName();
        function getAge();
    }
