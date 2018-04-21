<?php
/**
 * Exception for 416 Requested Range Not Satisfiable responses
 *
 * @package Requests2
 */

/**
 * Exception for 416 Requested Range Not Satisfiable responses
 *
 * @package Requests2
 */
class Requests_Exception_HTTP_416 extends Requests_Exception_HTTP {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 416;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Requested Range Not Satisfiable';
}