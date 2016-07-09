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
		return new static("kg", new UnitConverterLinear(1.0));
	}

	/**
	 * Returns the grams unit of mass.
	 *
	 * @return UnitMass The grams unit of mass.
	 */
	public static function grams(): UnitMass
	{
		return new static("g", new UnitConverterLinear(0.001));
	}

	/**
	 * Returns the decigrams unit of mass.
	 *
	 * @return UnitMass The decigrams unit of mass.
	 */
	public static function decigrams(): UnitMass
	{
		return new static("dg", new UnitConverterLinear(0.0001));
	}

	/**
	 * Returns the centigrams unit of mass.
	 *
	 * @return UnitMass The centigrams unit of mass.
	 */
	public static function centigrams(): UnitMass
	{
		return new static("cg", new UnitConverterLinear(0.00001));
	}

	/**
	 * Returns the milligrams unit of mass.
	 *
	 * @return UnitMass The milligrams unit of mass.
	 */
	public static function milligrams(): UnitMass
	{
		return new static("mg", new UnitConverterLinear(0.000001));
	}

	/**
	 * Returns the micrograms unit of mass.
	 *
	 * @return UnitMass The micrograms unit of mass.
	 */
	public static function micrograms(): UnitMass
	{
		return new static("µg", new UnitConverterLinear(1E-9));
	}

	/**
	 * Returns the nanograms unit of mass.
	 *
	 * @return UnitMass The nanograms unit of mass.
	 */
	public static function nanograms(): UnitMass
	{
		return new static("ng", new UnitConverterLinear(1E-12));
	}

	/**
	 * Returns the picograms unit of mass.
	 *
	 * @return UnitMass The picograms unit of mass.
	 */
	public static function picograms(): UnitMass
	{
		return new static("pg", new UnitConverterLinear(1E-15));
	}

	/**
	 * Returns the ounces unit of mass.
	 *
	 * @return UnitMass The ounces unit of mass.
	 */
	public static function ounces(): UnitMass
	{
		return new static("oz", new UnitConverterLinear(0.0283495));
	}

	/**
	 * Returns the pounds unit of mass.
	 *
	 * @return UnitMass The pounds unit of mass.
	 */
	public static function pounds(): UnitMass
	{
		return new static("lb", new UnitConverterLinear(0.453592));
	}

	/**
	 * Returns the stones unit of mass.
	 *
	 * @return UnitMass The stones unit of mass.
	 */
	public static function stones(): UnitMass
	{
		return new static("st", new UnitConverterLinear(0.157473));
	}

	/**
	 * Returns the metricTons unit of mass.
	 *
	 * @return UnitMass The metricTons unit of mass.
	 */
	public static function metricTons(): UnitMass
	{
		return new static("t", new UnitConverterLinear(1000));
	}

	/**
	 * Returns the shortTons unit of mass.
	 *
	 * @return UnitMass The shortTons unit of mass.
	 */
	public static function shortTons(): UnitMass
	{
		return new static("ton", new UnitConverterLinear(907.185));
	}

	/**
	 * Returns the carats unit of mass.
	 *
	 * @return UnitMass The carats unit of mass.
	 */
	public static function carats(): UnitMass
	{
		return new static("ct", new UnitConverterLinear(0.0002));
	}

	/**
	 * Returns the ouncesTroy unit of mass.
	 *
	 * @return UnitMass The ouncesTroy unit of mass.
	 */
	public static function ouncesTroy(): UnitMass
	{
		return new static("oz t", new UnitConverterLinear(0.03110348));
	}

	/**
	 * Returns the slugs unit of mass.
	 *
	 * @return UnitMass The slugs unit of mass.
	 */
	public static function slugs(): UnitMass
	{
		return new static("sg", new UnitConverterLinear(14.5939));
	}

}
