<?php
/**
 * Speakers class.
 *
 * @package Meloniq\GpWordUpKrakow
 */

namespace Meloniq\GpWordUpKrakow;

/**
 * Speakers class.
 *
 * This class handles the speakers data for the event.
 */
class Speakers {

	/**
	 * Get speakers data.
	 *
	 * @return array Array of speakers.
	 */
	public static function get_data() {
		$data = array(
			'mwolak'    => array(
				'name'  => 'Marcin Wolak',
				'talks' => array(
					'2013-lato'   => 'WP & AJAX – zróbmy to na czysto',
					'2014-jesien' => 'Nie daj się zwolnić, czyli co zrobić jak WordPress zamula',
				),
			),
			'mkuchnik'  => array(
				'name'  => 'Maciek Kuchnik',
				'talks' => array(
					'2013-lato'   => 'WordPress jako baza dla aplikacji internetowej – case study',
					'2014-zima'   => 'WP Cron',
					'2014-lato'   => 'Heartbeat API w praktyce',
					'2017-jesien' => 'Jak zoptymalizować realizację zlecenia, aby szybko i skutecznie zamknąć projekt?',
					'2018-jesien' => 'Jak wysyłać maile z WordPressa aby zawsze dochodziły do odbiorcy?',
					'2023-jesien' => 'Przenoś WordPressa lepiej – czyli o migracji WP między serwerami',
				),
			),
			'pmirota'   => array(
				'name'  => 'Przemysław Mirota',
				'talks' => array(
					'2013-lato' => 'Tips and tricks – ujarzmianie WordPressa',
				),
			),
			'kpowelski' => array(
				'name'  => 'Krzysiek Powelski',
				'talks' => array(
					'2013-lato' => 'Przepis na wtyczkę o nieskończonych możliwościach',
				),
			),
			'kjanoska'  => array(
				'name'  => 'Katarzyna Janoska',
				'talks' => array(
					'2013-lato'     => 'Responsive Design, czyli WordPress na komórki',
					'2025-wrzesien' => 'Społeczność WordPressa: kółko wzajemnej adoracji czy sieć kontaktów dla rozwoju Twojej kariery?',
				),
			),
		);

		return $data;
	}
}
