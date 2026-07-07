<?php namespace Measurements\Converters;

use Measurements\UnitConverter;

/**
 * `UnitConverterLinear` is a `UnitConverter` subclass for converting between units using a linear equation.
 * A linear equation for unit conversion takes the form y = mx + b, such that:
 * - y is the value in terms of the base unit of the dimension
 * - m is the known coefficient used for this unit's conversion
 * - x is the value in terms of the unit on which this method is called
 * - b is the known constant used for this unit's conversion
 */
class UnitConverterLinear implements UnitConverter {

	/**
	 * The coefficient used in the linear unit conversion calculation.
	 *
	 * @var float
	 */
	protected $coefficient;

	/**
	 * The constant used in the linear unit conversion calculation.
	 *
	 * @var float
	 */
	protected $constant;

	/**
	 * Initializes the unit converter with the specified coefficient and constant.
	 *
	 * @param float $coefficient The coefficient used in the linear unit conversion calculation.
	 * @param float $constant    The constant used in the linear unit conversion calculation.
	 */
	public function __construct($coefficient, $constant = 0.0)
	{
		$this->coefficient = (float)$coefficient;
		$this->constant = (float)$constant;
	}

	public function baseUnitValueFromValue($value)
	{
		// Performs the conversion in the form of y = mx + b, where x represents the value passed in and y represents the value returned.

		return (float)$value * $this->coefficient + $this->constant;
	}

	public function valueFromBaseUnitValue($baseUnitValue)
	{
		// Performs the inverse conversion in the form of x = (y - b) / m, where y represents the value passed in and x represents the value returned.

		return ((float)$baseUnitValue - $this->constant) / $this->coefficient;
	}

}
