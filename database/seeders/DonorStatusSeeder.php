<?php

namespace Database\Seeders;

use App\Models\Donor\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonorStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $donationStatuses = ['Pending', 'Accepted', 'Rejected'];

        foreach($donationStatuses as $donationStatus) {
            Status::query()->create(['name' => $donationStatus]);
        }
    }
}
