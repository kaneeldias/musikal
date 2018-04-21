<?php
/**
 * Exception for 408 Request Timeout responses
 *
 * @package Requests2
 */

/**
 * Exception for 408 Request Timeout responses
 *
 * @package Requests2
 */
class Requests_Exception_HTTP_408 extends Requests_Exception_HTTP {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 408;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Request Timeout';
}