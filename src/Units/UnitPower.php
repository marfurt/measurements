<?php namespace Measurements\Units;

use Measurements\Dimension;
use Measurements\Converters\UnitConverterLinear;

/**
 * The `UnitPower` class encapsulates units of measure for power.
 * You typically use instances of `UnitPower` to represent specific quantities of power using the `Measurement` class.
 *
 * Power is the amount of energy used over time. The SI unit for power is the watt (W), which is derived as one joule per second (1W = 1J / 1s).
 *
 * The base unit of `UnitPower` is defined as watts.
 */
class UnitPower extends Dimension {

	/**
	 * Returns the base unit of power, equal to watts.
	 *
	 * @return UnitPower The base unit of power.
	 */
	public static function baseUnit()
	{
		return self::watts();
	}

	/**
	 * Returns the terawatts unit of power.
	 *
	 * @return UnitPower The terawatts unit of power.
	 */
	public static function terawatts(): UnitPower
	{
		return new static("TW", new UnitConverterLinear(1E+12));
	}

	/**
	 * Returns the gigawatts unit of power.
	 *
	 * @return UnitPower The gigawatts unit of power.
	 */
	public static function gigawatts(): UnitPower
	{
		return new static("GW", new UnitConverterLinear(1E+9));
	}

	/**
	 * Returns the megawatts unit of power.
	 *
	 * @return UnitPower The megawatts unit of power.
	 */
	public static function megawatts(): UnitPower
	{
		return new static("MW", new UnitConverterLinear(1000000.0));
	}

	/**
	 * Returns the kilowatts unit of power.
	 *
	 * @return UnitPower The kilowatts unit of power.
	 */
	public static function kilowatts(): UnitPower
	{
		return new static("kW", new UnitConverterLinear(1000.0));
	}

	/**
	 * Returns the watts unit of power.
	 *
	 * @return UnitPower The watts unit of power.
	 */
	public static function watts(): UnitPower
	{
		return new static("W", new UnitConverterLinear(1.0));
	}

	/**
	 * Returns the milliwatts unit of power.
	 *
	 * @return UnitPower The milliwatts unit of power.
	 */
	public static function milliwatts(): UnitPower
	{
		return new static("mW", new UnitConverterLinear(0.001));
	}

	/**
	 * Returns the microwatts unit of power.
	 *
	 * @return UnitPower The microwatts unit of power.
	 */
	public static function microwatts(): UnitPower
	{
		return new static("µW", new UnitConverterLinear(0.000001));
	}

	/**
	 * Returns the nanowatts unit of power.
	 *
	 * @return UnitPower The nanowatts unit of power.
	 */
	public static function nanowatts(): UnitPower
	{
		return new static("nW", new UnitConverterLinear(1E-9));
	}

	/**
	 * Returns the picowatts unit of power.
	 *
	 * @return UnitPower The picowatts unit of power.
	 */
	public static function picowatts(): UnitPower
	{
		return new static("pW", new UnitConverterLinear(1E-12));
	}

	/**
	 * Returns the femtowatts unit of power.
	 *
	 * @return UnitPower The femtowatts unit of power.
	 */
	public static function femtowatts(): UnitPower
	{
		return new static("fW", new UnitConverterLinear(1E-15));
	}

	/**
	 * Returns the horsepower unit of power.
	 *
	 * @return UnitPower The horsepower unit of power.
	 */
	public static function horsepower(): UnitPower
	{
		return new static("hp", new UnitConverterLinear(745.7));
	}

}
