<?php

namespace App\Listeners;

use App\Events\Orderpaid;
use App\Notifications\OrderPaidNotification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendOrderPaidMail implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Orderpaid  $event
     * @return void
     */
    public function handle(Orderpaid $event)
    {
        //从事件对象中取出对应的订单
        $order = $event->getOrder();
        //调用notify方法来发送通知
        $order->user->notify(new OrderPaidNotification($order));

    }
}
