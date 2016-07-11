<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitSpeed;

class UnitSpeedTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_defines_meters_per_second_as_base_unit()
	{
		$this->assertTrue(UnitSpeed::baseUnit() == UnitSpeed::metersPerSecond(), "Speed should define meters per second as its base unit.");
	}

	/** @test */
	public function it_converts_speeds()
	{
		$base = new Measurement(1, UnitSpeed::baseUnit());

		$metersPerSecond = $base->convertTo(UnitSpeed::metersPerSecond());
		$kilometersPerHour = $base->convertTo(UnitSpeed::kilometersPerHour());
		$milesPerHour = $base->convertTo(UnitSpeed::milesPerHour());
		$knots = $base->convertTo(UnitSpeed::knots());

		$this->assertTrue($metersPerSecond->value() == 1.0, "{$base} converted to meters per second should be equal to 1 m/s instead of {$metersPerSecond}.");
		$this->assertTrue($kilometersPerHour->value() == 1.0 / 0.277778, "{$base} converted to kilometers per hour should be equal to 3.59999712 km/h instead of {$kilometersPerHour}.");
		$this->assertTrue($milesPerHour->value() == 1.0 / 0.44704, "{$base} converted to miles per hour should be equal to 2.2369362921 mph instead of {$milesPerHour}.");
		$this->assertTrue($knots->value() == 1.0 / 0.514444, "{$base} converted to knots should be equal to 1.9438461718 kn instead of {$knots}.");
	}

}