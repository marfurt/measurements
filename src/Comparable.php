<?php namespace Measurements;

/**
 * Instances of conforming types can be compared using relational operators.
 */
interface Comparable extends Equatable {

	/**
	 * Returns a Boolean value that indicates whether the receiver is greater than another given object.
	 *
	 * @param $object The object with which to compare the receiver.
	 *
	 * @return bool `true` if the receiver is greater than object, otherwise `false`.
	 */
	public function isGreaterThan($object);

	/**
	 * Returns a Boolean value that indicates whether the receiver is greater than or equal to another given object.
	 *
	 * @param $object The object with which to compare the receiver.
	 *
	 * @return bool `true` if the receiver is greater than or equal to object, otherwise `false`.
	 */
	public function isGreaterThanOrEqualTo($object);

	/**
	 * Returns a Boolean value that indicates whether the receiver is less than another given object.
	 *
	 * @param $object The object with which to compare the receiver.
	 *
	 * @return bool `true` if the receiver is less than object, otherwise `false`.
	 */
	public function isLessThan($object);

	/**
	 * Returns a Boolean value that indicates whether the receiver is less than or equal to another given object.
	 *
	 * @param $object The object with which to compare the receiver.
	 *
	 * @return bool `true` if the receiver is less than or equal to object, otherwise `false`.
	 */
	public function isLessThanOrEqualTo($object);

	/**
	 * Compares the receiver to another given object.
	 *
	 * @param $object The object with which to compare the receiver.
	 * @param callable $comparison The closure used to compare objects.
	 *
	 * @return mixed The result of the comparison between the receiver and the given object.
	 */
	public function compareTo($object, callable $comparison);

}
