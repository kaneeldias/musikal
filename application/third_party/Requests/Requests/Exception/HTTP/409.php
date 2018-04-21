<?php
/**
 * Exception for 409 Conflict responses
 *
 * @package Requests2
 */

/**
 * Exception for 409 Conflict responses
 *
 * @package Requests2
 */
class Requests_Exception_HTTP_409 extends Requests_Exception_HTTP {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 409;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Conflict';
}