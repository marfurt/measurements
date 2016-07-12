<?php namespace Measurements\Units;

use Measurements\Dimension;
use Measurements\Converters\UnitConverterLinear;

/**
 * The `UnitElectricResistance` class encapsulates units of measure for electric resistance.
 * You typically use instances of `UnitElectricResistance` to represent specific quantities of electric resistance using the `Measurement` class.
 *
 * Electric resistance is the difficulty of passing an electric current through a conductor.
 * The SI unit for electric resistance is the ohm (Ω), which is derived as the electric resistance that produces one ampere of current between two points in conductor with one volt of electric resistance (1Ω = 1V/1A).
 *
 * The base unit of `UnitElectricResistance` is defined as coulombs.
 */
class UnitElectricResistance extends Dimension {

	const SYMBOL_MEGAOHMS = "MΩ";
	const SYMBOL_KILOOHMS = "kΩ";
	const SYMBOL_OHMS = "Ω";
	const SYMBOL_MILLIOHMS = "mΩ";
	const SYMBOL_MICROOHMS = "µΩ";

	const COEFFICIENT_MEGAOHMS = 1E+6;
	const COEFFICIENT_KILOOHMS = 1000.0;
	const COEFFICIENT_OHMS = 1.0;
	const COEFFICIENT_MILLIOHMS = 0.001;
	const COEFFICIENT_MICROOHMS = 1E-6;

	/**
	 * Returns the base unit of electric resistance, equal to ohms.
	 *
	 * @return UnitElectricResistance The base unit of electric resistance.
	 */
	public static function baseUnit()
	{
		return self::ohms();
	}

	/**
	 * Returns the megaohms unit of electric resistance.
	 *
	 * @return UnitElectricResistance The megaohms unit of electric resistance.
	 */
	public static function megaohms(): UnitElectricResistance
	{
		return new static(static::SYMBOL_MEGAOHMS, new UnitConverterLinear(static::COEFFICIENT_MEGAOHMS));
	}

	/**
	 * Returns the kiloohms unit of electric resistance.
	 *
	 * @return UnitElectricResistance The kiloohms unit of electric resistance.
	 */
	public static function kiloohms(): UnitElectricResistance
	{
		return new static(static::SYMBOL_KILOOHMS, new UnitConverterLinear(static::COEFFICIENT_KILOOHMS));
	}

	/**
	 * Returns the ohms unit of electric resistance.
	 *
	 * @return UnitElectricResistance The ohms unit of electric resistance.
	 */
	public static function ohms(): UnitElectricResistance
	{
		return new static(static::SYMBOL_OHMS, new UnitConverterLinear(static::COEFFICIENT_OHMS));
	}

	/**
	 * Returns the milliohms unit of electric resistance.
	 *
	 * @return UnitElectricResistance The milliohms unit of electric resistance.
	 */
	public static function milliohms(): UnitElectricResistance
	{
		return new static(static::SYMBOL_MILLIOHMS, new UnitConverterLinear(static::COEFFICIENT_MILLIOHMS));
	}

	/**
	 * Returns the microohms unit of electric resistance.
	 *
	 * @return UnitElectricResistance The microohms unit of electric resistance.
	 */
	public static function microohms(): UnitElectricResistance
	{
		return new static(static::SYMBOL_MICROOHMS, new UnitConverterLinear(static::COEFFICIENT_MICROOHMS));
	}

}
