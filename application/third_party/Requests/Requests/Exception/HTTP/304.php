<?php
/**
 * Exception for 304 Not Modified responses
 *
 * @package Requests2
 */

/**
 * Exception for 304 Not Modified responses
 *
 * @package Requests2
 */
class Requests_Exception_HTTP_304 extends Requests_Exception_HTTP {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 304;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Not Modified';
}