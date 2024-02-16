<?php

namespace App\Console\Commands;

use App\Models\CurrentTransaction;
use App\Models\Expiring;
use Illuminate\Console\Command;

class CheckExpiringTransactions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check-expiring-transactions';

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
        Expiring::truncate();
        $expiringTransactions = CurrentTransaction::where('end_date', '=', now()->toDateString())->whereNull('check_out_date')->get();

        if ($expiringTransactions) {
            foreach ($expiringTransactions as $expiringTransaction) {
                Expiring::insert([
                    'transaction_id' => $expiringTransaction->id,
                    'is_read' => false
                ]);
            }
        }    
    }
}
