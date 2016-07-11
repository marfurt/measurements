<?php namespace Measurements\Quantities;

use Measurements\Unit;
use Measurements\Measurement;
use Measurements\Units\UnitSpeed;
use Measurements\Units\UnitLength;
use Measurements\Units\UnitDuration;
use Measurements\Exceptions\UnitException;

/**
 * The `Speed` class represents a specific quantities of speed.
 */
class Speed extends Measurement {

	/**
	 * Initializes a new speed measurement with a specified floating-point value and unit.
	 *
	 * @param double $value The measurement value.
	 * @param Unit   $unit  The unit of measure.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function __construct($value, Unit $unit)
	{
		if (!$unit instanceof UnitSpeed) {
			throw new UnitException("Attempt to create a speed measurement from an invalid unit [$unit]!");
		}

		parent::__construct($value, $unit);
	}

	/**
	 * Returns a speed measurement computed from the specified length and duration.
	 *
	 * @param Length   $length   A length.
	 * @param Duration $duration A duration.
	 *
	 * @return \Measurements\Quantities\Speed The speed that corresponds to the given length and duration.
	 */
	public static function fromLengthAndDuration(Length $length, Duration $duration)
	{
		$meters = $length->convertTo(UnitLength::meters());
		$seconds = $duration->convertTo(UnitDuration::seconds());

		$speed = $meters->value() / $seconds->value();

		return new static($speed, UnitSpeed::metersPerSecond());
	}

}
