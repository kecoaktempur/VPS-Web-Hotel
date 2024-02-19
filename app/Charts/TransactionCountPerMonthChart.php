<?php

namespace App\Charts;

use App\Models\CurrentTransaction;
use App\Models\PastTransaction;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class TransactionCountPerMonthChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $currentTransactions = CurrentTransaction::whereYear('start_date', 2024)->pluck('start_date');
        $pastTransactions = PastTransaction::whereYear('start_date', 2024)->pluck('start_date');
        $allTransactions = $currentTransactions->merge($pastTransactions);

        $monthlyCounts = [];
        foreach ($allTransactions as $transactionDate) {
            $month = date('n', strtotime($transactionDate));
            if (isset($monthlyCounts[$month])) {
                $monthlyCounts[$month]++;
            } else {
                $monthlyCounts[$month] = 1;
            }
        }

        for ($i = 1; $i <= 12; $i++) {
            if (!isset($monthlyCounts[$i])) {
                $monthlyCounts[$i] = 0;
            }
        }

        ksort($monthlyCounts);

        $monthlyCounts = array_values($monthlyCounts);

        return $this->chart->barChart()
            ->setTitle('Jumlah Transaksi')
            ->setSubtitle('Per Bulan Tahun 2024')
            ->addData('Jumlah Transaksi', $monthlyCounts)
            ->setXAxis(['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'])
            ->setColors(['#9061F9']);
    }
}
