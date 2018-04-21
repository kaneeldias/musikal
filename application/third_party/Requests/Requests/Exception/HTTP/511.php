<?php
/**
 * Exception for 511 Network Authentication Required responses
 *
 * @see https://tools.ietf.org/html/rfc6585
 * @package Requests2
 */

/**
 * Exception for 511 Network Authentication Required responses
 *
 * @see https://tools.ietf.org/html/rfc6585
 * @package Requests2
 */
class Requests_Exception_HTTP_511 extends Requests_Exception_HTTP {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 511;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Network Authentication Required';
}