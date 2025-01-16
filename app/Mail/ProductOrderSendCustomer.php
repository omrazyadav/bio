<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProductOrderSendCustomer extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data = [])
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Product Purchase Success')
            ->markdown('emails.product_order_send_customer')
            ->with(['data' => $this->data]);
    }
}
