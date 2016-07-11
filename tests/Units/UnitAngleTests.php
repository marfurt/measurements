<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitAngle;

class UnitAngleTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_defines_degrees_as_base_unit()
	{
		$this->assertTrue(UnitAngle::baseUnit() == UnitAngle::degrees(), "Angle should define degrees as its base unit.");
	}

	/** @test */
	public function it_converts_angles()
	{
		$base = new Measurement(1, UnitAngle::baseUnit());

		$degrees = $base->convertTo(UnitAngle::degrees());
		$arcMinutes = $base->convertTo(UnitAngle::arcMinutes());
		$arcSeconds = $base->convertTo(UnitAngle::arcSeconds());
		$radians = $base->convertTo(UnitAngle::radians());
		$gradians = $base->convertTo(UnitAngle::gradians());
		$revolutions = $base->convertTo(UnitAngle::revolutions());

		$this->assertTrue($degrees->value() == 1.0, "{$base} converted to degrees should be equal to 1° instead of {$degrees}.");
		$this->assertTrue($arcMinutes->value() == 1.0 / 0.016667, "{$base} converted to arc minutes should be equal to 59.998800024ʹ instead of {$arcMinutes}.");
		$this->assertTrue($arcSeconds->value() == 1.0 / 0.00027778, "{$base} converted to arc seconds should be equal to 3599.9712002ʺ instead of {$arcSeconds}.");
		$this->assertTrue($radians->value() == 1.0 / 57.2958, "{$base} converted to radians should be equal to 0.01745328628 rad instead of {$radians}.");
		$this->assertTrue($gradians->value() == 1.0 / 0.9, "{$base} converted to gradians be equal to 1.1111111111 grad instead of {$gradians}.");
		$this->assertTrue($revolutions->value() == 1.0 / 6.28319, "{$base} converted to revolutions should be equal to 0.1591548242 rev instead of {$revolutions}.");
	}

}