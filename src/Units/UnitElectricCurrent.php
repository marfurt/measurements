<?php namespace Measurements\Units;

use Measurements\Dimension;
use Measurements\Converters\UnitConverterLinear;

/**
 * The `UnitElectricCurrent` class encapsulates units of measure for electric current.
 * You typically use instances of `UnitElectricCurrent` to represent specific quantities of electric current using the `Measurement` class.
 *
 * Electric current is the flow of electric current. The SI unit for electric current is the ampere (A), which is defined in terms the production of electromagnetic force between two parallel linear conductors.
 * It can also be expressed as the flow of one coulomb per second (1A = 1C / s).
 *
 * The base unit of `UnitElectricCurrent` is defined as amperes.
 */
class UnitElectricCurrent extends Dimension {

	/**
	 * Returns the base electric current current, equal to amperes.
	 *
	 * @return UnitElectricCurrent The base electric current unit.
	 */
	public static function baseUnit()
	{
		return self::amperes();
	}

	/**
	 * Returns the megaamperes unit of electric current.
	 *
	 * @return UnitElectricCurrent The megaamperes unit of electric current.
	 */
	public static function megaamperes(): UnitElectricCurrent
	{
		return new static("MA", new UnitConverterLinear(1000000.0));
	}

	/**
	 * Returns the kiloamperes unit of electric current.
	 *
	 * @return UnitElectricCurrent The kiloamperes unit of electric current.
	 */
	public static function kiloamperes(): UnitElectricCurrent
	{
		return new static("kA", new UnitConverterLinear(1000.0));
	}

	/**
	 * Returns the amperes unit of electric current.
	 *
	 * @return UnitElectricCurrent The amperes unit of electric current.
	 */
	public static function amperes(): UnitElectricCurrent
	{
		return new static("A", new UnitConverterLinear(1.0));
	}

	/**
	 * Returns the milliamperes unit of electric current.
	 *
	 * @return UnitElectricCurrent The milliamperes unit of electric current.
	 */
	public static function milliamperes(): UnitElectricCurrent
	{
		return new static("mA", new UnitConverterLinear(0.001));
	}

	/**
	 * Returns the microamperes unit of electric current.
	 *
	 * @return UnitElectricCurrent The microamperes unit of electric current.
	 */
	public static function microamperes(): UnitElectricCurrent
	{
		return new static("µA", new UnitConverterLinear(0.000001));
	}

}
