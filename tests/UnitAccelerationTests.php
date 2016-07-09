<?php namespace Tests;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitAcceleration;

class UnitAccelerationTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_defines_metersPerSecondSquared_as_base_unit()
	{
		$this->assertTrue(UnitAcceleration::baseUnit() == UnitAcceleration::metersPerSecondSquared(), "Acceleration should define Meters per second squared as its base unit.");
	}

	/** @test */
	public function it_converts_lengths()
	{
		$base = new Measurement(1, UnitAcceleration::baseUnit());

		$metersPerSecondSquared = $base->convertTo(UnitAcceleration::metersPerSecondSquared());
		$gravity = $base->convertTo(UnitAcceleration::gravity());

		$this->assertTrue($metersPerSecondSquared->value() == 1, "{$base} converted to meters per second squared should be equal to 1 m/s² instead of {$metersPerSecondSquared}.");
		$this->assertTrue($gravity->value() == 1.0 / 9.81, "{$base} converted to gravity should be equal to 0.1019367992 g instead of {$gravity}.");
	}

}