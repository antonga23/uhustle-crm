<?php

namespace App\Mail;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderCreated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The order instance.
     *
     * @var Order
     */
    public $order;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order, $subject = '')
    {
      $this->order = $order;
      $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      $attahment = '';
      if($this->subject == 'New Purchase Order'){
        $attahment = $this->order->delivery_note;
      }
      if($this->subject == 'New Delivery Note'){
        $attahment = $this->order->purchase_order;
      }
        return $this->subject($this->subject)
                    ->view('mail.orders.created')
                    ->attachFromStorage('/public/pdf/' . $attahment, $attahment,[
                        'mime' => 'application/pdf',
                    ]);
    }
}
