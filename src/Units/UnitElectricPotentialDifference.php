<?php namespace Measurements\Units;

use Measurements\Dimension;
use Measurements\Converters\UnitConverterLinear;

/**
 * The `UnitElectricPotentialDifference` class encapsulates units of measure for electric potential difference.
 * You typically use instances of `UnitElectricPotentialDifference` to represent specific quantities of electric potential difference using the `Measurement` class.
 *
 * Electric potential difference is the amount of electric potential energy of a point charge at a point in space.
 * The SI unit for electric potential difference is the volt (V), which is derived as the difference in electric potential energy between two points of a linear conductor when an electric current of one ampere dissipates one watt of power between those points (1V = 1W/1A).
 *
 * The base unit of `UnitElectricPotentialDifference` is defined as volts.
 */
class UnitElectricPotentialDifference extends Dimension {

	const SYMBOL_MEGAVOLTS = "MV";
	const SYMBOL_KILOVOLTS = "kV";
	const SYMBOL_VOLTS = "V";
	const SYMBOL_MILLIVOLTS = "mV";
	const SYMBOL_MICROVOLTS = "µV";

	const COEFFICIENT_MEGAVOLTS = 1E+6;
	const COEFFICIENT_KILOVOLTS = 1000.0;
	const COEFFICIENT_VOLTS = 1.0;
	const COEFFICIENT_MILLIVOLTS = 0.001;
	const COEFFICIENT_MICROVOLTS = 1E-6;

	/**
	 * Returns the base unit of electric potential difference, equal to volts.
	 *
	 * @return UnitElectricPotentialDifference The base unit of electric potential differnce.
	 */
	public static function baseUnit()
	{
		return self::volts();
	}

	/**
	 * Returns the megavolts unit of electric potential difference.
	 *
	 * @return UnitElectricPotentialDifference The megavolts unit of electric potential difference.
	 */
	public static function megavolts(): UnitElectricPotentialDifference
	{
		return new static(static::SYMBOL_MEGAVOLTS, new UnitConverterLinear(static::COEFFICIENT_MEGAVOLTS));
	}

	/**
	 * Returns the kilovolts unit of electric potential difference.
	 *
	 * @return UnitElectricPotentialDifference The kilovolts unit of electric potential difference.
	 */
	public static function kilovolts(): UnitElectricPotentialDifference
	{
		return new static(static::SYMBOL_KILOVOLTS, new UnitConverterLinear(static::COEFFICIENT_KILOVOLTS));
	}

	/**
	 * Returns the volts unit of electric potential difference.
	 *
	 * @return UnitElectricPotentialDifference The volts unit of electric potential difference.
	 */
	public static function volts(): UnitElectricPotentialDifference
	{
		return new static(static::SYMBOL_VOLTS, new UnitConverterLinear(static::COEFFICIENT_VOLTS));
	}

	/**
	 * Returns the millivolts unit of electric potential difference.
	 *
	 * @return UnitElectricPotentialDifference The millivolts unit of electric potential difference.
	 */
	public static function millivolts(): UnitElectricPotentialDifference
	{
		return new static(static::SYMBOL_MILLIVOLTS, new UnitConverterLinear(static::COEFFICIENT_MILLIVOLTS));
	}

	/**
	 * Returns the microvolts unit of electric potential difference.
	 *
	 * @return UnitElectricPotentialDifference The microvolts unit of electric potential difference.
	 */
	public static function microvolts(): UnitElectricPotentialDifference
	{
		return new static(static::SYMBOL_MICROVOLTS, new UnitConverterLinear(static::COEFFICIENT_MICROVOLTS));
	}

}
