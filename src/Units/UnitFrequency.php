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

	const SYMBOL_TERAHERTZ = "THz";
	const SYMBOL_GIGAHERTZ = "GHz";
	const SYMBOL_MEGAHERTZ = "MHz";
	const SYMBOL_KILOHERTZ = "kHz";
	const SYMBOL_HERTZ = "Hz";
	const SYMBOL_MILLIHERTZ = "mHz";
	const SYMBOL_MICROHERTZ = "µHz";
	const SYMBOL_NANOHERTZ = "nHz";

	const COEFFICIENT_TERAHERTZ = 1E+12;
	const COEFFICIENT_GIGAHERTZ = 1E+9;
	const COEFFICIENT_MEGAHERTZ = 1E+6;
	const COEFFICIENT_KILOHERTZ = 1000.0;
	const COEFFICIENT_HERTZ = 1.0;
	const COEFFICIENT_MILLIHERTZ = 0.001;
	const COEFFICIENT_MICROHERTZ = 1E-6;
	const COEFFICIENT_NANOHERTZ = 1E-9;

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
		return new static(static::SYMBOL_TERAHERTZ, new UnitConverterLinear(static::COEFFICIENT_TERAHERTZ));
	}

	/**
	 * Returns the gigahertz unit of frequency.
	 *
	 * @return UnitFrequency The gigahertz unit of frequency.
	 */
	public static function gigahertz(): UnitFrequency
	{
		return new static(static::SYMBOL_GIGAHERTZ, new UnitConverterLinear(static::COEFFICIENT_GIGAHERTZ));
	}

	/**
	 * Returns the megahertz unit of frequency.
	 *
	 * @return UnitFrequency The megahertz unit of frequency.
	 */
	public static function megahertz(): UnitFrequency
	{
		return new static(static::SYMBOL_MEGAHERTZ, new UnitConverterLinear(static::COEFFICIENT_MEGAHERTZ));
	}

	/**
	 * Returns the kilohertz unit of frequency.
	 *
	 * @return UnitFrequency The kilohertz unit of frequency.
	 */
	public static function kilohertz(): UnitFrequency
	{
		return new static(static::SYMBOL_KILOHERTZ, new UnitConverterLinear(static::COEFFICIENT_KILOHERTZ));
	}

	/**
	 * Returns the hertz unit of frequency.
	 *
	 * @return UnitFrequency The hertz unit of frequency.
	 */
	public static function hertz(): UnitFrequency
	{
		return new static(static::SYMBOL_HERTZ, new UnitConverterLinear(static::COEFFICIENT_HERTZ));
	}

	/**
	 * Returns the millihertz unit of frequency.
	 *
	 * @return UnitFrequency The millihertz unit of frequency.
	 */
	public static function millihertz(): UnitFrequency
	{
		return new static(static::SYMBOL_MILLIHERTZ, new UnitConverterLinear(static::COEFFICIENT_MILLIHERTZ));
	}

	/**
	 * Returns the microhertz unit of frequency.
	 *
	 * @return UnitFrequency The microhertz unit of frequency.
	 */
	public static function microhertz(): UnitFrequency
	{
		return new static(static::SYMBOL_MICROHERTZ, new UnitConverterLinear(static::COEFFICIENT_MICROHERTZ));
	}

	/**
	 * Returns the nanohertz unit of frequency.
	 *
	 * @return UnitFrequency The hertz unit of frequency.
	 */
	public static function nanohertz(): UnitFrequency
	{
		return new static(static::SYMBOL_NANOHERTZ, new UnitConverterLinear(static::COEFFICIENT_NANOHERTZ));
	}

}
