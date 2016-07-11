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
		return new static("C", new UnitConverterLinear(1.0));
	}

	/**
	 * Returns the megaampere hours unit of electric charge.
	 *
	 * @return UnitElectricCharge The megaampere hours unit of electric charge.
	 */
	public static function megaampereHours(): UnitElectricCharge
	{
		return new static("MAh", new UnitConverterLinear(3.6E+9));
	}

	/**
	 * Returns the kiloampere hours unit of electric charge.
	 *
	 * @return UnitElectricCharge The kiloampere hours unit of electric charge.
	 */
	public static function kiloampereHours(): UnitElectricCharge
	{
		return new static("kAh", new UnitConverterLinear(3600000.0));
	}

	/**
	 * Returns the ampere hours unit of electric charge.
	 *
	 * @return UnitElectricCharge The ampere hours unit of electric charge.
	 */
	public static function ampereHours(): UnitElectricCharge
	{
		return new static("Ah", new UnitConverterLinear(3600.0));
	}

	/**
	 * Returns the milliampere hours unit of electric charge.
	 *
	 * @return UnitElectricCharge The milliampere hours unit of electric charge.
	 */
	public static function milliampereHours(): UnitElectricCharge
	{
		return new static("mAh", new UnitConverterLinear(3.6));
	}

	/**
	 * Returns the microampere hours unit of electric charge.
	 *
	 * @return UnitElectricCharge The microampere hours unit of electric charge.
	 */
	public static function microampereHours(): UnitElectricCharge
	{
		return new static("µAh", new UnitConverterLinear(0.0036));
	}

}
