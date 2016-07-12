<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitAngle;

class UnitAngleTests extends PHPUnit_Framework_TestCase {

	use InteractsWithUnits;

	/** @test */
	public function it_defines_degrees_as_base_unit()
	{
		$this->assertTrue(UnitAngle::baseUnit() == UnitAngle::degrees(), "Angle should define degrees as its base unit.");
	}

	/** @test */
	public function it_converts_angles()
	{
		$base = new Measurement(1, UnitAngle::baseUnit());

		$this->assertMeasurementEquals($base->convertTo(UnitAngle::degrees()), 1.0, $base, "degrees");
		$this->assertMeasurementEquals($base->convertTo(UnitAngle::arcMinutes()), 1.0 / 0.016667, $base, "arc minutes");
		$this->assertMeasurementEquals($base->convertTo(UnitAngle::arcSeconds()), 1.0 / 0.00027778, $base, "arc seconds");
		$this->assertMeasurementEquals($base->convertTo(UnitAngle::radians()), 1.0 / 57.2958, $base, "radians");
		$this->assertMeasurementEquals($base->convertTo(UnitAngle::gradians()), 1.0 / 0.9, $base, "gradians");
		$this->assertMeasurementEquals($base->convertTo(UnitAngle::revolutions()), 1.0 / 6.28319, $base, "revolutions");
	}

}