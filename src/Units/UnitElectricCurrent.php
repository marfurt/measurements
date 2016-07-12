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

	const SYMBOL_MEGAAMPERES = "MA";
	const SYMBOL_KILOAMPERES = "kA";
	const SYMBOL_AMPERES = "A";
	const SYMBOL_MILLIAMPERES = "mA";
	const SYMBOL_MICROAMPERES = "µA";

	const COEFFICIENT_MEGAAMPERES = 1E+6;
	const COEFFICIENT_KILOAMPERES = 1000.0;
	const COEFFICIENT_AMPERES = 1.0;
	const COEFFICIENT_MILLIAMPERES = 0.001;
	const COEFFICIENT_MICROAMPERES = 1E-6;

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
		return new static(static::SYMBOL_MEGAAMPERES, new UnitConverterLinear(static::COEFFICIENT_MEGAAMPERES));
	}

	/**
	 * Returns the kiloamperes unit of electric current.
	 *
	 * @return UnitElectricCurrent The kiloamperes unit of electric current.
	 */
	public static function kiloamperes(): UnitElectricCurrent
	{
		return new static(static::SYMBOL_KILOAMPERES, new UnitConverterLinear(static::COEFFICIENT_KILOAMPERES));
	}

	/**
	 * Returns the amperes unit of electric current.
	 *
	 * @return UnitElectricCurrent The amperes unit of electric current.
	 */
	public static function amperes(): UnitElectricCurrent
	{
		return new static(static::SYMBOL_AMPERES, new UnitConverterLinear(static::COEFFICIENT_AMPERES));
	}

	/**
	 * Returns the milliamperes unit of electric current.
	 *
	 * @return UnitElectricCurrent The milliamperes unit of electric current.
	 */
	public static function milliamperes(): UnitElectricCurrent
	{
		return new static(static::SYMBOL_MILLIAMPERES, new UnitConverterLinear(static::COEFFICIENT_MILLIAMPERES));
	}

	/**
	 * Returns the microamperes unit of electric current.
	 *
	 * @return UnitElectricCurrent The microamperes unit of electric current.
	 */
	public static function microamperes(): UnitElectricCurrent
	{
		return new static(static::SYMBOL_MICROAMPERES, new UnitConverterLinear(static::COEFFICIENT_MICROAMPERES));
	}

}
