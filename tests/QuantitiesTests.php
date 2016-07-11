<?php namespace Tests;

use PHPUnit_Framework_TestCase;
use BadMethodCallException;
use Measurements\Measurement;
use Measurements\Units\UnitLength;
use Measurements\Units\UnitDuration;
use Measurements\Quantities\Length;
use Measurements\Quantities\Duration;
use Measurements\Exceptions\UnitException;

class QuantitiesTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_creates_quantities()
	{
		$length = new Length(42, UnitLength::meters());
		$duration = new Duration(42, UnitDuration::seconds());

		$this->assertTrue($length == '42 m', "Length should print <42 m>.");
		$this->assertTrue($duration == '42 sec', "Length should print <42 sec>.");
	}

	/** @test */
	public function creating_a_quantity_with_an_invalid_unit_throws_an_exception()
	{
		$this->setExpectedException(UnitException::class);

		$invalid = new Length(42, UnitDuration::hours());
	}

	/** @test */
	public function it_creates_quantities_using_proxy_method()
	{
		$measurement = new Measurement(42, UnitLength::meters());
		$length = new Length(42, UnitLength::meters());
		$meters = Length::meters(42);

		$this->assertNotNull($meters, "It should be possible to create a measurement using the short method.");
		$this->assertTrue($meters instanceof Length, "A length instance should be of type Measurement");
		$this->assertTrue($meters->isEqualTo($length), "Measurements <$meters> and <$length> should be equals.");
		$this->assertTrue($meters->isEqualTo($measurement), "Measurements <$meters> and <$measurement> should be equals.");
	}

	/** @test */
	public function creating_quantities_using_invalid_proxy_method_throws_an_exception()
	{
		$this->setExpectedException(BadMethodCallException::class);

		$invalid = Length::hours(42);
	}
}