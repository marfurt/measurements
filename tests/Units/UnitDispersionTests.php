<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitDispersion;

class UnitDispersionTests extends PHPUnit_Framework_TestCase {

	use InteractsWithUnits;

	/** @test */
	public function it_defines_parts_per_million_as_base_unit()
	{
		$this->assertTrue(UnitDispersion::baseUnit() == UnitDispersion::partsPerMillion(), "Dispersion should define parts per million as its base unit.");
	}

	/** @test */
	public function it_converts_dispersions()
	{
		$base = new Measurement(1, UnitDispersion::baseUnit());

		$this->assertMeasurementEquals($base->convertTo(UnitDispersion::partsPerMillion()), 1.0, $base, "parts per million");
	}

}