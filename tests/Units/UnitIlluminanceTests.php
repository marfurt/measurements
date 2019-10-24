<?php namespace Tests\Units;

use PHPUnit\Framework\TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitIlluminance;

class UnitIlluminanceTests extends TestCase {

	use InteractsWithUnits;

	/** @test */
	public function it_defines_lux_as_base_unit()
	{
		$this->assertTrue(UnitIlluminance::baseUnit() == UnitIlluminance::lux(), "Illuminance should define lux as its base unit.");
	}

	/** @test */
	public function it_converts_lengths()
	{
		$base = new Measurement(1, UnitIlluminance::baseUnit());

		$this->assertMeasurementEquals($base->convertTo(UnitIlluminance::lux()), 1.0, $base, "lux");
	}

}