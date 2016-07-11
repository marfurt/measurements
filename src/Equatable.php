<?php namespace Measurements;

/**
 * An Equatable object can be check for equality.
 */
interface Equatable {

	/**
	 * Returns a boolean value that indicates whether the receiver is equal to another given object.
	 *
	 * @param $other The object with which to compare the receiver.
	 *
	 * @return bool `true` if both objects are equal, otherwise `false`.
	 */
	public function isEqualTo($other);

}
