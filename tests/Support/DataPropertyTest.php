
// Da
uses(TestCase::class);
tasets
dataset('correctAnnotations', function () {
    yield [
        'property' => 'propertyA',
        'expected' => SimpleData::class,
    ];

    yield [
        'property' => 'propertyB',
        'expected' => SimpleData::class,
    ];

    yield [
        'property' => 'propertyC',
        'expected' => SimpleData::class,
    ];

    yield [
        'property' => 'propertyD',
        'expected' => SimpleData::class,
    ];

    yield [
        'property' => 'propertyE',
        'expected' => SimpleData::class,
    ];

    yield [
        'property' => 'propertyF',
        'expected' => SimpleData::class,
    ];

    yield [
        'property' => 'propertyG',
        'expected' => SimpleData::class,
    ];

    yield [
        'property' => 'propertyH',
        'expected' => SimpleData::class,
    ];

    yield [
        'property' => 'propertyI',
        'expected' => SimpleData::class,
    ];

    yield [
        'property' => 'propertyJ',
        'expected' => SimpleData::class,
    ];

    yield [
        'property' => 'propertyK',
        'expected' => SimpleData::class,
    ];

    yield [
        'property' => 'propertyL',
        'expected' => SimpleData::class,
    ];
});

dataset('invalidAnnotations', function () {
    yield [
        'property' => 'propertyM',
    ];

    yield [
        'property' => 'propertyN',
    ];

    yield [
        'property' => 'propertyO',
    ];
});

// Helpers
function resolveHelper(object $class): DataProperty
{
    $reflectionProperty = new ReflectionProperty($class, 'property');

    return DataProperty::create($reflectionProperty);
}
