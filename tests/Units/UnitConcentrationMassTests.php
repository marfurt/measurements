<?php namespace Tests\Units;

use PHPUnit\Framework\TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitConcentrationMass;

class UnitConcentrationMassTests extends TestCase {

	use InteractsWithUnits;

	/** @test */
	public function it_defines_grams_per_liter_as_base_unit()
	{
		$this->assertTrue(UnitConcentrationMass::baseUnit() == UnitConcentrationMass::gramsPerLiter(), "Concentration mass should define grams per liter as its base unit.");
	}

	/** @test */
	public function it_converts_concentration_masses()
	{
		$base = new Measurement(1, UnitConcentrationMass::baseUnit());

		$gramsPerMole = 1.0;

		$this->assertMeasurementEquals($base->convertTo(UnitConcentrationMass::gramsPerLiter()), 1.0, $base, "grams per liter ");
		$this->assertMeasurementEquals($base->convertTo(UnitConcentrationMass::milligramsPerDeciliter()), 100, $base, "milligrams per deciliter");
		$this->assertMeasurementEquals($base->convertTo(UnitConcentrationMass::millimolesPerLiterWithGramsPerMole($gramsPerMole)), 1.0 / (18 * $gramsPerMole), $base, "millimoles per liter");
	}

}