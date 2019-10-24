<?php namespace Tests\Units;

use PHPUnit\Framework\TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitRadioactivity;

class UnitRadioactivityTests extends TestCase {

	use InteractsWithUnits;

	/** @test */
	public function it_defines_becquerel_as_base_unit()
	{
		$this->assertTrue(UnitRadioactivity::baseUnit() == UnitRadioactivity::becquerel(), "Radioactivity should define becquerel as its base unit.");
	}

	/** @test */
	public function it_converts_radioactivities()
	{
		$base = new Measurement(1, UnitRadioactivity::baseUnit());

		$this->assertMeasurementEquals($base->convertTo(UnitRadioactivity::becquerel()), 1.0, $base, "becquerel");
		$this->assertMeasurementEquals($base->convertTo(UnitRadioactivity::curie()), 1.0 / 3.7E+10, $base, "curie");
	}

}