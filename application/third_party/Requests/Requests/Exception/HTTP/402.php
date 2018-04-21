<?php
/**
 * Exception for 402 Payment Required responses
 *
 * @package Requests2
 */

/**
 * Exception for 402 Payment Required responses
 *
 * @package Requests2
 */
class Requests_Exception_HTTP_402 extends Requests_Exception_HTTP {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 402;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Payment Required';
}