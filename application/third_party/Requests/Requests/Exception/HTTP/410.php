<?php
/**
 * Exception for 410 Gone responses
 *
 * @package Requests2
 */

/**
 * Exception for 410 Gone responses
 *
 * @package Requests2
 */
class Requests_Exception_HTTP_410 extends Requests_Exception_HTTP {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 410;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Gone';
}