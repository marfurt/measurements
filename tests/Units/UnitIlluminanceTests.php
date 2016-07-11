<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitIlluminance;

class UnitIlluminanceTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_defines_lux_as_base_unit()
	{
		$this->assertTrue(UnitIlluminance::baseUnit() == UnitIlluminance::lux(), "Illuminance should define lux as its base unit.");
	}

	/** @test */
	public function it_converts_lengths()
	{
		$base = new Measurement(1, UnitIlluminance::baseUnit());

		$lux = $base->convertTo(UnitIlluminance::lux());

		$this->assertTrue($lux->value() == 1.0, "{$base} converted to lux should be equal to 1 lx instead of {$lux}.");
	}

}