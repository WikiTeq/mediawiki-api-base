<?php

namespace Addwiki\Mediawiki\Api\Client;

/**
 * @since 0.2
 *
 * @author Addshore
 */
interface Request {

	/**
	 * @since 0.2
	 *
	 * @return mixed[]
	 */
	public function getParams(): array;

	/**
	 * Associative array of headers to add to the request.
	 * Each key is the name of a header, and each value is a string or array of strings representing
	 * the header field values.
	 *
	 * @since 0.3
	 *
	 * @return mixed[]
	 */
	public function getHeaders(): array;

}
