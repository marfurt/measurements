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
		return new static("K", new UnitConverterLinear(1.0));
	}

	/**
	 * Returns the degree Celsius unit of temperature.
	 *
	 * @return UnitTemperature The degree Celsius unit of temperature.
	 */
	public static function celsius(): UnitTemperature
	{
		return new static("°C", new UnitConverterLinear(1.0, 273.15));
	}

	/**
	 * Returns the degree Fahrenheit unit of temperature.
	 *
	 * @return UnitTemperature The degree Fahrenheit unit of temperature.
	 */
	public static function fahrenheit(): UnitTemperature
	{
		return new static("°F", new UnitConverterLinear(5.0 / 9.0, 255.37222222222427));
	}

}
