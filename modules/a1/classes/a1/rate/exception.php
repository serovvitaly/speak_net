<?php defined('SYSPATH') OR die('No direct access allowed.');

class A1_Rate_Exception extends Kohana_Exception {

	public $timestamp;

	public function __construct($message, $timestamp)
	{
		$this->timestamp = $timestamp;

		parent::__construct($message);
	}
}