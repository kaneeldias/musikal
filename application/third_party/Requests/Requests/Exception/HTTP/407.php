<?php
/**
 * Exception for 407 Proxy Authentication Required responses
 *
 * @package Requests2
 */

/**
 * Exception for 407 Proxy Authentication Required responses
 *
 * @package Requests2
 */
class Requests_Exception_HTTP_407 extends Requests_Exception_HTTP {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 407;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Proxy Authentication Required';
}