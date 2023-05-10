<?php
declare(strict_types=1);

namespace PUT\Attribute;

class AttributeParameters {

	public function __construct(public readonly string $value) {
	}

	public static function __set_state(array $an_array): self {
		return new self($an_array['value']);
	}
}
