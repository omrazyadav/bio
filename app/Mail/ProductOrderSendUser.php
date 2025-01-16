<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProductOrderSendUser extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data = [])
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject(__('messages.mail.product_purchase'))
            ->markdown('emails.product_order_send_user')
            ->with(['data' => $this->data]);
    }
}
