<?php
/**
 * Exception for 414 Request-URI Too Large responses
 *
 * @package Requests2
 */

/**
 * Exception for 414 Request-URI Too Large responses
 *
 * @package Requests2
 */
class Requests_Exception_HTTP_414 extends Requests_Exception_HTTP {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 414;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Request-URI Too Large';
}