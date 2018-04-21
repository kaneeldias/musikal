<?php
/**
 * Exception for 502 Bad Gateway responses
 *
 * @package Requests2
 */

/**
 * Exception for 502 Bad Gateway responses
 *
 * @package Requests2
 */
class Requests_Exception_HTTP_502 extends Requests_Exception_HTTP {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 502;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Bad Gateway';
}