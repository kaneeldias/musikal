<?php
/**
 * Exception for 504 Gateway Timeout responses
 *
 * @package Requests2
 */

/**
 * Exception for 504 Gateway Timeout responses
 *
 * @package Requests2
 */
class Requests_Exception_HTTP_504 extends Requests_Exception_HTTP {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 504;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Gateway Timeout';
}