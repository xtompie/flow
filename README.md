Flow
====

Flow collection

1. Plain php
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
reset($animals);
echo current($animals);
```

2. With Illuminate Collections

```php
<?php

$pets = collect(['cat', 'dog', 'rat']);
$animals = collec(['rat', 'cat', 'lion', 'puma', 'dog'])
    // alfabetic
    ->sort()
    // only pets
    ->filter(function($animal) use ($pets) {
        return $pets->contains($animal);
    })
    // pretty
    ->map(function($animal) {
        return ucfirst($animal);
    })
;

echo $animals->first();
```

3. With flow
- separated definition from execution
- named transformations using ubiquitous/business language
- encapsulation
- clean, more readable code

```php
<?php

class Animals
{
    use Flow;
    use FlowMap;
    use FLowPublicFirst;
    use FLowSort;

    public function alfabetic()
    {
        return $this->sort();
    }
    
    public function pets()
    {
        $pets = collect(['cat', 'dog', 'rat']);
        return $this->filter(function($animal) use ($pets) {
            return $pets->contains($animal);
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

echo $animals->first();
```