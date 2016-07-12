<?php namespace Measurements;

/**
 * `Unit` is an abstract class that declares a programmatic interface for objects that represent a unit of measure.
 */
abstract class Unit implements Equatable {

	/**
	 * The symbolic representation of the unit.
	 *
	 * @var string
	 */
	protected $symbol;

	/**
	 * Initializes a new unit with the specified symbol.
	 *
	 * @param string $symbol The symbolic representation of the unit.
	 */
	public function __construct(string $symbol)
	{
		$this->symbol = $symbol;
	}

	/**
	 * Return the symbolic representation of the unit.
	 *
	 * @return string The symbolic representation of the unit.
	 */
	public function symbol()
	{
		return $this->symbol;
	}

	/**
	 * Returns a boolean value that indicates whether the unit is equal to another given object.
	 *
	 * @param $other mixed The object with which to compare the unit.
	 *
	 * @return bool `true` if both objects are equal, otherwise `false`.
	 */
	public function isEqualTo($other)
	{
		if (! $other instanceof static) {
			return false;
		}

		return $this == $other;
	}

	/**
	 * Converts the unit to its string representation.
	 *
	 * @return string A string that represents the unit.
	 */
	public function __toString()
	{
		return $this->symbol();
	}

}
