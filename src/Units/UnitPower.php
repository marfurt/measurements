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

	const SYMBOL_TERAWATTS = "TW";
	const SYMBOL_GIGAWATTS = "GW";
	const SYMBOL_MEGAWATTS = "MW";
	const SYMBOL_KILOWATTS = "kW";
	const SYMBOL_WATTS = "W";
	const SYMBOL_MILLIWATTS = "mW";
	const SYMBOL_MICROWATTS = "µW";
	const SYMBOL_NANOWATTS = "nW";
	const SYMBOL_PICOWATTS = "pW";
	const SYMBOL_FEMTOWATTS = "fW";
	const SYMBOL_HORSE_POWER = "hp";

	const COEFFICIENT_TERAWATTS = 1E+12;
	const COEFFICIENT_GIGAWATTS = 1E+9;
	const COEFFICIENT_MEGAWATTS = 1E+6;
	const COEFFICIENT_KILOWATTS = 1000.0;
	const COEFFICIENT_WATTS = 1.0;
	const COEFFICIENT_MILLIWATTS = 0.001;
	const COEFFICIENT_MICROWATTS = 1E-6;
	const COEFFICIENT_NANOWATTS = 1E-9;
	const COEFFICIENT_PICOWATTS = 1E-12;
	const COEFFICIENT_FEMTOWATTS = 1E-15;
	const COEFFICIENT_HORSE_POWER = 745.7;
	
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
		return new static(static::SYMBOL_TERAWATTS, new UnitConverterLinear(static::COEFFICIENT_TERAWATTS));
	}

	/**
	 * Returns the gigawatts unit of power.
	 *
	 * @return UnitPower The gigawatts unit of power.
	 */
	public static function gigawatts(): UnitPower
	{
		return new static(static::SYMBOL_GIGAWATTS, new UnitConverterLinear(static::COEFFICIENT_GIGAWATTS));
	}

	/**
	 * Returns the megawatts unit of power.
	 *
	 * @return UnitPower The megawatts unit of power.
	 */
	public static function megawatts(): UnitPower
	{
		return new static(static::SYMBOL_MEGAWATTS, new UnitConverterLinear(static::COEFFICIENT_MEGAWATTS));
	}

	/**
	 * Returns the kilowatts unit of power.
	 *
	 * @return UnitPower The kilowatts unit of power.
	 */
	public static function kilowatts(): UnitPower
	{
		return new static(static::SYMBOL_KILOWATTS, new UnitConverterLinear(static::COEFFICIENT_KILOWATTS));
	}

	/**
	 * Returns the watts unit of power.
	 *
	 * @return UnitPower The watts unit of power.
	 */
	public static function watts(): UnitPower
	{
		return new static(static::SYMBOL_WATTS, new UnitConverterLinear(static::COEFFICIENT_WATTS));
	}

	/**
	 * Returns the milliwatts unit of power.
	 *
	 * @return UnitPower The milliwatts unit of power.
	 */
	public static function milliwatts(): UnitPower
	{
		return new static(static::SYMBOL_MILLIWATTS, new UnitConverterLinear(static::COEFFICIENT_MILLIWATTS));
	}

	/**
	 * Returns the microwatts unit of power.
	 *
	 * @return UnitPower The microwatts unit of power.
	 */
	public static function microwatts(): UnitPower
	{
		return new static(static::SYMBOL_MICROWATTS, new UnitConverterLinear(static::COEFFICIENT_MICROWATTS));
	}

	/**
	 * Returns the nanowatts unit of power.
	 *
	 * @return UnitPower The nanowatts unit of power.
	 */
	public static function nanowatts(): UnitPower
	{
		return new static(static::SYMBOL_NANOWATTS, new UnitConverterLinear(static::COEFFICIENT_NANOWATTS));
	}

	/**
	 * Returns the picowatts unit of power.
	 *
	 * @return UnitPower The picowatts unit of power.
	 */
	public static function picowatts(): UnitPower
	{
		return new static(static::SYMBOL_PICOWATTS, new UnitConverterLinear(static::COEFFICIENT_PICOWATTS));
	}

	/**
	 * Returns the femtowatts unit of power.
	 *
	 * @return UnitPower The femtowatts unit of power.
	 */
	public static function femtowatts(): UnitPower
	{
		return new static(static::SYMBOL_FEMTOWATTS, new UnitConverterLinear(static::COEFFICIENT_FEMTOWATTS));
	}

	/**
	 * Returns the horsepower unit of power.
	 *
	 * @return UnitPower The horsepower unit of power.
	 */
	public static function horsepower(): UnitPower
	{
		return new static(static::SYMBOL_HORSE_POWER, new UnitConverterLinear(static::COEFFICIENT_HORSE_POWER));
	}

}
