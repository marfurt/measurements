<?php namespace Measurements;

/**
 * An Equatable object can be check for equality.
 */
interface Equatable {

	/**
	 * Check for objects equality.
	 *
	 * @param $other The object to compare to the receiver.
	 *
	 * @return bool Return true if both objects are equal, otherwise false.
	 */
	public function isEqualTo($other);

}
