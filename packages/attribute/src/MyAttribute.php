<?php
declare(strict_types=1);

namespace PUT\Attribute;

#[\Attribute(\Attribute::TARGET_CLASS)]
class MyAttribute {

	public function __construct(public readonly AttributeParameters $parameters) {
	}
}
