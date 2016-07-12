<?php namespace Tests;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitLength;
use Measurements\Units\UnitDuration;
use Measurements\Quantities\Length;
use Measurements\Converters\UnitConverterLinear;

class ConversionTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_checks_converter_linearity()
	{
		$coefficient = 7.0;
        $baseUnitConverter = new UnitConverterLinear($coefficient);

        $this->assertEquals($baseUnitConverter->valueFromBaseUnitValue($coefficient), 1.0, "Linear conversion from base unit is not linear.");
        $this->assertEquals($baseUnitConverter->baseUnitValueFromValue(1), $coefficient, "Linear conversion to base unit is not linear.");
	}

	/** @test */
	public function it_checks_whether_a_measurement_can_be_converted_to_a_different_unit()
	{
		$meters = new Measurement(42, UnitLength::meters());

		$this->assertTrue($meters->canBeConvertedToUnit(UnitLength::centimeters()), "Meters should be convertible in centimeters.");
		$this->assertFalse($meters->canBeConvertedToUnit(UnitDuration::hours()), "Meters should not be convertible in hours (non length unit).");
	}

	/** @test */
	public function it_converts_a_measurement_to_a_different_unit()
	{
		$meters = new Measurement(42, UnitLength::meters());

		$centimeters = $meters->convertTo(UnitLength::centimeters());

		$this->assertEquals($centimeters->value(), 100 * $meters->value(), "{$meters} converted to centimeters should be equal to 4200 cm instead of {$centimeters}.");
	}

	/** @test */
	public function it_converts_a_measurement_to_a_different_unit_using_short_syntax()
	{
		$meters = new Length(42, UnitLength::meters());

		$centimeters = $meters->convertTo(UnitLength::centimeters());

		$this->assertEquals($meters->toCentimeters(), $centimeters, "A measurement should be converted using the short syntax.");
	}

	/** @test */
	public function short_syntax_conversion_is_available_on_measurement_subclasses_only()
	{
		$meters = new Measurement(42, UnitLength::meters());

		$this->expectException(\BadMethodCallException::class);

		$invalid = $meters->toCentimeters();
	}

}