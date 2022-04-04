<?php
namespace App\Console\Commands;
use App\Models\Order;
use App\Events\OrderCreated;
use Illuminate\Console\Command;

class CreateOrder extends Command
{
    protected $signature = 'order:create';
    
    protected $description = 'Create an order';
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function handle()
    {
        $order = Order::with('user')->inRandomOrder()->first();
        event(new OrderCreated($order));
        return 0;
    }
}