<?php namespace Measurements\Quantities;

use Measurements\Unit;
use Measurements\Measurement;
use Measurements\Units\UnitMass;
use Measurements\Exceptions\UnitException;

/**
 * The `Mass` class represents a specific quantities of mass.
 *
 * @method static Mass kilograms(float $value)
 * @method static Mass grams(float $value)
 * @method static Mass decigrams(float $value)
 * @method static Mass centigrams(float $value)
 * @method static Mass milligrams(float $value)
 * @method static Mass micrograms(float $value)
 * @method static Mass nanograms(float $value)
 * @method static Mass picograms(float $value)
 * @method static Mass ounces(float $value)
 * @method static Mass ouncesTroy(float $value)
 * @method static Mass pounds(float $value)
 * @method static Mass stones(float $value)
 * @method static Mass metricTons(float $value)
 * @method static Mass shortTons(float $value)
 * @method static Mass carats(float $value)
 * @method static Mass slugs(float $value)
 */
class Mass extends Measurement {

	/**
	 * Initializes a new mass measurement with a specified floating-point value and unit.
	 *
	 * @param double $value The measurement value.
	 * @param Unit   $unit  The unit of measure.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function __construct($value, Unit $unit)
	{
		if (!$unit instanceof UnitMass) {
			throw new UnitException("Attempt to create a mass measurement from an invalid unit [$unit]!");
		}

		parent::__construct($value, $unit);
	}

}
