<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitRadioactivity;

class UnitRadioactivityTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_defines_becquerel_as_base_unit()
	{
		$this->assertTrue(UnitRadioactivity::baseUnit() == UnitRadioactivity::becquerel(), "Radioactivity should define becquerel as its base unit.");
	}

	/** @test */
	public function it_converts_radioactivities()
	{
		$base = new Measurement(1, UnitRadioactivity::baseUnit());

		$becquerel = $base->convertTo(UnitRadioactivity::becquerel());
		$curie = $base->convertTo(UnitRadioactivity::curie());

		$this->assertTrue($becquerel->value() == 1.0, "{$base} converted to becquerel should be equal to 1 Bq instead of {$becquerel}.");
		$this->assertTrue($curie->value() == 1.0 / 3.7E+10, "{$base} converted to curie should be equal to 3.7E-10 Ci instead of {$curie}.");
	}

}