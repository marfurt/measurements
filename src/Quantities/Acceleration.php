<?php namespace Measurements\Quantities;

use Measurements\Unit;
use Measurements\Measurement;
use Measurements\Units\UnitLength;
use Measurements\Units\UnitDuration;
use Measurements\Units\UnitAcceleration;
use Measurements\Exceptions\UnitException;

/**
 * The `Acceleration` class represents a specific quantities of acceleration.
 */
class Acceleration extends Measurement {

	/**
	 * Initializes a new acceleration with a specified floating-point value and unit.
	 *
	 * @param double $value The measurement value.
	 * @param Unit   $unit  The unit of measure.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function __construct($value, Unit $unit)
	{
		if (!$unit instanceof UnitAcceleration) {
			throw new UnitException("Attempt to create an acceleration measurement from an invalid unit [$unit]!");
		}

		parent::__construct($value, $unit);
	}

	/**
	 * Returns an acceleration measurement computed from the specified length and duration.
	 *
	 * @param Length   $length   A length.
	 * @param Duration $duration A duration.
	 *
	 * @return \Measurements\Quantities\Acceleration The acceleration that corresponds to the given length and duration.
	 */
	public static function fromLengthAndDuration(Length $length, Duration $duration)
	{
		$meters = $length->convertTo(UnitLength::meters());
		$seconds = $duration->convertTo(UnitDuration::seconds());

		$acceleration = $meters->value() / ($seconds->value() * $seconds->value());

		return new static($acceleration, UnitAcceleration::metersPerSecondSquared());
	}

}
