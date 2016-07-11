<?php namespace Measurements\Units;

use Measurements\Dimension;
use Measurements\Converters\UnitConverterLinear;

/**
 * The `UnitConcentrationMass` class encapsulates units of measure for concentration of mass.
 * You typically use instances of `UnitConcentrationMass` to represent specific quantities of concentration using the `Measurement` class.
 *
 * Concentration is the abundance of a constituent within a volume.
 * Concentration can be expressed by SI derived units in terms of kilograms per cubic meter (kg/m3).
 *
 * The base unit of `UnitConcentrationMass` is defined as grams per liter.
 */
class UnitConcentrationMass extends Dimension {

	/**
	 * Returns the base unit of concentration of mass, equal to grams per liter.
	 *
	 * @return UnitConcentrationMass The base unit of concentration of mass.
	 */
	public static function baseUnit()
	{
		return self::gramsPerLiter();
	}

	/**
	 * Returns grams per liter unit of concentration.
	 *
	 * @return UnitConcentrationMass The grams per liter unit of concentration.
	 */
	public static function gramsPerLiter(): UnitConcentrationMass
	{
		return new static("g/L", new UnitConverterLinear(1.0));
	}

	/**
	 * Returns milligrams per deciliter unit of concentration.
	 *
	 * @return UnitConcentrationMass The milligrams per deciliter unit of concentration.
	 */
	public static function milligramsPerDeciliter(): UnitConcentrationMass
	{
		return new static("mg/dL", new UnitConverterLinear(0.01));
	}

	/**
	 * Returns the millimoles per liter unit with the specified number of grams per mole.
	 *
	 * @param double $gramsPerMole The mass, in grams, for a mole of a given constituent.
	 *
	 * @return UnitConcentrationMass A unit expressing millimoles per liter with the specified molar mass.
	 */
	public static function millimolesPerLiterWithGramsPerMole($gramsPerMole): UnitConcentrationMass
	{
		return new static("mmol/L", new UnitConverterLinear(18 * $gramsPerMole));
	}

}
