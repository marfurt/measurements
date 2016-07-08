<?php namespace Measurements;

/**
 * A `UnitConverter` describes how to convert a unit to and from the base unit of its dimension.
 * Use the `UnitConverter` interface to implement new ways of converting a unit.
 */
interface UnitConverter {

	/*
	 * For a given unit, returns the specified value of that unit in terms of the base unit of its dimension.
	 *
	 * @param double $value The value in terms of the unit class.
	 *
	 * @return double The value in terms of the base unit.
	 */
	public function baseUnitValueFromValue($value);

	/*
	 * For a given unit, returns the specified value of the base unit in terms of that unit.
	 *
	 * @param double $baseUnitValue The value in terms of the base unit.
	 *
	 * @return double The value in terms of a given unit.
	 */
	public function valueFromBaseUnitValue($baseUnitValue);

}
