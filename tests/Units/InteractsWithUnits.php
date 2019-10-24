<?php namespace Tests\Units;

use Measurements\Measurement;

trait InteractsWithUnits {

	public function assertMeasurementEquals(Measurement $measurement, $value, $base, $unit, $accuracy = 1E-9)
	{
		$this->assertEqualsWithDelta($measurement->value(), $value, $accuracy, "{$base} converted to {$unit} should be equal to {$value} {$measurement->unit()} instead of {$measurement}.");
	}

}