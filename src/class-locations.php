<?php
/**
 * Locations class.
 *
 * @package Meloniq\GpWordUpKrakow
 */

namespace Meloniq\GpWordUpKrakow;

/**
 * Locations class.
 *
 * This class handles the locations data for the event.
 */
class Locations {

	/**
	 * Get locations data.
	 *
	 * @return array Array of locations.
	 */
	public static function get_data() {
		$data = array(
			'domowka-cafe'           => array(
				'name'    => 'Domówka Cafe',
				'address' => 'ul. Miodowa 28a, 31-050 Kraków',
				'map'     => 'https://maps.app.goo.gl/Ekm8jsANn9YaEGCk7',
			),
			'hotel-ibis'             => array(
				'name'    => 'Hotel Ibis',
				'address' => 'ul. Pawia 11, 31-154 Kraków',
				'map'     => 'https://maps.app.goo.gl/Yx6NvNPofMBxV6Mr5',
			),
			'grand-parade'           => array(
				'name'    => 'Grand Parade',
				'address' => 'ul. Kotlarska 11, 31-539 Kraków',
				'map'     => 'https://maps.app.goo.gl/7JKiP5WqM76dvsDk8',
			),
			'politechnika-krakowska' => array(
				'name'    => 'Politechnika Krakowska',
				'address' => 'ul. Warszawska 24, 31-155 Kraków',
				'map'     => 'https://maps.app.goo.gl/UDx7FS28gTT7XCjF8',
			),
		);

		return $data;
	}
}
