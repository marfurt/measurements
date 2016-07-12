<?php namespace Measurements\Units;

use Measurements\Dimension;
use Measurements\Converters\UnitConverterLinear;

/**
 * The `UnitMass` class encapsulates units of measure for mass.
 * You typically use instances of `UnitMass` to represent specific quantities of mass using the `Measurement` class.
 *
 * Mass is a fundamental property of matter that causes it to resist being accelerated by a force.
 * The SI unit for mass is the kilogram (kg), which defined in terms of the mass of the international prototype kilogram.
 *
 * The base unit of `UnitMass` is defined as kilograms.
 */
class UnitMass extends Dimension {

	const SYMBOL_KILOGRAMS = "kg";
	const SYMBOL_GRAMS = "g";
	const SYMBOL_DECIGRAMS = "dg";
	const SYMBOL_CENTIGRAMS = "cg";
	const SYMBOL_MILLIGRAMS = "mg";
	const SYMBOL_MICROGRAMS = "µg";
	const SYMBOL_NANOGRAMS = "ng";
	const SYMBOL_PICOGRAMS = "pg";
	const SYMBOL_OUNCES = "oz";
	const SYMBOL_OUNCES_TROY = "oz t";
	const SYMBOL_POUNDS = "lb";
	const SYMBOL_STONES = "st";
	const SYMBOL_METRIC_TONS = "t";
	const SYMBOL_SHORT_TONS = "ton";
	const SYMBOL_CARATS = "ct";
	const SYMBOL_SLUGS = "sg";

	const COEFFICIENT_KILOGRAMS = 1.0;
	const COEFFICIENT_GRAMS = 0.001;
	const COEFFICIENT_DECIGRAMS = 1E-4;
	const COEFFICIENT_CENTIGRAMS = 1E-5;
	const COEFFICIENT_MILLIGRAMS = 1E-6;
	const COEFFICIENT_MICROGRAMS = 1E-9;
	const COEFFICIENT_NANOGRAMS = 1E-12;
	const COEFFICIENT_PICOGRAMS = 1E-15;
	const COEFFICIENT_OUNCES = 0.0283495;
	const COEFFICIENT_OUNCES_TROY = 0.03110348;
	const COEFFICIENT_POUNDS = 0.453592;
	const COEFFICIENT_STONES = 0.157473;
	const COEFFICIENT_METRIC_TONS = 1000.0;
	const COEFFICIENT_SHORT_TONS = 907.185;
	const COEFFICIENT_CARATS = 0.0002;
	const COEFFICIENT_SLUGS = 14.5939;

	/**
	 * Returns the base unit of mass, equal to kilograms.
	 *
	 * @return UnitMass The the base unit of mass.
	 */
	public static function baseUnit()
	{
		return self::kilograms();
	}

	/**
	 * Returns the kilograms unit of mass.
	 *
	 * @return UnitMass The kilograms unit of mass.
	 */
	public static function kilograms(): UnitMass
	{
		return new static(static::SYMBOL_KILOGRAMS, new UnitConverterLinear(static::COEFFICIENT_KILOGRAMS));
	}

	/**
	 * Returns the grams unit of mass.
	 *
	 * @return UnitMass The grams unit of mass.
	 */
	public static function grams(): UnitMass
	{
		return new static(static::SYMBOL_GRAMS, new UnitConverterLinear(static::COEFFICIENT_GRAMS));
	}

	/**
	 * Returns the decigrams unit of mass.
	 *
	 * @return UnitMass The decigrams unit of mass.
	 */
	public static function decigrams(): UnitMass
	{
		return new static(static::SYMBOL_DECIGRAMS, new UnitConverterLinear(static::COEFFICIENT_DECIGRAMS));
	}

	/**
	 * Returns the centigrams unit of mass.
	 *
	 * @return UnitMass The centigrams unit of mass.
	 */
	public static function centigrams(): UnitMass
	{
		return new static(static::SYMBOL_CENTIGRAMS, new UnitConverterLinear(static::COEFFICIENT_CENTIGRAMS));
	}

	/**
	 * Returns the milligrams unit of mass.
	 *
	 * @return UnitMass The milligrams unit of mass.
	 */
	public static function milligrams(): UnitMass
	{
		return new static(static::SYMBOL_MILLIGRAMS, new UnitConverterLinear(static::COEFFICIENT_MILLIGRAMS));
	}

	/**
	 * Returns the micrograms unit of mass.
	 *
	 * @return UnitMass The micrograms unit of mass.
	 */
	public static function micrograms(): UnitMass
	{
		return new static(static::SYMBOL_MICROGRAMS, new UnitConverterLinear(static::COEFFICIENT_MICROGRAMS));
	}

	/**
	 * Returns the nanograms unit of mass.
	 *
	 * @return UnitMass The nanograms unit of mass.
	 */
	public static function nanograms(): UnitMass
	{
		return new static(static::SYMBOL_NANOGRAMS, new UnitConverterLinear(static::COEFFICIENT_NANOGRAMS));
	}

	/**
	 * Returns the picograms unit of mass.
	 *
	 * @return UnitMass The picograms unit of mass.
	 */
	public static function picograms(): UnitMass
	{
		return new static(static::SYMBOL_PICOGRAMS, new UnitConverterLinear(static::COEFFICIENT_PICOGRAMS));
	}

	/**
	 * Returns the ounces unit of mass.
	 *
	 * @return UnitMass The ounces unit of mass.
	 */
	public static function ounces(): UnitMass
	{
		return new static(static::SYMBOL_OUNCES, new UnitConverterLinear(static::COEFFICIENT_OUNCES));
	}

	/**
	 * Returns the ounces Troy unit of mass.
	 *
	 * @return UnitMass The ounces Troy unit of mass.
	 */
	public static function ouncesTroy(): UnitMass
	{
		return new static(static::SYMBOL_OUNCES_TROY, new UnitConverterLinear(static::COEFFICIENT_OUNCES_TROY));
	}

	/**
	 * Returns the pounds unit of mass.
	 *
	 * @return UnitMass The pounds unit of mass.
	 */
	public static function pounds(): UnitMass
	{
		return new static(static::SYMBOL_POUNDS, new UnitConverterLinear(static::COEFFICIENT_POUNDS));
	}

	/**
	 * Returns the stones unit of mass.
	 *
	 * @return UnitMass The stones unit of mass.
	 */
	public static function stones(): UnitMass
	{
		return new static(static::SYMBOL_STONES, new UnitConverterLinear(static::COEFFICIENT_STONES));
	}

	/**
	 * Returns the metricTons unit of mass.
	 *
	 * @return UnitMass The metricTons unit of mass.
	 */
	public static function metricTons(): UnitMass
	{
		return new static(static::SYMBOL_METRIC_TONS, new UnitConverterLinear(static::COEFFICIENT_METRIC_TONS));
	}

	/**
	 * Returns the short tons unit of mass.
	 *
	 * @return UnitMass The short tons unit of mass.
	 */
	public static function shortTons(): UnitMass
	{
		return new static(static::SYMBOL_SHORT_TONS, new UnitConverterLinear(static::COEFFICIENT_SHORT_TONS));
	}

	/**
	 * Returns the carats unit of mass.
	 *
	 * @return UnitMass The carats unit of mass.
	 */
	public static function carats(): UnitMass
	{
		return new static(static::SYMBOL_CARATS, new UnitConverterLinear(static::COEFFICIENT_CARATS));
	}

	/**
	 * Returns the slugs unit of mass.
	 *
	 * @return UnitMass The slugs unit of mass.
	 */
	public static function slugs(): UnitMass
	{
		return new static(static::SYMBOL_SLUGS, new UnitConverterLinear(static::COEFFICIENT_SLUGS));
	}

}
