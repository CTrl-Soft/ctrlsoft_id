<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class TmailSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'from' 			=>  'Yanto Hariyono',
				'subject'       =>  'Seeder database',
				'email'       	=>  'mrthx.89@gmail.com',
				'phone'         =>  '0812-3456-7891',
				'message'		=>  'Jl. Mawar Putih No. 190, Waru Sidoarjo',
				'created_at' 	=>  Time::now()
			],
			[
				'from' 			=>  'Yanto Hariyono',
				'subject'       =>  'Seeder database 2',
				'email'       	=>  'mrthx.89@gmail.com',
				'phone'         =>  '0812-3456-7891',
				'message'		=>  'Jl. Mawar Putih No. 190, Waru Sidoarjo',
				'created_at' 	=>  Time::now()
			],
			[
				'from' 			=>  'Yanto Hariyono',
				'subject'       =>  'Seeder database 3',
				'email'       	=>  'mrthx.89@gmail.com',
				'phone'         =>  '0812-3456-7891',
				'message'		=>  'Jl. Mawar Putih No. 190, Waru Sidoarjo',
				'created_at' 	=>  Time::now()
			],
		];
		$this->db->table('tmail')->insertBatch($data);
	}
}
