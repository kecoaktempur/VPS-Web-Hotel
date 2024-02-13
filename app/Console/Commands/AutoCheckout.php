<?php

namespace App\Console\Commands;

use App\Models\CurrentTransaction;
use Illuminate\Console\Command;

class AutoCheckout extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto-checkout';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $notCheckedOutTransactions = CurrentTransaction::where('end_date', '<', now()->toDateString())->whereNull('check_out_date')->get();

        if ($notCheckedOutTransactions->isNotEmpty()) {
            foreach ($notCheckedOutTransactions as $notCheckedOutTransaction) {
                CurrentTransaction::findOrFail($notCheckedOutTransaction->id)->update(['check_out_date' => $notCheckedOutTransaction->end_date]);
            }
        }      
    }
}
