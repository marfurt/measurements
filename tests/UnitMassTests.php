<?php namespace Tests;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitMass;

class UnitMassTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_defines_kilograms_as_base_unit()
	{
		$this->assertTrue(UnitMass::baseUnit() == UnitMass::kilograms(), "Mass should define kilograms as its base unit.");
	}

	/** @test */
	public function it_converts_masses()
	{
		$base = new Measurement(1, UnitMass::baseUnit());

		$kilograms = $base->convertTo(UnitMass::kilograms());
		$grams = $base->convertTo(UnitMass::grams());
		$decigrams = $base->convertTo(UnitMass::decigrams());
		$centigrams = $base->convertTo(UnitMass::centigrams());
		$milligrams = $base->convertTo(UnitMass::milligrams());
		$micrograms = $base->convertTo(UnitMass::micrograms());
		$nanograms = $base->convertTo(UnitMass::nanograms());
		$picograms = $base->convertTo(UnitMass::picograms());
		$ounces = $base->convertTo(UnitMass::ounces());
		$pounds = $base->convertTo(UnitMass::pounds());
		$stones = $base->convertTo(UnitMass::stones());
		$metricTons = $base->convertTo(UnitMass::metricTons());
		$shortTons = $base->convertTo(UnitMass::shortTons());
		$carats = $base->convertTo(UnitMass::carats());
		$ouncesTroy = $base->convertTo(UnitMass::ouncesTroy());
		$slugs = $base->convertTo(UnitMass::slugs());

		$this->assertTrue($kilograms->value() == 1, "{$base} converted to kilograms should be equal to 1 kg instead of {$kilograms}.");
		$this->assertTrue($grams->value() == 1000, "{$base} converted to grams should be equal to 1000 g instead of {$grams}.");
		$this->assertTrue($decigrams->value() == 10000, "{$base} converted to decigrams should be equal to 10000 dg instead of {$decigrams}.");
		$this->assertTrue($centigrams->value() == 1.0 / 1E-5, "{$base} converted to centigrams should be equal to 100000 cg instead of {$centigrams}.");
		$this->assertTrue($milligrams->value() == 1.0 / 1E-6, "{$base} converted to milligrams should be equal to 1000000 mg instead of {$milligrams}.");
		$this->assertTrue($micrograms->value() == 1.0 / 1E-9, "{$base} converted to micrograms should be equal to 1E+9 µg instead of {$micrograms}.");
		$this->assertTrue($nanograms->value() == 1.0 / 1E-12, "{$base} converted to nanograms should be equal to 1E+12 ng instead of {$nanograms}.");
		$this->assertTrue($picograms->value() == 1.0 / 1E-15, "{$base} converted to picograms should be equal to 1E+15 pg instead of {$picograms}.");
		$this->assertTrue($ounces->value() == 1.0 / 0.0283495, "{$base} converted to $ounces should be equal to 35.273990723 oz instead of {$ounces}.");
		$this->assertTrue($pounds->value() == 1.0 / 0.453592, "{$base} converted to $pounds should be equal to 2.2046244202 lb instead of {$pounds}.");
		$this->assertTrue($stones->value() == 1.0 / 0.157473, "{$base} converted to $stones should be equal to 6.3502949712 st instead of {$stones}.");
		$this->assertTrue($metricTons->value() == 1.0 / 1000, "{$base} converted to $metricTons should be equal to 0.001 t instead of {$metricTons}.");
		$this->assertTrue($shortTons->value() == 1.0 / 907.185, "{$base} converted to $shortTons should be equal to 0.001102310995 ton instead of {$shortTons}.");
		$this->assertTrue($carats->value() == 1.0 / 0.0002, "{$base} converted to $carats should be equal to 5 000 ct instead of {$carats}.");
		$this->assertTrue($ouncesTroy->value() == 1.0 / 0.03110348, "{$base} converted to $ouncesTroy should be equal to 32.150743261 oz t instead of {$ouncesTroy}.");
		$this->assertTrue($slugs->value() == 1.0 / 14.5939, "{$base} converted to $slugs should be equal to 0.06852177965 sg instead of {$slugs}.");
	}

}