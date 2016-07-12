<?php namespace Measurements\Units;

use Measurements\Dimension;
use Measurements\Converters\UnitConverterLinear;

/**
 * The `UnitTemperature` class encapsulates units of measure for temperature.
 * You typically use instances of `UnitTemperature` to represent specific quantities of temperature using the `Measurement` class.
 *
 * Temperature is a comparative measure of thermal energy.
 * The SI unit for temperature is the kelvin (K), which is defined in terms of the triple point of water.
 * Temperature is also commonly measured by degrees of various scales, including Celsius (°C) and Fahrenheit (°F).
 *
 * The base unit of `UnitTemperature` is defined as kelvin.
 */
class UnitTemperature extends Dimension {

	const SYMBOL_KELVIN = "K";
	const SYMBOL_DEGREES_CELSIUS = "°C";
	const SYMBOL_DEGREES_FAHRENHEIT = "°F";

	const COEFFICIENT_KELVIN = 1.0;
	const COEFFICIENT_DEGREES_CELSIUS = 1.0;
	const COEFFICIENT_DEGREES_FAHRENHEIT = 5.0 / 9.0;

	const CONSTANT_DEGREES_CELSIUS = 273.15;
	const CONSTANT_DEGREES_FAHRENHEIT = 255.37222222222427;

	/**
	 * Returns the base unit of temperature, equal to kelvin.
	 *
	 * @return UnitTemperature The base unit of temperature.
	 */
	public static function baseUnit()
	{
		return self::kelvin();
	}

	/**
	 * Returns the kelvin unit of temperature.
	 *
	 * @return UnitTemperature The kelvin unit of temperature.
	 */
	public static function kelvin(): UnitTemperature
	{
		return new static(static::SYMBOL_KELVIN, new UnitConverterLinear(static::COEFFICIENT_KELVIN));
	}

	/**
	 * Returns the degree Celsius unit of temperature.
	 *
	 * @return UnitTemperature The degree Celsius unit of temperature.
	 */
	public static function celsius(): UnitTemperature
	{
		return new static(static::SYMBOL_DEGREES_CELSIUS, new UnitConverterLinear(static::COEFFICIENT_DEGREES_CELSIUS, static::CONSTANT_DEGREES_CELSIUS));
	}

	/**
	 * Returns the degree Fahrenheit unit of temperature.
	 *
	 * @return UnitTemperature The degree Fahrenheit unit of temperature.
	 */
	public static function fahrenheit(): UnitTemperature
	{
		return new static(static::SYMBOL_DEGREES_FAHRENHEIT, new UnitConverterLinear(static::COEFFICIENT_DEGREES_FAHRENHEIT, static::CONSTANT_DEGREES_FAHRENHEIT));
	}

}
