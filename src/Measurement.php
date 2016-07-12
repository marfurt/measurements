<?php namespace Measurements;

use BadMethodCallException;
use InvalidArgumentException;
use Measurements\Exceptions\UnitException;
use Measurements\Exceptions\MeasurementValueException;

/**
 * A `Measurement` object represents a quantity and unit of measure.
 * The `Measurement` class provides a programmatic interface to converting measurements into different units, as well as calculating the sum or difference between two measurements.
 */
class Measurement implements Comparable {

	/**
	 * The value component of the measurement.
	 *
	 * @var double
	 */
	protected $value;

	/**
	 * The unit component of the measurement.
	 *
	 * @var \Measurements\Unit
	 */
	protected $unit;

	/**
	 * Initializes a new measurement with a specified floating-point value and unit.
	 *
	 * @param double $value The measurement value.
	 * @param Unit   $unit  The unit of measure.
	 *
	 * @throws \Measurements\Exceptions\MeasurementValueException
	 */
	public function __construct($value, Unit $unit)
	{
		if (!is_numeric($value)) {
			throw new MeasurementValueException("Measurement value <{$value}> must be numeric.");
		}

		$this->value = (double)$value;
		$this->unit = $unit;
	}

	/**
	 * Returns the unit of measure.
	 *
	 * @return \Measurements\Unit The unit of measure.
	 */
	public function unit(): Unit
	{
		return $this->unit;
	}

	/**
	 * Returns the measurement value, represented as a floating-point number.
	 *
	 * @return double The measurement value.
	 */
	public function value()
	{
		return $this->value;
	}

	/**
	 * Returns a string that represents the contents of the measurement.
	 *
	 * @return string A string that represents the contents of the measurement.
	 */
	public function toString()
	{
		return "{$this->value()} {$this->unit()}";
	}

	/**
	 * Converts the measurement to its string representation.
	 *
	 * @return string A string that represents the measurement.
	 */
	public function __toString()
	{
		return $this->toString();
	}

	/**
	 * Returns a boolean value that indicates whether the measurement is equal to another given object.
	 *
	 * @param mixed $other The object with which to compare the measurement.
	 *
	 * @return bool `true` if both objects are equal, otherwise `false`.
	 */
	public function isEqualTo($other)
	{
		if (! $other instanceof Measurement) {
			return false;
		}

		if ($other->unit()->isEqualTo($this->unit)) {
			return $this->value() == $other->value();
		}

		$rhsInLhs = $other->convertTo($this->unit());

		return $this->value() == $rhsInLhs->value();
	}

	/**
	 * Returns a boolean value that indicates whether the measurement is greater than another given object.
	 *
	 * @param mixed $object The object with which to compare the measurement.
	 *
	 * @return bool `true` if the ` is greater than object, otherwise `false`.
	 */
	public function isGreaterThan($object)
	{
		return $this->compareTo($object, function($lhs, $rhs) {
			return $lhs > $rhs;
		});
	}

	/**
	 * Returns a boolean value that indicates whether the measurement is greater than or equal to another given object.
	 *
	 * @param mixed $object The object with which to compare the measurement.
	 *
	 * @return bool `true` if the measurement is greater than or equal to object, otherwise `false`.
	 */
	public function isGreaterThanOrEqualTo($object)
	{
		return $this->compareTo($object, function($lhs, $rhs) {
			return $lhs >= $rhs;
		});
	}
	
	/**
	 * RReturns a boolean value that indicates whether the measurement is less than another given object.
	 *
	 * @param mixed $object The object with which to compare the measurement.
	 *
	 * @return bool `true` if the measurement is less than object, otherwise `false`.
	 */
	public function isLessThan($object)
	{
		return $this->compareTo($object, function($lhs, $rhs) {
			return $lhs < $rhs;
		});
	}

	/**
	 * Returns a boolean value that indicates whether the measurement is less than or equal to another given object.
	 *
	 * @param mixed $object The object with which to compare the measurement.
	 *
	 * @return bool `true` if the measurement is less than or equal to object, otherwise `false`.
	 */
	public function isLessThanOrEqualTo($object)
	{
		return $this->compareTo($object, function($lhs,$rhs) {
			return $lhs >= $rhs;
		});
	}

	/**
	 * Compares the measurement to another given object.
	 *
	 * @param mixed $object The object with which to compare the measurement.
	 * @param callable $comparison The closure used to compare objects.
	 *
	 * @return mixed The result of the comparison between the measurement and the given object.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function compareTo($object, callable $comparison)
	{
		if (! $object instanceof Measurement) {
			return $comparison($this, $object);
		}

		if ($this->unit()->isEqualTo($object->unit())) {
			return $comparison($this->value(), $object->value());
		}
		
		if (! $this->canBeConvertedToUnit($object->unit())) {
			throw new UnitException("Attempt to compare measurements with non-equal units!");
		}

		$rhsInLhs = $object->convertTo($this->unit());

		return $comparison($this->value(), $rhsInLhs->value());
	}

	/**
	 * Returns a measurement created by converting the measurement to the specified unit.
	 *
	 * @param Dimension $otherUnit The unit to convert the measurement.
	 *
	 * @return Measurement A new measurement object with a value calculated by converting into the new unit.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function convertTo(Dimension $otherUnit): Measurement
	{
		if (!($this->unit instanceof Dimension)) {
			throw new UnitException("Measurement unit must be of Dimension type to be converted!");
		}

		if ($otherUnit->isEqualTo($this->unit)) {
			return new static($this->value, $otherUnit);
		}

		$baseUnit = get_class($this->unit)::baseUnit();
		$valueInTermsOfBase = $this->unit->converter()->baseUnitValueFromValue($this->value);

		if ($otherUnit->isEqualTo($baseUnit)) {
			return new Measurement($valueInTermsOfBase, $otherUnit);
		}

		$otherValueFromTermsOfBase = $otherUnit->converter()->valueFromBaseUnitValue($valueInTermsOfBase);

		return new Measurement($otherValueFromTermsOfBase, $otherUnit);
	}

	/**
	 * Returns a boolean that indicates whether the measurement can be converted to the specified unit.
	 *
	 * @param Dimension $unit The unit to convert the measurement.
	 *
	 * @return bool `true` if the measurement can be converted to the specified unit, otherwise `false`.
	 */
	public function canBeConvertedToUnit(Dimension $unit)
	{
		if (!($this->unit instanceof Dimension)) {
			return false;
		}

		return $this->unit->getBaseUnit()->isEqualTo($unit->getBaseUnit());
	}

	/**
	 * Returns a new measurement by adding the receiver to the specified measurement.
	 *
	 * @param Measurement $measurement The measurement to be added.
	 *
	 * @return Measurement A new measurement with a value equal to the receiver's value plus the value of the specified measurement converted into the unit of the receiver.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function add(Measurement $measurement): Measurement
	{
		if ($measurement->unit()->isEqualTo($this->unit)) {
			return $this->addValue($measurement->value());
		}

		if ($measurement->unit() instanceOf Dimension) {
			$lhsValueInTermsOfBase = $this->unit()->converter()->baseUnitValueFromValue($this->value());
			$rhsValueInTermsOfBase = $measurement->unit()->converter()->baseUnitValueFromValue($measurement->value());

			return new Measurement($lhsValueInTermsOfBase + $rhsValueInTermsOfBase, $this->unit->getBaseUnit());
		}

		throw new UnitException("Attempt to add measurements with non-equal units!");
	}

	/**
	 * Returns a new measurement by adding the given value to the measurement.
	 *
	 * @param double $value The value to be added.
	 *
	 * @return Measurement A new measurement with a value equal to the receiver's value plus the specified value.
	 */
	public function addValue($value): Measurement
	{
		return new Measurement($this->value() + $value, $this->unit());
	}

	/**
	 * Returns a new measurement by subtracting the specified measurement from the receiver.
	 *
	 * @param Measurement $measurement The measurement to be subtracted.
	 *
	 * @return Measurement A new measurement with a value equal to the receiver's value minus the value of the specified measurement converted into the unit of the receiver.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function subtract(Measurement $measurement): Measurement
	{
		if ($measurement->unit()->isEqualTo($this->unit)) {
			return $this->subtractValue($measurement->value());
		}

		if ($measurement->unit() instanceOf Dimension) {
			$lhsValueInTermsOfBase = $this->unit()->converter()->baseUnitValueFromValue($this->value());
			$rhsValueInTermsOfBase = $measurement->unit()->converter()->baseUnitValueFromValue($measurement->value());

			return new Measurement($lhsValueInTermsOfBase - $rhsValueInTermsOfBase, $this->unit->getBaseUnit());
		}

		throw new UnitException("Attempt to subtract measurements with non-equal units!");
	}

	/**
	 * Returns a new measurement by subtracting the given value from the measurement.
	 *
	 * @param double $value The value to be subtracted.
	 *
	 * @return Measurement A new measurement with a value equal to the receiver's value minus the specified value.
	 */
	public function subtractValue($value): Measurement
	{
		return new Measurement($this->value() - $value, $this->unit());
	}

	/**
	 * Returns a new measurement by multiplying the receiver by the specified measurement.
	 *
	 * @param Measurement $measurement The measurement to be multiplied by.
	 *
	 * @return Measurement A new measurement with a value equal to the receiver's value multiplied by the value of the specified measurement converted into the unit of the receiver.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function multiplyBy(Measurement $measurement): Measurement
	{
		if ($measurement->unit()->isEqualTo($this->unit)) {
			return $this->multiplyByValue($measurement->value());
		}

		if ($measurement->unit() instanceOf Dimension) {
			$lhsValueInTermsOfBase = $this->unit()->converter()->baseUnitValueFromValue($this->value());
			$rhsValueInTermsOfBase = $measurement->unit()->converter()->baseUnitValueFromValue($measurement->value());

			return new Measurement($lhsValueInTermsOfBase * $rhsValueInTermsOfBase, $this->unit->getBaseUnit());
		}

		throw new UnitException("Attempt to multiply measurements with non-equal units!");
	}

	/**
	 * Returns a new measurement by multiplying the measurement by the given value.
	 *
	 * @param double $value The value to be multiplied by.
	 *
	 * @return Measurement A new measurement with a value equal to the receiver's value multiplied by the specified value.
	 */
	public function multiplyByValue($value): Measurement
	{
		return new Measurement($this->value() * $value, $this->unit());
	}

	/**
	 * Returns a new measurement by dividing the receiver by the specified measurement.
	 *
	 * @param Measurement $measurement The measurement to divide by.
	 *
	 * @return Measurement A new measurement with a value equal to the receiver's value divided by the value of the specified measurement converted into the unit of the receiver.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function divideBy(Measurement $measurement): Measurement
	{
		if ($measurement->unit()->isEqualTo($this->unit)) {
			return $this->divideByValue($measurement->value());
		}

		if ($measurement->unit() instanceOf Dimension) {
			$lhsValueInTermsOfBase = $this->unit()->converter()->baseUnitValueFromValue($this->value());
			$rhsValueInTermsOfBase = $measurement->unit()->converter()->baseUnitValueFromValue($measurement->value());

			return new Measurement($lhsValueInTermsOfBase / $rhsValueInTermsOfBase, $this->unit->getBaseUnit());
		}

		throw new UnitException("Attempt to divide measurements with non-equal units!");
	}

	/**
	 * Returns a new measurement by dividing the measurement by the given value.
	 *
	 * @param $value double The value to divide by.
	 *
	 * @return Measurement A new measurement with a value equal to the receiver's value divided by the specified value.
	 */
	public function divideByValue($value): Measurement
	{
		return new Measurement($this->value() / $value, $this->unit());
	}

	/**
	 * Handle dynamic calls to the object.
	 *
	 * @param  string  $method
	 * @param  array   $parameters
	 *
	 * @return mixed
	 *
	 * @throws \BadMethodCallException
	 */
	public function __call($method, $parameters)
	{
		// Provide a shortcut to convert a measurement to a specific unit:
		//     $meters = Length::meters($x);
		//     $centimeters = $meters->toCentimeters();
		// instead of
		//     $meters = new Length($x, UnitLength::meters());
		//     $centimeters = $meters->convertTo(UnitLength::centimeters());

		if (substr($method, 0, 2) == 'to') {
			$class = static::resolveUnitClass();
			$method = lcfirst(substr($method, 2));
			
			if (method_exists($class, $method) && is_callable([ $class, $method ])) {
				return $this->convertTo(call_user_func([ $class, $method ]));
			}

			if (!is_subclass_of($this, Measurement::class)) {
				throw new BadMethodCallException("The caller must be a subclass of ".Measurement::class." to allow the short syntax conversion to {$method}.");
			}

			throw new BadMethodCallException("Cannot convert ".static::class." to {$method}.");
		}
	}

	/**
	 * Handle dynamic, static calls to the object.
	 *
	 * @param  string  $method
	 * @param  array   $parameters
	 *
	 * @return mixed
	 *
	 * @throws \InvalidArgumentException
	 * @throws \BadMethodCallException
	 */
	public static function __callStatic($method, $parameters)
	{
		// Provide a shortcut to create a measurement with a specific unit:
		//     $length = Length::meters($x);
		// instead of
		//     $length = new Length($x, UnitLength::meters());

		$class = static::resolveUnitClass();

		if (method_exists($class, $method) && is_callable([ $class, $method ])) {

			if (count($parameters) == 0) {
				throw new InvalidArgumentException("Missing value argument for creating a measurement.");
			}

			return new static($parameters[0], call_user_func([ $class, $method ]));
		}

		throw new BadMethodCallException("Invalid method {$method}() called on {$class} class.");
	}

	/**
	 * Resolve the specific Unit class that corresponds to the current Measurement type.
	 *
	 * @return string The Unit class that corresponds to the current quantity.
	 */
	protected static function resolveUnitClass()
	{
		return '\Measurements\Units\Unit'.basename(str_replace('\\', '/', static::class));
	}

}
