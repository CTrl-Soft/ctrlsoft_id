<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	public $mailAdd = [
		'from'          		=> 'required|alpha_numeric_space|min_length[5]|max_length[35]',
		'email'         		=> 'required|valid_email',
		'subject'           	=> 'required|string|min_length[8]|max_length[35]',
		'phone'        			=> 'required|min_length[12]|max_length[16]',
		'message'         		=> 'required|string|min_length[5]|max_length[1000]',
	];

	public $mailAdd_errors = [
		'from'=> [
			'required' 				=> 'Nama lengkap wajib diisi',
			'alpha_numeric_space'	=> 'Nama lengkap hanya boleh berisi huruf, angka dan spasi',
			'min_length'			=> 'Nama lengkap minimal 5 karakter',
			'max_length'			=> 'Nama lengkap maksimal 35 karakter'
		],
		'email'=> [
			'required' 				=> 'Email wajib diisi',
			'valid_email'			=> 'Email tidak valid'
		],
		'subject'=> [
			'required' 				=> 'Subject wajib diisi',
			'string'				=> 'Konfirmasi subject hanya boleh berisi huruf, angka, spasi dan karakter lain',
			'min_length'			=> 'Subject minimal 8 karakter',
			'max_length'			=> 'Subject maksimal 35 karakter'
		],
		'phone'=> [
			'required' 				=> 'No HP wajib diisi',
			'min_length'			=> 'No HP minimal 12 karakter',
			'max_length'			=> 'No HP maksimal 16 karakter'
		],
		'message'=> [
			'required' 				=> 'Pesan wajib diisi',
			'string'				=> 'Konfirmasi Pesan hanya boleh berisi huruf, angka, spasi dan karakter lain',
			'min_length'			=> 'Pesan minimal 5 karakter',
			'max_length'			=> 'Pesan maksimal 1000 karakter'
		],
	];
}
