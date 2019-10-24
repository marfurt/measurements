<?php namespace Tests\Units;

use PHPUnit\Framework\TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitMass;

class UnitMassTests extends TestCase {

	use InteractsWithUnits;

	/** @test */
	public function it_defines_kilograms_as_base_unit()
	{
		$this->assertTrue(UnitMass::baseUnit() == UnitMass::kilograms(), "Mass should define kilograms as its base unit.");
	}

	/** @test */
	public function it_converts_masses()
	{
		$base = new Measurement(1, UnitMass::baseUnit());

		$this->assertMeasurementEquals($base->convertTo(UnitMass::kilograms()), 1.0, $base, "kilograms");
		$this->assertMeasurementEquals($base->convertTo(UnitMass::grams()), 1000, $base, "grams");
		$this->assertMeasurementEquals($base->convertTo(UnitMass::decigrams()), 10000, $base, "decigrams");
		$this->assertMeasurementEquals($base->convertTo(UnitMass::centigrams()), 1.0 / 1E-5, $base, "centigrams");
		$this->assertMeasurementEquals($base->convertTo(UnitMass::milligrams()), 1.0 / 1E-6, $base, "milligrams");
		$this->assertMeasurementEquals($base->convertTo(UnitMass::micrograms()), 1.0 / 1E-9, $base, "micrograms");
		$this->assertMeasurementEquals($base->convertTo(UnitMass::nanograms()), 1.0 / 1E-12, $base, "nanograms");
		$this->assertMeasurementEquals($base->convertTo(UnitMass::picograms()), 1.0 / 1E-15, $base, "picograms");
		$this->assertMeasurementEquals($base->convertTo(UnitMass::ounces()), 1.0 / 0.0283495, $base, "ounces");
		$this->assertMeasurementEquals($base->convertTo(UnitMass::ouncesTroy()), 1.0 / 0.03110348, $base, "ounces Troy");
		$this->assertMeasurementEquals($base->convertTo(UnitMass::pounds()), 1.0 / 0.453592, $base, "pounds");
		$this->assertMeasurementEquals($base->convertTo(UnitMass::stones()), 1.0 / 0.157473, $base, "stones");
		$this->assertMeasurementEquals($base->convertTo(UnitMass::metricTons()), 1.0 / 1000, $base, "metric tons");
		$this->assertMeasurementEquals($base->convertTo(UnitMass::shortTons()), 1.0 / 907.185, $base, "short tons");
		$this->assertMeasurementEquals($base->convertTo(UnitMass::carats()), 1.0 / 0.0002, $base, "carats");
		$this->assertMeasurementEquals($base->convertTo(UnitMass::slugs()), 1.0 / 14.5939, $base, "slugs");
	}

}