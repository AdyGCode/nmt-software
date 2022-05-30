<?php

namespace Database\Seeders;

use App\Models\Download;
use App\Models\Software;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DownloadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [2, 3];
        $software = [1, 2, 3, 4, 5];
        $baseDownloads = [
            [
                'software_id'=>1,
                'user_id'=>3,
            ],
            [
                'software_id'=>1,
                'user_id'=>2,
            ],
            [
                'software_id'=>4,
                'user_id'=>3,
            ],
            [
                'software_id'=>2,
                'user_id'=>3,
            ],
            [
                'software_id'=>3,
                'user_id'=>3,
            ],
            [
                'software_id'=>4,
                'user_id'=>2,
            ],
        ];

        foreach ($baseDownloads as $item) {
            Download::create(
                [
                    'id' => null,
                    'user_id' => $item['user_id'],
                    'software_id' => $item['software_id'],
                    'created_at'=>Carbon::now()->subDays(random_int(1,180)),
                ]
            );
            $software =  Software::find( $item['software_id']);
            $software->update([
                                  'downloads'=>$software->downloads+1,
                              ]);
        }

        $countItems = count($baseDownloads);
        $this->command->getOutput()->writeln("<info>            Added {$countItems} Downloaded items.</info> ");

    }
}
