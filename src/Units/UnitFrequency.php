<?php namespace Measurements\Units;

use Measurements\Dimension;
use Measurements\Converters\UnitConverterLinear;

/**
 * The `UnitFrequency` class encapsulates units of measure for frequency.
 * You typically use instances of `UnitFrequency` to represent specific quantities of frequency using the `Measurement` class.
 *
 * Frequency is a quantity of occurrences for a repeating event over time.
 * The SI unit for frequency is the hertz (Hz), which is a derived as one occurrence per second (1Hz = 1 / 1s).
 *
 * The base unit of `UnitFrequency` is defined as hertz.
 */
class UnitFrequency extends Dimension {

	/**
	 * Returns the base unit of frequency, equal to hertz.
	 *
	 * @return UnitFrequency The base unit of frequency.
	 */
	public static function baseUnit()
	{
		return self::hertz();
	}

	/**
	 * Returns the terahertz unit of frequency.
	 *
	 * @return UnitFrequency The terahertz unit of frequency.
	 */
	public static function terahertz(): UnitFrequency
	{
		return new static("THz", new UnitConverterLinear(1E+12));
	}

	/**
	 * Returns the gigahertz unit of frequency.
	 *
	 * @return UnitFrequency The gigahertz unit of frequency.
	 */
	public static function gigahertz(): UnitFrequency
	{
		return new static("GHz", new UnitConverterLinear(1E+9));
	}

	/**
	 * Returns the megahertz unit of frequency.
	 *
	 * @return UnitFrequency The megahertz unit of frequency.
	 */
	public static function megahertz(): UnitFrequency
	{
		return new static("MHz", new UnitConverterLinear(1000000.0));
	}

	/**
	 * Returns the kilohertz unit of frequency.
	 *
	 * @return UnitFrequency The kilohertz unit of frequency.
	 */
	public static function kilohertz(): UnitFrequency
	{
		return new static("kHz", new UnitConverterLinear(1000.0));
	}

	/**
	 * Returns the hertz unit of frequency.
	 *
	 * @return UnitFrequency The hertz unit of frequency.
	 */
	public static function hertz(): UnitFrequency
	{
		return new static("Hz", new UnitConverterLinear(1.0));
	}

	/**
	 * Returns the millihertz unit of frequency.
	 *
	 * @return UnitFrequency The millihertz unit of frequency.
	 */
	public static function millihertz(): UnitFrequency
	{
		return new static("mHz", new UnitConverterLinear(0.001));
	}

	/**
	 * Returns the microhertz unit of frequency.
	 *
	 * @return UnitFrequency The microhertz unit of frequency.
	 */
	public static function microhertz(): UnitFrequency
	{
		return new static("µHz", new UnitConverterLinear(0.000001));
	}

	/**
	 * Returns the nanohertz unit of frequency.
	 *
	 * @return UnitFrequency The hertz unit of frequency.
	 */
	public static function nanohertz(): UnitFrequency
	{
		return new static("nHz", new UnitConverterLinear(1E-9));
	}

}
