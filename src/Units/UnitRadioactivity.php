<?php namespace Measurements\Units;

use Measurements\Dimension;
use Measurements\Converters\UnitConverterLinear;

/**
 * The `UnitRadioactivity` class encapsulates units of measure for radioactivity.
 * You typically use instances of `UnitRadioactivity` to represent specific quantities of radioactivity using the `Measurement` class.
 *
 * Radioactivity is the process by which the nucleus of an atom emits radiation.
 * The SI unit of measure for radioactivity is the becquerel (Bq), which is defined as the quantity of radioactive material in which one nucleus decays per second (1 Bq = 1 s-1).
 * Radioactivity is also commonly described in terms of curies (Ci), a unit defined relative to the decay of one gram of the radium-226 isotope (1 Ci = 3.7 × 1010 Bq).
 * 
 * The base unit of `UnitRadioactivity` is defined as becquerel.
 */
class UnitRadioactivity extends Dimension {

	/**
	 * Returns the base unit of radioactivity.
	 *
	 * @return UnitRadioactivity The base unit of radioactivity.
	 */
	public static function baseUnit()
	{
		return static::becquerel();
	}

	/**
	 * Returns the becquerel unit of radioactivity.
	 *
	 * @return UnitRadioactivity The becquerel unit of radioactivity.
	 */
	public static function becquerel(): UnitRadioactivity
	{
		return new UnitRadioactivity("Bq", new UnitConverterLinear(1.0));
	}

	/**
	 * Returns the curie unit of radioactivity.
	 *
	 * @return UnitRadioactivity The curie unit of radioactivity.
	 */
	public static function curie(): UnitRadioactivity
	{
		return new UnitRadioactivity("Ci", new UnitConverterLinear(3.7E10));
	}

}