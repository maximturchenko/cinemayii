<?php

namespace app\models;

use app\core\Model;

class Portfoliomodel extends Model {
	public function get_data()
	{	
		return array(			
			array(
				'Name' => 'Maxim',
				'Last Name' => 'Turchenko',
				'Experience' => '4',
				'Linktogithub' => 'https://github.com/maximturchenko/',
				'Description' => 'Перспективный веб-разработчик '
			),
			array(
				'Name' => 'Oleg',
				'Last Name' => 'Gazmanov',
				'Experience' => '2',
				'Linktogithub' => '',
				'Description' => 'Веб-разработчик '
			), 
		);
	}
}