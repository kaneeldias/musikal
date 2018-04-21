<?php
/**
 * Exception for 412 Precondition Failed responses
 *
 * @package Requests2
 */

/**
 * Exception for 412 Precondition Failed responses
 *
 * @package Requests2
 */
class Requests_Exception_HTTP_412 extends Requests_Exception_HTTP {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 412;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Precondition Failed';
}