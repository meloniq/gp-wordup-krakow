<?php
/**
 * Organizers class.
 *
 * @package Meloniq\GpWordUpKrakow
 */

namespace Meloniq\GpWordUpKrakow;

/**
 * Organizers class.
 *
 * This class handles the organizers data for the event.
 */
class Organizers {

	/**
	 * Get organizers data.
	 *
	 * @return array Array of organizers.
	 */
	public static function get_data() {
		$data = array(
			'mwolak'         => array(
				'name' => 'Marcin Wolak',
			),
			'tkolkiewicz'    => array(
				'name' => 'Tomasz Kołkiewicz',
			),
			'kkarus'         => array(
				'name' => 'Katarzyna Karus',
			),
			'dkawula'        => array(
				'name' => 'Dominik Kawula',
			),
			'lwilczak'       => array(
				'name' => 'Łukasz Wilczak',
			),
			'skadzielawa'    => array(
				'name' => 'Szymon Kądzielawa',
			),
			'smisniakiewicz' => array(
				'name' => 'Sebastian Miśniakiewicz',
			),
			'mkuchnik'       => array(
				'name' => 'Maciek Kuchnik',
			),
			'mslezak'        => array(
				'name' => 'Magdalena Ślężak',
			),
			'kjanoska'       => array(
				'name' => 'Katarzyna Janoska',
			),
			'kkrowka'        => array(
				'name' => 'Katarzyna Krówka',
			),
			'apiotrowski'    => array(
				'name' => 'Andrzej Piotrowski',
			),
		);

		return $data;
	}
}
