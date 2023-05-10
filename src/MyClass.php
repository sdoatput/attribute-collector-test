<?php
declare(strict_types=1);

namespace PUT\AttributeCollectorTest;

use PUT\Attribute\AttributeParameters;
use PUT\Attribute\MyAttribute;

#[MyAttribute(new AttributeParameters('test'))]
class MyClass {

}
