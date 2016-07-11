<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitConcentrationMass;

class UnitConcentrationMassTests extends PHPUnit_Framework_TestCase {

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

		$gramsPerLiter = $base->convertTo(UnitConcentrationMass::gramsPerLiter());
		$milligramsPerDeciliter = $base->convertTo(UnitConcentrationMass::milligramsPerDeciliter());
		$millimolesPerLiterWithGramsPerMole = $base->convertTo(UnitConcentrationMass::millimolesPerLiterWithGramsPerMole($gramsPerMole));

		$this->assertTrue($gramsPerLiter->value() == 1.0, "{$base} converted to grams per liter should be equal to 1 g/L instead of {$gramsPerLiter}.");
		$this->assertTrue($milligramsPerDeciliter->value() == 100, "{$base} converted to milligrams per deciliter should be equal to 100 mg/dL instead of {$milligramsPerDeciliter}.");
		$this->assertTrue($millimolesPerLiterWithGramsPerMole->value() == 1.0 / (18 * $gramsPerMole), "{$base} converted to millimoles per liter should be equal to 0.05555555556 mmol/L instead of {$millimolesPerLiterWithGramsPerMole}.");
	}

}