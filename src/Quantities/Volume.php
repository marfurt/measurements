<?php namespace Measurements\Quantities;

use Measurements\Unit;
use Measurements\Measurement;
use Measurements\Units\UnitLength;
use Measurements\Units\UnitVolume;
use Measurements\Exceptions\UnitException;

/**
 * The `Volume` class represents a specific quantities of volume.
 */
class Volume extends Measurement {

	/**
	 * Initializes a new volume measurement with a specified floating-point value and unit.
	 *
	 * @param double $value The measurement value.
	 * @param Unit   $unit  The unit of measure.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function __construct($value, Unit $unit)
	{
		if (! $unit instanceof UnitVolume) {
			throw new UnitException("Attempt to create a volume measurement from an invalid unit [$unit]!");
		}

		parent::__construct($value, $unit);
	}

	/**
	 * Returns a volume measurement computed from a specified length.
	 *
	 * @param Length $length A length.
	 *
	 * @return \Measurements\Quantities\Volume The volume that corresponds to the given length.
	 */
	public static function fromEquivalentLengths(Length $length)
	{
		return static::fromLengths($length, $length, $length);
	}

	/**
	 * Returns a volume measurement computed from the specified length, width and height.
	 *
	 * @param Length $length A length.
	 * @param Length $width A width.
	 * @param Length $height A height.
	 *
	 * @return \Measurements\Quantities\Volume The volume that corresponds to the given length, width and height.
	 */
	public static function fromLengths(Length $length, Length $width, Length $height)
	{
		$length = $length->convertTo(UnitLength::meters());
		$width = $width->convertTo(UnitLength::meters());
		$height = $height->convertTo(UnitLength::meters());

		$volume = $length->value() * $width->value() * $height->value();

		$volumeInCubicMeters = new static($volume, UnitVolume::cubicMeters());

		return $volumeInCubicMeters->convertTo(UnitVolume::baseUnit());
	}

}
