<?php namespace Tests\Units;

use PHPUnit\Framework\TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitDuration;

class UnitDurationTests extends TestCase {

	use InteractsWithUnits;

	/** @test */
	public function it_defines_seconds_as_base_unit()
	{
		$this->assertTrue(UnitDuration::baseUnit() == UnitDuration::seconds(), "Duration should define seconds as its base unit.");
	}

	/** @test */
	public function it_converts_durations()
	{
		$base = new Measurement(3600, UnitDuration::baseUnit());

		$this->assertMeasurementEquals($base->convertTo(UnitDuration::seconds()), 3600, $base, "seconds");
		$this->assertMeasurementEquals($base->convertTo(UnitDuration::minutes()), 60, $base, "minutes");
		$this->assertMeasurementEquals($base->convertTo(UnitDuration::hours()), 1, $base, "hours");
	}

}