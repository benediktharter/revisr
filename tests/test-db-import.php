<?php

class Revisr_DB_Import_Test extends WP_UnitTestCase {

	/**
	 * The main Revisr instance
	 * @var Revisr
	 */
	protected $revisr;

	/**
	 * The Revisr_DB_Import class.
	 * @var Revisr_DB_Import
	 */
	protected $import;

	/**
	 * Sets up the unit tests for this class.
	 * @access public
	 */
	public function setUp() {
		$this->revisr 		= revisr();
		$this->revisr->git 	= new Revisr_Git;
		$this->revisr->db 	= new Revisr_DB;
		$this->import 		= new Revisr_DB_Import;
	}

	/**
	 * Tests the Revisr_DB_Import->import_table() method.
	 * @access public
	 */
	public function test_import_table() {
		$import = $this->import->import_table( 'wptests_posts' );
		$this->assertEquals( true, $import );
	}


}
