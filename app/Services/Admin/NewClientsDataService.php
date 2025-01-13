<?php

namespace App\Services\Admin;

use App\Models\User;
use Carbon\Carbon;

class NewClientsDataService
{
    /**
     * Izračunavanje novih korisnika i procentualnih promena za različite vremenske periode.
     *
     * @return array
     */
    public function getNewClientsData()
    {
        $now = Carbon::now();

        // Korisnici registrovani u poslednjih 7 dana
        $newClientsLast7Days = User::where('created_at', '>=', $now->subDays(7))->count();
        
        // Korisnici registrovani u poslednjih 30 dana
        $newClientsLast30Days = User::where('created_at', '>=', $now->subDays(30))->count();

        // Korisnici registrovani u poslednja 3 meseca (90 dana)
        $newClientsLast3Months = User::where('created_at', '>=', $now->subDays(90))->count();

        // Izračunavanje procenta promene
        $percentChange7Days = $newClientsLast7Days > 0 ? ($newClientsLast7Days / 7) * 100 : 0;
        $percentChange30Days = $newClientsLast30Days > 0 ? ($newClientsLast30Days / 30) * 100 : 0;
        $percentChange3Months = $newClientsLast3Months > 0 ? ($newClientsLast3Months / 90) * 100 : 0;

        return [
            'newClientsLast7Days' => $newClientsLast7Days,
            'newClientsLast30Days' => $newClientsLast30Days,
            'newClientsLast3Months' => $newClientsLast3Months,
            'percentChange7Days' => $percentChange7Days,
            'percentChange30Days' => $percentChange30Days,
            'percentChange3Months' => $percentChange3Months,
        ];
    }
}

