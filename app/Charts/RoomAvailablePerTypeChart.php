<?php

namespace App\Charts;

use App\Models\Room;
use App\Models\Type;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;

class RoomAvailablePerTypeChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $types = Type::all();
        $typeNames = $types->pluck('name')->toArray();
        $dateNow = Carbon::now()->toDateString();

        foreach ($types as $type) {
            $availableCount = Room::where('type_id', $type->id)
                ->whereNotIn('id', function ($query) use ($dateNow) {
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
        
            $notAvailableCount = Room::where('type_id', $type->id)->count() - $availableCount;
        
            $availableDatas[] = $availableCount;
            $notAvailableDatas[] = $notAvailableCount;
        }
        

        return $this->chart->barChart()
            ->setTitle('Ketersediaan Ruangan per Tipe')
            ->setSubtitle('Tanggal ' . Carbon::parse($dateNow)->locale('id')->isoFormat('D MMMM YYYY'))
            ->addData('Tersedia', $availableDatas)
            ->addData('Tidak Tersedia', $notAvailableDatas)
            ->setXAxis($typeNames)
            ->setColors(['#ffc63b', '#ff6384']);
    }
}
