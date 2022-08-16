<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imports', function (Blueprint $table) {
            $table->id();
            $table->date("order_date");
            $table->bigInteger("customer_id");
            $table->string("customer_document", 11);
            $table->string("customer_billing_full_name");
            $table->string("customer_email");
            $table->string("customer_phone");
            $table->string("customer_city");
            $table->string("customer_state");
            $table->string("customer_zipcode", 8);
            $table->string("payment_method");
            $table->string("payment_method_title");
            $table->string("payment_transaction_id");
            $table->string("local_retirada");
            $table->string("local_retirada_title");
            $table->decimal('valor', 15, 2)->default(0);
            $table->json("products");
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
        Schema::dropIfExists('imports');
    }
}
