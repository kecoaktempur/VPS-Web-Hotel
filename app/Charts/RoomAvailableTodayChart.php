<?php

namespace App\Charts;

use App\Models\Room;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;

class RoomAvailableTodayChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $dateNow = Carbon::now()->toDateString();
        $roomCount = Room::count();

        $roomAvailable = Room::whereNotIn('id', function ($query) use ($dateNow) {
            $query->select('room_id')
                ->from('current_transactions')
                ->where(function ($q) use ($dateNow) {
                    $q->where(function ($inner) use ($dateNow) {
                        $inner->where(function ($subInner) use ($dateNow) {
                            $subInner->where('check_out_date', '!=', null)
                                ->where('start_date', '<=', $dateNow)
                                ->where('check_out_date', '>', $dateNow);
                        })->orWhere(function ($subInner) use ($dateNow) {
                            $subInner->where('check_out_date', '=', null)
                                ->where('start_date', '<=', $dateNow)
                                ->where('end_date', '>', $dateNow);
                        });
                    });
                });
        })->count();

        $roomNotAvailable = $roomCount - $roomAvailable;

        return $this->chart->pieChart()
            ->setTitle('Ketersediaan Ruangan Hari Ini')
            ->setSubtitle('Tanggal ' . Carbon::parse($dateNow)->locale('id')->isoFormat('D MMMM YYYY'))
            ->addData([$roomAvailable, $roomNotAvailable])
            ->setLabels(['Tersedia', 'Tidak Tersedia'])
            ->setColors(['#1C64F2', '#16BDCA']);
    }
}
