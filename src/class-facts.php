<?php
/**
 * Facts class.
 *
 * @package Meloniq\GpWordUpKrakow
 */

namespace Meloniq\GpWordUpKrakow;

/**
 * Facts class.
 *
 * This class handles the display of random facts about GlotPress in the WordPress admin area.
 */
class Facts {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'admin_notices', array( $this, 'admin_notice' ) );
	}

	/**
	 * Display an admin notice with a random fact about GlotPress.
	 *
	 * @return void
	 */
	public function admin_notice() {
		$fact = $this->get_random_fact();

		echo '<div class="notice notice-info is-dismissible">';
		echo '<p><strong>' . esc_html__( 'Did you know?', 'gp-wordup-krakow' ) . '</strong> ' . esc_html( $fact ) . '</p>';
		echo '</div>';
	}

	/**
	 * Get a random fact about GlotPress.
	 *
	 * @return string A random fact.
	 */
	public function get_random_fact() {
		$facts = array_merge( $this->get_glotpress_facts(), $this->get_wordup_facts() );

		$random_key = array_rand( $facts );

		return $facts[ $random_key ];
	}

	/**
	 * Get facts about GlotPress.
	 *
	 * @return array A GlotPress facts.
	 */
	public function get_glotpress_facts() {
		$facts = array(
			__( 'GlotPress was started in 2008 by Nikolay Bachiyski and is now maintained by the WordPress community.', 'gp-wordup-krakow' ),
			__( 'GlotPress is built using PHP and the WordPress framework.', 'gp-wordup-krakow' ),
			__( 'GlotPress supports multiple file formats for translation, including .po, .mo, .php, and .json.', 'gp-wordup-krakow' ),
			__( 'GlotPress allows collaborative translation efforts, enabling multiple translators to work on the same project simultaneously.', 'gp-wordup-krakow' ),
			__( 'GlotPress has a robust permission system that allows administrators to control access to projects and translations.', 'gp-wordup-krakow' ),
			__( 'GlotPress can be extended with plugins to add new features or modify existing functionality.', 'gp-wordup-krakow' ),
			__( 'GlotPress integrates with popular version control systems like Git to streamline the translation workflow.', 'gp-wordup-krakow' ),
			__( 'GlotPress provides a REST API that allows developers to interact with the platform programmatically.', 'gp-wordup-krakow' ),
			__( 'GlotPress is used by many open-source projects, including WordPress itself, to manage translations.', 'gp-wordup-krakow' ),
			__( 'GlotPress has a built-in glossary feature that helps maintain consistency in translations across projects.', 'gp-wordup-krakow' ),
		);

		return $facts;
	}

	/**
	 * Get facts about WordUp Kraków.
	 *
	 * @return array A WordUp facts.
	 */
	public function get_wordup_facts() {
		$facts = array();

		$facts[] = __( 'WordUp Kraków has been running since 2013, making it one of the longest-running WordPress meetups in Poland.', 'gp-wordup-krakow' );

		$editions       = Editions::get_data();
		$editions_count = count( $editions );
		$facts[]        = sprintf(
			/* translators: %d: Number of editions. */
			__( 'As of now, WordUp Kraków has hosted %d editions, each featuring insightful talks and networking opportunities.', 'gp-wordup-krakow' ),
			$editions_count
		);

		$organizers       = Organizers::get_data();
		$organizers_count = count( $organizers );
		$facts[]          = sprintf(
			/* translators: %d: Number of organizers. */
			__( 'WordUp Kraków is organized by a dedicated team of %d volunteers who are passionate about WordPress and community building.', 'gp-wordup-krakow' ),
			$organizers_count
		);

		$locations       = Locations::get_data();
		$locations_count = count( $locations );
		$facts[]         = sprintf(
			/* translators: %d: Number of locations. */
			__( 'Over the years, WordUp Kraków has been held in %d different locations around the city, showcasing its vibrant tech scene.', 'gp-wordup-krakow' ),
			$locations_count
		);

		$speakers       = Speakers::get_data();
		$speakers_count = count( $speakers );
		$facts[]        = sprintf(
			/* translators: %d: Number of speakers. */
			__( 'WordUp Kraków has featured talks from over %d speakers, sharing their expertise on various WordPress-related topics.', 'gp-wordup-krakow' ),
			$speakers_count
		);

		return $facts;
	}
}
