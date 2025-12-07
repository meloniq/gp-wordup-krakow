<?php
/**
 * Editions class.
 *
 * @package Meloniq\GpWordUpKrakow
 */

namespace Meloniq\GpWordUpKrakow;

/**
 * Editions class.
 *
 * This class handles the editions data for the event.
 */
class Editions {

	/**
	 * Get editions data.
	 *
	 * @see https://wordup.krakow.pl/wydarzenia/
	 *
	 * @return array Array of editions.
	 */
	public static function get_data() {
		$data = array(
			'2013-lato'        => array(
				'date'       => '2013-07-19',
				'location'   => 'domowka-cafe',
				'organizers' => array( 'mwolak' ),
			),
			'2013-jesien'      => array(
				'date'       => '2013-11-15',
				'location'   => 'domowka-cafe',
				'organizers' => array( 'mwolak', 'kkarus' ),
			),
			'2014-zima'        => array(
				'date'       => '2014-02-28',
				'location'   => 'domowka-cafe',
				'organizers' => array( 'mwolak', 'kkarus' ),
			),
			'2014-wiosna'      => array(
				'date'       => '2014-04-25',
				'location'   => 'domowka-cafe',
				'organizers' => array( 'mwolak', 'kkarus' ),
			),
			'2014-lato'        => array(
				'date'       => '2014-07-25',
				'location'   => 'domowka-cafe',
				'organizers' => array( 'mwolak', 'kkarus' ),
			),
			'2014-jesien'      => array(
				'date'       => '2014-10-31',
				'location'   => 'domowka-cafe',
				'organizers' => array( 'mwolak', 'kkarus' ),
			),
			'2015-zima'        => array(
				'date'       => '2015-01-30',
				'location'   => 'domowka-cafe',
				'organizers' => array( 'mwolak', 'kkarus' ),
			),
			'2015-wiosna'      => array(
				'date'       => '2015-05-08',
				'location'   => 'domowka-cafe',
				'organizers' => array( 'mwolak', 'kkarus' ),
			),
			'2015-lato'        => array(
				'date'       => '2015-07-10',
				'location'   => 'domowka-cafe',
				'organizers' => array( 'mwolak' ),
			),
			'2015-jesien'      => array(
				'date'       => '2015-11-06',
				'location'   => 'domowka-cafe',
				'organizers' => array( 'mwolak' ),
			),
			'2016-zima'        => array(
				'date'       => '2016-02-12',
				'location'   => 'domowka-cafe',
				'organizers' => array( 'mwolak', 'kkarus' ),
			),
			'2017-wiosna'      => array(
				'date'       => '2017-03-17',
				'location'   => 'hotel-ibis',
				'organizers' => array( 'dkawula', 'tkolkiewicz' ),
			),
			'2017-jesien'      => array(
				'date'       => '2017-10-14',
				'location'   => 'domowka-cafe',
				'organizers' => array( 'dkawula', 'tkolkiewicz' ),
			),
			'2018-zima'        => array(
				'date'       => '2018-03-02',
				'location'   => 'domowka-cafe',
				'organizers' => array( 'dkawula', 'tkolkiewicz' ),
			),
			'2018-jesien'      => array(
				'date'       => '2018-09-28',
				'location'   => 'domowka-cafe',
				'organizers' => array( 'dkawula', 'tkolkiewicz' ),
			),
			'2019-zima'        => array(
				'date'       => '2019-02-15',
				'location'   => 'domowka-cafe',
				'organizers' => array( 'dkawula', 'tkolkiewicz' ),
			),
			'2019-wiosna'      => array(
				'date'       => '2019-05-31',
				'location'   => 'domowka-cafe',
				'organizers' => array( 'dkawula', 'tkolkiewicz' ),
			),
			'2023-jesien'      => array(
				'date'       => '2023-10-24',
				'location'   => 'grand-parade',
				'organizers' => array( 'lwilczak', 'skadzielawa' ),
			),
			'2024-wiosna'      => array(
				'date'       => '2024-03-07',
				'location'   => 'grand-parade',
				'organizers' => array( 'lwilczak', 'skadzielawa' ),
			),
			'2024-lato'        => array(
				'date'       => '2024-07-04',
				'location'   => 'grand-parade',
				'organizers' => array( 'lwilczak', 'skadzielawa', 'smisniakiewicz' ),
			),
			'2024-jesien'      => array(
				'date'       => '2024-10-03',
				'location'   => 'grand-parade',
				'organizers' => array( 'lwilczak', 'smisniakiewicz' ),
			),
			'2025-zima'        => array(
				'date'       => '2025-01-16',
				'location'   => 'grand-parade',
				'organizers' => array( 'lwilczak', 'smisniakiewicz' ),
			),
			'2025-wiosna'      => array(
				'date'       => '2025-04-10',
				'location'   => 'politechnika-krakowska',
				'organizers' => array( 'lwilczak', 'smisniakiewicz' ),
			),
			'2025-wrzesien'    => array(
				'date'       => '2025-09-18',
				'location'   => 'politechnika-krakowska',
				'organizers' => array( 'lwilczak', 'smisniakiewicz' ),
			),
			'2025-pazdziernik' => array(
				'date'       => '2025-10-13',
				'location'   => 'politechnika-krakowska',
				'organizers' => array( 'lwilczak', 'smisniakiewicz', 'mkuchnik' ),
			),
			'2025-listopad'    => array(
				'date'       => '2025-11-17',
				'location'   => 'politechnika-krakowska',
				'organizers' => array( 'lwilczak', 'smisniakiewicz', 'mkuchnik' ),
			),
			'2025-grudzien'    => array(
				'date'       => '2025-12-15',
				'location'   => 'politechnika-krakowska',
				'organizers' => array( 'smisniakiewicz', 'kjanoska', 'apiotrowski', 'zmisniakiewicz', 'mslezak', 'kkrowka' ),
			),
		);

		return $data;
	}
}
