<?php
	/*
		state.php
		ws-template

		This file defines a class structure for managing state across a large, or complex website.

		A state object is essentially a view controller that is
		responsible for defining a given "state" that a website may be in.
		States should be thought of as pairings of model-data with views (so, if
		you're familiar with the typical MVC paradigm, a state is an integrated 
		analog to the Controller, responsible for calling data, and presenting
		views ).

		This specific instance of WSState is designed for WordPress.
		This specific instance of WSState is further designed for use with ACF.
		
		@author Nic Schumann < Work-Shop
	*/

/*
 * an AD-HOC enumeration class that lists the site's possible states. 
 * Used for switching content based on state.
 */
abstract class SiteState {
	const Landing 			= 0;
	const Projects 				= 1;
	const Collaborations	= 2;
	const Current 			= 3;
	const Info 				= 4;
}


class WSState {
	private $registered_data_models = array();
	private $site_state;



	function __construct() {
		$this->registered_data_models = array();
		$this->site_state = null;
	}

	/* the register_data_model function binds a model-data-type, ie. a WordPress post-type, or DB table
	 * in this state object. On a high level, this function binds an "event-string", a symbolic name,
	 * with a method for getting the data associated with that name
	 *
	 *
	 * @param $data_string : string, the name of the new data type
	 * @param $model_hook  : string, a hook to use with the WordPress data-model
	 * @param $state_hook  : SiteState, the SiteState that this model_data belongs to
	 * @param $additional_mode_data : Map[String => Mixed], additional switches and options for this datum
	 *
	 * @return : boolean, indicating whether the hook was successfully registered.
	 *					  if there is an existing hook with the same name, this function fails with false.
	 *
	 */
	function register_data_model( 
			$data_string, 
			$model_hook, 
			$state_hook, 
			$lookup_hook, 
			$additional_model_data = array() 
		) {
		if ( array_key_exists( $data_string, $this->registered_data_models ) ) return false;

		$this->registered_data_models[ $data_string ] = array_merge( array(
			'hook' 			=> $data_hook,
			'state' 		=> $state_hook,
			'retrieve' 		=> $lookup_hook
		), $additional_model_data );

		return true;
	}

	/* This function returns all the names of the data-models registered to this site. */
	function get_registered_data_models() {
		return array_keys( $registered_data_models );
	}

	/* Index a data-model by name. Given the name of a model, return its associated data.
	 *
	 * @param $data_string : string, a data-model key.
	 * @return a model key-value hash for the given data string 
	 */
	function get_data_model( $data_string ) {
		if ( array_key_exists($data_string, $this->registered_data_models ) ) {
			return $this->registered_data_models[ $data_string ]; 
		} else {
			return false;
		}
	}


	function register_state( $state_string ) {

	}

	/* this function simply gets the current state of the site, and
	 * @return : SiteState, the current state of the site.
	 */
	function state() { return $this->site_state; }

	/* this function transitions the site into a new state, indicated by
	 * @param $new_state : SiteState, a new state constant to enter into.
	 */
	function transition( $new_state ) { $this->site_state = $new_state; }


};




?>