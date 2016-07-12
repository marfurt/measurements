<?php namespace Measurements\Converters;

use Measurements\UnitConverter;

/**
 * `UnitConverterReciprocal` is a `UnitConverter` subclass for converting between units using a reciprocal function.
 */
class UnitConverterReciprocal implements UnitConverter {

	/**
	 * The reciprocal value used in the unit conversion calculation.
	 *
	 * @var double
	 */
	protected $reciprocal;

	/**
	 * Initializes the unit converter with the specified reciprocal value.
	 *
	 * @param double $reciprocal The reciprocal value used in the unit conversion calculation.
	 */
	public function __construct($reciprocal)
	{
		$this->reciprocal = (double)$reciprocal;
	}

	public function baseUnitValueFromValue($value)
	{
		return $this->reciprocal / (double)$value;
	}

	public function valueFromBaseUnitValue($baseUnitValue)
	{
		return $this->reciprocal / (double)$baseUnitValue;
	}

}
