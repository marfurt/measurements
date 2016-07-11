<?php namespace Measurements;

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
	 */
	public function __construct($value, Unit $unit)
	{
		$this->value = (double)$value;
		$this->unit = $unit;
	}

	/**
	 * Return the unit of measure.
	 *
	 * @return \Measurements\Unit The unit of measure.
	 */
	public function unit(): Unit
	{
		return $this->unit;
	}

	/**
	 * Return the measurement value, represented as a floating-point number.
	 *
	 * @return double The measurement value.
	 */
	public function value()
	{
		return $this->value;
	}

	public function __toString()
	{
		return $this->toString();
	}

	public function toString()
	{
		return "{$this->value()} {$this->unit()}";
	}

	public function isEqualTo($other)
	{
		if (! $other instanceof static) {
			return false;
		}

		if ($other->unit()->isEqualTo($this->unit)) {
			return $this->value() == $other->value();
		}

		$rhsInLhs = $other->convertTo($this->unit());

		return $this->value() == $rhsInLhs->value();
	}

	public function isGreaterThan($object)
	{
		return $this->compareTo($object, function($lhs, $rhs) {
			return $lhs > $rhs;
		});
	}

	public function isGreaterThanOrEqualTo($object)
	{
		return $this->compareTo($object, function($lhs, $rhs) {
			return $lhs >= $rhs;
		});
	}

	public function isLessThan($object)
	{
		return $this->compareTo($object, function($lhs, $rhs) {
			return $lhs < $rhs;
		});
	}

	public function isLessThanOrEqualTo($object)
	{
		return $this->compareTo($object, function($lhs,$rhs) {
			return $lhs >= $rhs;
		});
	}

	public function compareTo($object, callable $comparison)
	{
		if ($this->unit()->isEqualTo($object->unit())) {
			return $comparison($this->value(), $object->value());
		}
		
		if (! $this->canBeConvertedToUnit($object->unit())) {
			throw new UnitException("Attempt to compare measurements with non-equal units!");
		}

		$rhsInLhs = $object->convertTo($this->unit());

		return $comparison($this->value(), $rhsInLhs->value());
	}

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

	public function canBeConvertedToUnit(Dimension $unit)
	{
		if (!($this->unit instanceof Dimension)) {
			return false;
		}

		return $this->unit->getBaseUnit() == $unit->getBaseUnit(); // return $this->unit->getBaseUnit()->isEqualTo($unit->getBaseUnit());
	}

	public function add(Measurement $other): Measurement
	{
		if ($other->unit()->isEqualTo($this->unit)) {
			return $this->addValue($other->value());
		}

		if ($other->unit() instanceOf Dimension) {
			$lhsValueInTermsOfBase = $this->unit()->converter()->baseUnitValueFromValue($this->value());
			$rhsValueInTermsOfBase = $other->unit()->converter()->baseUnitValueFromValue($other->value());

			return new Measurement($lhsValueInTermsOfBase + $rhsValueInTermsOfBase, $this->unit->getBaseUnit());
		}

		throw new UnitException("Attempt to add measurements with non-equal units!");
	}

	public function addValue($value): Measurement
	{
		return new Measurement($this->value() + $value, $this->unit());
	}

	public function subtract(Measurement $other): Measurement
	{
		if ($other->unit()->isEqualTo($this->unit)) {
			return $this->subtractValue($other->value());
		}

		if ($other->unit() instanceOf Dimension) {
			$lhsValueInTermsOfBase = $this->unit()->converter()->baseUnitValueFromValue($this->value());
			$rhsValueInTermsOfBase = $other->unit()->converter()->baseUnitValueFromValue($other->value());

			return new Measurement($lhsValueInTermsOfBase - $rhsValueInTermsOfBase, $this->unit->getBaseUnit());
		}

		throw new UnitException("Attempt to subtract measurements with non-equal units!");
	}

	public function subtractValue($value): Measurement
	{
		return new Measurement($this->value() - $value, $this->unit());
	}

	public function multiplyBy(Measurement $other): Measurement
	{
		if ($other->unit()->isEqualTo($this->unit)) {
			return $this->multiplyByValue($other->value());
		}

		if ($other->unit() instanceOf Dimension) {
			$lhsValueInTermsOfBase = $this->unit()->converter()->baseUnitValueFromValue($this->value());
			$rhsValueInTermsOfBase = $other->unit()->converter()->baseUnitValueFromValue($other->value());

			return new Measurement($lhsValueInTermsOfBase * $rhsValueInTermsOfBase, $this->unit->getBaseUnit());
		}

		throw new UnitException("Attempt to multiply measurements with non-equal units!");
	}

	public function multiplyByValue($value): Measurement
	{
		return new Measurement($this->value() * $value, $this->unit());
	}

	public function divideBy(Measurement $other): Measurement
	{
		if ($other->unit()->isEqualTo($this->unit)) {
			return $this->divideByValue($other->value());
		}

		if ($other->unit() instanceOf Dimension) {
			$lhsValueInTermsOfBase = $this->unit()->converter()->baseUnitValueFromValue($this->value());
			$rhsValueInTermsOfBase = $other->unit()->converter()->baseUnitValueFromValue($other->value());

			return new Measurement($lhsValueInTermsOfBase / $rhsValueInTermsOfBase, $this->unit->getBaseUnit());
		}

		throw new UnitException("Attempt to divide measurements with non-equal units!");
	}

	public function divideByValue($value): Measurement
	{
		return new Measurement($this->value() / $value, $this->unit());
	}

}
