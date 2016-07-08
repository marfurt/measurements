<?php namespace Measurements;

/**
 * A unit type that can be converted to a base unit.
 */
interface BaseUnitConvertible {

	/**
	 * Returns the base unit of the dimension.
	 *
	 * @return mixed
	 */
	public static function baseUnit();

}

/**
 * `Dimension` is an abstract subclass of `Unit` that declares a programmatic interface for objects that represent a dimensional unit of measure.
 */
abstract class Dimension extends Unit implements BaseUnitConvertible {

	/**
	 * The converter used to represent the unit in terms of the dimension's base unit.
	 *
	 * @var \Measurements\UnitConverter
	 */
	protected $converter;

	/**
	 * Initializes a dimensional unit with the specified symbol and unit converter.
	 *
	 * @param string        $symbol    The symbolic representation of the unit.
	 * @param UnitConverter $converter A converter used to represent the unit in terms of the dimension's base unit.
	 */
	public function __construct($symbol, UnitConverter $converter)
	{
		parent::__construct($symbol);

		$this->converter = $converter;
	}

	/**
	 * Returns the unit converter used to represent the unit in terms of the dimension's base unit.
	 *
	 * @return \Measurements\UnitConverter The unit converter used to represent the unit in terms of the dimension's base unit.
	 */
	public function converter(): UnitConverter
	{
		return $this->converter;
	}

	/**
	 * Returns the base unit of the dimension.
	 *
	 * @return mixed The base unit of the dimension.
	 */
	public function getBaseUnit()
	{
		return static::baseUnit();
	}

}
