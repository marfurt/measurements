<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitDispersion;

class UnitDispersionTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_defines_parts_per_million_as_base_unit()
	{
		$this->assertTrue(UnitDispersion::baseUnit() == UnitDispersion::partsPerMillion(), "Dispersion should define parts per million as its base unit.");
	}

	/** @test */
	public function it_converts_dispersions()
	{
		$base = new Measurement(1, UnitDispersion::baseUnit());

		$partsPerMillion = $base->convertTo(UnitDispersion::partsPerMillion());

		$this->assertTrue($partsPerMillion->value() == 1.0, "{$base} converted to parts per million should be equal to 1 ppm instead of {$partsPerMillion}.");
	}

}