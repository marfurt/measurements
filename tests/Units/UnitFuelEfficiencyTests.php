<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitFuelEfficiency;

class UnitFuelEfficiencyTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_defines_liters_per_100_kilometers_as_base_unit()
	{
		$this->assertTrue(UnitFuelEfficiency::baseUnit() == UnitFuelEfficiency::litersPer100Kilometers(), "Fuel Efficiency should define liters per 100 kilometers as its base unit.");
	}

	/** @test */
	public function it_converts_lengths()
	{
		$base = new Measurement(1, UnitFuelEfficiency::baseUnit());

		$litersPer100Kilometers = $base->convertTo(UnitFuelEfficiency::litersPer100Kilometers());
		$milesPerGallon = $base->convertTo(UnitFuelEfficiency::milesPerGallon());
		$milesPerImperialGallon = $base->convertTo(UnitFuelEfficiency::milesPerImperialGallon());

		$this->assertTrue($litersPer100Kilometers->value() == 1.0, "{$base} converted to liters per 100 kilometers should be equal to 1 L/100km instead of {$litersPer100Kilometers}.");
		$this->assertTrue($milesPerGallon->value() == 1.0 / 235.215, "{$base} converted to miles per gallon should be equal to 0.004251429543 US mpg instead of {$milesPerGallon}.");
		$this->assertTrue($milesPerImperialGallon->value() == 1.0 / 282.481, "{$base} converted to miles per imperial gallon should be equal to 0.003540061101 Imp mpg instead of {$milesPerImperialGallon}.");
	}

}