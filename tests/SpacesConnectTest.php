<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class SpacesConnectTest extends TestCase {
	public function testCanBeCreated() {
		$this->assertInstanceOf(
			SpacesConnect::Class,
			new SpacesConnect('somesamplekey', 'somesamplesecret', 'somesamplename', 'somesampleregion')
		);
	}
}
