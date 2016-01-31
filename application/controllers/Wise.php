<?php
/**
 * controllers/Wise.php
 *
 * ------------------------------------------------------------------------
 */
class Wise extends Application
{
	function __construct() 
	{
		parent::__construct();
	}
	function bingo() 
	{
		$this->data['pagebody'] = 'justone';	// this is the view we want shown
		// get first author data, to pass on to our view
		$record = $this->quotes->get(6); //gets the last quote
		
		// Put into respective data view
		$this->data = array_merge($this->data, $record);
		
		$this->render();
	}
}