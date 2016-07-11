<?php namespace Measurements\Quantities;

use Measurements\Unit;
use Measurements\Measurement;
use Measurements\Units\UnitMass;
use Measurements\Units\UnitVolume;
use Measurements\Exceptions\UnitException;
use Measurements\Units\UnitConcentrationMass;

/**
 * The `ConcentrationMass` class represents a specific quantities of concentration.
 */
class ConcentrationMass extends Measurement {

	/**
	 * Initializes a new concentration of mass measurement with a specified floating-point value and unit.
	 *
	 * @param double $value The measurement value.
	 * @param Unit   $unit  The unit of measure.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function __construct($value, Unit $unit)
	{
		if (!$unit instanceof UnitConcentrationMass) {
			throw new UnitException("Attempt to create a concentration of mass measurement from an invalid unit [$unit]!");
		}

		parent::__construct($value, $unit);
	}

	/**
	 * Returns a concentration of mass measurement computed from the specified mass and volume.
	 *
	 * @param Mass   $mass   A mass.
	 * @param Volume $volume A volume.
	 *
	 * @return \Measurements\Quantities\ConcentrationMass The concentration of mass that corresponds to the given mass and volume.
	 */
	public static function fromMassAndVolume(Mass $mass, Volume $volume)
	{
		$grams = $mass->convertTo(UnitMass::grams());
		$liters = $volume->convertTo(UnitVolume::liters());

		$gramsPerLiter = $grams->value() / $liters->value();

		return new static($gramsPerLiter, UnitConcentrationMass::gramsPerLiter());
	}

}
