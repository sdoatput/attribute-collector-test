<?php
declare(strict_types=1);

use olvlvl\ComposerAttributeCollector\Attributes;
use PUT\Attribute\MyAttribute;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../vendor/attributes.php';

Attributes::findTargetClasses(MyAttribute::class);

echo "OK\n";
