<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitAcceleration;

class UnitAccelerationTests extends PHPUnit_Framework_TestCase {

	use InteractsWithUnits;

	/** @test */
	public function it_defines_metersPerSecondSquared_as_base_unit()
	{
		$this->assertTrue(UnitAcceleration::baseUnit() == UnitAcceleration::metersPerSecondSquared(), "Acceleration should define Meters per second squared as its base unit.");
	}

	/** @test */
	public function it_converts_accelerations()
	{
		$base = new Measurement(1, UnitAcceleration::baseUnit());

		$this->assertMeasurementEquals($base->convertTo(UnitAcceleration::metersPerSecondSquared()), 1.0, $base, "meters per second squared");
		$this->assertMeasurementEquals($base->convertTo(UnitAcceleration::gravity()), 1.0 / 9.81, $base, "gravity");
	}

}