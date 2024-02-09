<?php

namespace App\Console\Commands;

use App\Models\CurrentTransaction;
use App\Models\PastTransaction;
use Illuminate\Console\Command;

class MovePastTransactions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'move-past-transactions';

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
        $pastTransactions = CurrentTransaction::where('end_date', '<', now()->toDateString())->whereNotNull('check_out_date')->get();

        if ($pastTransactions){
            foreach($pastTransactions as $pastTransaction){
                PastTransaction::create([
                    'room_id' => $pastTransaction->room_id,
                    'name' => $pastTransaction->name,
                    'start_date' => $pastTransaction->start_date,
                    'end_date' => $pastTransaction->end_date,
                    'check_out_date' => $pastTransaction->check_out_date,
                    'notes' => $pastTransaction->notes
                ]);
                CurrentTransaction::findOrFail($pastTransaction->id)->delete();
            }
        }
    }
}
