<?php namespace Measurements\Units;

use Measurements\Dimension;
use Measurements\Converters\UnitConverterLinear;

/**
 * The `UnitFuelEfficiency` class encapsulates units of measure for fuel efficiency.
 * You typically use instances of `UnitFuelEfficiency` to represent specific quantities of fuel efficiency using the `Measurement` class.
 *
 * Fuel efficiency corresponds to the thermal efficiency of a process that converts the chemical potential energy of a fuel into kinetic energy.
 * Fuel efficiency can be expressed by SI derived units in terms of cubic meters per meter (m3/m), but is more commonly expressed in terms of liters per kilometer (L/km) and miles per gallon (mpg).
 *
 * The base unit of `UnitFuelEfficiency` is defined as liters per 100 kilometers.
 */
class UnitFuelEfficiency extends Dimension {

	/**
	 * Returns the base unit of fuel efficiency, equal to liters per 100 kilometers.
	 *
	 * @return UnitFuelEfficiency The base unit of fuel efficiency.
	 */
	public static function baseUnit()
	{
		return self::litersPer100Kilometers();
	}

	/**
	 * Returns the liter per 100 kilometers unit of fuel efficiency.
	 *
	 * @return UnitFuelEfficiency The liter per 100 kilometers unit of fuel efficiency.
	 */
	public static function litersPer100Kilometers(): UnitFuelEfficiency
	{
		return new static("L/100km", new UnitConverterLinear(1.0));
	}

	/**
	 * Returns the miles per gallon unit of fuel efficiency.
	 *
	 * @return UnitFuelEfficiency The miles per gallon unit of fuel efficiency.
	 */
	public static function milesPerGallon(): UnitFuelEfficiency
	{
		return new static("US mpg", new UnitConverterLinear(235.215));
	}

	/**
	 * Returns the miles per imperial gallon unit of fuel efficiency.
	 *
	 * @return UnitFuelEfficiency The the miles per imperial gallon unit of fuel efficiency.
	 */
	public static function milesPerImperialGallon(): UnitFuelEfficiency
	{
		return new static("Imp mpg", new UnitConverterLinear(282.481));
	}

}
