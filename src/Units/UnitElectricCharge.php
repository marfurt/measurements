<?php namespace Measurements\Units;

use Measurements\Dimension;
use Measurements\Converters\UnitConverterLinear;

/**
 * The `UnitElectricCharge` class encapsulates units of measure for electric charge.
 * You typically use instances of `UnitElectricCharge` to represent specific quantities of electric charge using the `Measurement` class.

 * Electric charge is a fundamental physical property of matter that causes it to experience a force within an electromagnetic field.
 * The SI unit for electric charge is the coulomb (C), which is defined as the amount of charge carried by a current of one ampere in one second (1C = 1A · 1s).
 * Charge is also commonly expressed in terms of ampere hours (Ah).
 *
 * The base unit of `UnitElectricCharge` is defined as coulombs.
 */
class UnitElectricCharge extends Dimension {

	const SYMBOL_COULOMBS = "C";
	const SYMBOL_MEGAAMPERE_HOURS = "MAh";
	const SYMBOL_KILOAMPERE_HOURS = "kAh";
	const SYMBOL_AMPERE_HOURS = "Ah";
	const SYMBOL_MILLIAMPERE_HOURS = "mAh";
	const SYMBOL_MICROAMPERE_HOURS = "µAh";

	const COEFFICIENT_COULOMBS = 1.0;
	const COEFFICIENT_MEGAAMPERE_HOURS = 3.6E+9;
	const COEFFICIENT_KILOAMPERE_HOURS = 3600000.0;
	const COEFFICIENT_AMPERE_HOURS = 3600.0;
	const COEFFICIENT_MILLIAMPERE_HOURS = 3.6;
	const COEFFICIENT_MICROAMPERE_HOURS = 0.0036;

	/**
	 * Returns the base electric charge unit, equal to coulombs.
	 *
	 * @return UnitElectricCharge The base electric charge unit.
	 */
	public static function baseUnit()
	{
		return self::coulombs();
	}

	/**
	 * Returns the coulombs unit of electric charge.
	 *
	 * @return UnitElectricCharge The coulombs unit of electric charge.
	 */
	public static function coulombs(): UnitElectricCharge
	{
		return new static(static::SYMBOL_COULOMBS, new UnitConverterLinear(static::COEFFICIENT_COULOMBS));
	}

	/**
	 * Returns the megaampere hours unit of electric charge.
	 *
	 * @return UnitElectricCharge The megaampere hours unit of electric charge.
	 */
	public static function megaampereHours(): UnitElectricCharge
	{
		return new static(static::SYMBOL_MEGAAMPERE_HOURS, new UnitConverterLinear(static::COEFFICIENT_MEGAAMPERE_HOURS));
	}

	/**
	 * Returns the kiloampere hours unit of electric charge.
	 *
	 * @return UnitElectricCharge The kiloampere hours unit of electric charge.
	 */
	public static function kiloampereHours(): UnitElectricCharge
	{
		return new static(static::SYMBOL_KILOAMPERE_HOURS, new UnitConverterLinear(static::COEFFICIENT_KILOAMPERE_HOURS));
	}

	/**
	 * Returns the ampere hours unit of electric charge.
	 *
	 * @return UnitElectricCharge The ampere hours unit of electric charge.
	 */
	public static function ampereHours(): UnitElectricCharge
	{
		return new static(static::SYMBOL_AMPERE_HOURS, new UnitConverterLinear(static::COEFFICIENT_AMPERE_HOURS));
	}

	/**
	 * Returns the milliampere hours unit of electric charge.
	 *
	 * @return UnitElectricCharge The milliampere hours unit of electric charge.
	 */
	public static function milliampereHours(): UnitElectricCharge
	{
		return new static(static::SYMBOL_MILLIAMPERE_HOURS, new UnitConverterLinear(static::COEFFICIENT_MILLIAMPERE_HOURS));
	}

	/**
	 * Returns the microampere hours unit of electric charge.
	 *
	 * @return UnitElectricCharge The microampere hours unit of electric charge.
	 */
	public static function microampereHours(): UnitElectricCharge
	{
		return new static(static::SYMBOL_MICROAMPERE_HOURS, new UnitConverterLinear(static::COEFFICIENT_MICROAMPERE_HOURS));
	}

}
