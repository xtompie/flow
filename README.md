# Flow

Flow is the way and helpers traits to help build rich collections which better describe business language.

Flow gives:
- separated definition from execution,
- named transformations using ubiquitous/business language,
- encapsulation,
- clean, more readable code.

Flow is immutable.

## Example

To illustrate, let's go through the various implementation options:

### Plain procedural

```php
<?php

$animals = ['rat', 'cat', 'lion', 'puma', 'dog'];

// alfabetic 
sort($animals);

// pets
$animalPets = [];
$pets = ['cat', 'dog', 'rat'];
foreach ($animals as $animal) {
    if (in_array($animal, $pets)) {
        $animalPets = $animal; 
    }
}
$animals = $animalPets;

// pretty
foreach ($animals as $index => $animal) {
    $animals[$index] = ucfirst($animal);
}

// first
print_r($animals->get());
```

### Using Flow

```php
<?php

use Xtompie\Flow\Flow;
use Xtompie\Flow\FlowFilter;
use Xtompie\Flow\FlowGet;
use Xtompie\Flow\FlowMap;
use Xtompie\Flow\FLowSort;

class Animals
{
    use Flow;
    use FlowFilter;
    use FlowGet;
    use FlowMap;
    use FLowSort;

    public function alfabetic()
    {
        return $this->sort();
    }
    
    public function pets()
    {
        $pets = ['cat', 'dog', 'rat']);
        return $this->filter(function($animal) use ($pets) {
            return in_array($animal, $pets);
        });
    }
    
    public function pretty()
    {
        return $this->map(function($animal) {
            return ucfirst($animal);
        });
    }
}

$animals = (new Animals(['rat', 'cat', 'lion', 'puma', 'dog']))
    ->alfabetic()
    ->pets()
    ->pretty()
;

print_r($animals->get());
```