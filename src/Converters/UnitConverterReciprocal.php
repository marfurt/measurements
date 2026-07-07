<?php namespace Measurements\Converters;

use Measurements\UnitConverter;

/**
 * `UnitConverterReciprocal` is a `UnitConverter` subclass for converting between units using a reciprocal function.
 */
class UnitConverterReciprocal implements UnitConverter {

	/**
	 * The reciprocal value used in the unit conversion calculation.
	 *
	 * @var float
	 */
	protected $reciprocal;

	/**
	 * Initializes the unit converter with the specified reciprocal value.
	 *
	 * @param float $reciprocal The reciprocal value used in the unit conversion calculation.
	 */
	public function __construct($reciprocal)
	{
		$this->reciprocal = (float)$reciprocal;
	}

	public function baseUnitValueFromValue($value)
	{
		return $this->reciprocal / (float)$value;
	}

	public function valueFromBaseUnitValue($baseUnitValue)
	{
		return $this->reciprocal / (float)$baseUnitValue;
	}

}
