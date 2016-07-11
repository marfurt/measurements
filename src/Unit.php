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

	public function isEqualTo($other)
	{
		if (! $other instanceof static) {
			return false;
		}

		return $this == $other;
	}

	public function __toString()
	{
		return $this->symbol();
	}

}
