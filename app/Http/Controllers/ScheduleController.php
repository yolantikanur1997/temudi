<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ScheduleController extends Controller
{
    public function store(Request $request,Organization $organization){

    // $request->validate([
    //     'schedules' => 'required|array',
    //     'schedules.*.day' => 'required|string|max:25',
    //     'schedules.*.open_start' => 'nullable|date_format:H:i',
    //     'schedules.*.open_end' => 'nullable|date_format:H:i',
    //     'schedules.*.open_or_closed' => 'required|boolean',
    // ]);

    DB::beginTransaction();

    try {
        foreach ($request->schedules as $schedule) {
            Schedule::updateOrCreate(
                [
                    'day' => $schedule['day'],
                    'organization_id' => $organization->id,
                ],
                [
                    'open_start' => $schedule['open_start'],
                    'open_end' => $schedule['open_end'],
                    'open_or_closed' => $schedule['open_or_closed'],
                    'created_by' => $organization->id,
                    'updated_by' => $organization->id,
                ]
            );
        }

        DB::commit();

        return redirect()->back()->with('success', 'Jadwal berhasil disimpan.');
    } catch (\Throwable $e) {
        DB::rollBack();

        // Simpan log error jika perlu
        Log::error('Gagal menyimpan jadwal: ' . $e->getMessage());

        return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan jadwal. Silakan coba lagi.');
    }
    }
}
