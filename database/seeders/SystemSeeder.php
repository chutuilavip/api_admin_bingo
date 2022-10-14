<?php

namespace Database\Seeders;

use App\Models\System;
use Illuminate\Database\Seeder;

class SystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array(
                'conf_field' => 'title',
                'conf_val' => 'Mô tả',
            ),
            array(
                'conf_field' => 'version',
                'conf_val' => 'v1',
            ),
            array(
                'conf_field' => 'maintain_content',
                'conf_val' => '',
            ),
            array(
                'conf_field' => 'apk',
                'conf_val' => '',
            ),
        );

        $systems = new System();
        $systems::insert($data);
    }
}
