<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitSpeed;

class UnitSpeedTests extends PHPUnit_Framework_TestCase {

	use InteractsWithUnits;

	/** @test */
	public function it_defines_meters_per_second_as_base_unit()
	{
		$this->assertTrue(UnitSpeed::baseUnit() == UnitSpeed::metersPerSecond(), "Speed should define meters per second as its base unit.");
	}

	/** @test */
	public function it_converts_speeds()
	{
		$base = new Measurement(1, UnitSpeed::baseUnit());

		$this->assertMeasurementEquals($base->convertTo(UnitSpeed::metersPerSecond()), 1.0, $base, "meters per second");
		$this->assertMeasurementEquals($base->convertTo(UnitSpeed::kilometersPerHour()), 1.0 / 0.277778, $base, "kilometers per hour");
		$this->assertMeasurementEquals($base->convertTo(UnitSpeed::milesPerHour()), 1.0 / 0.44704, $base, "miles per hour");
		$this->assertMeasurementEquals($base->convertTo(UnitSpeed::knots()), 1.0 / 0.514444, $base, "knots");
	}

}