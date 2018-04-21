<?php
/**
 * Exception for 413 Request Entity Too Large responses
 *
 * @package Requests2
 */

/**
 * Exception for 413 Request Entity Too Large responses
 *
 * @package Requests2
 */
class Requests_Exception_HTTP_413 extends Requests_Exception_HTTP {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 413;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Request Entity Too Large';
}