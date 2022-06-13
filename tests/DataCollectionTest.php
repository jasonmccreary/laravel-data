
// Da
uses(TestCase::class);
tasets
dataset('arrayAccessCollections', function () {
    yield "array" => [
        fn () => SimpleData::collection([
            'A', 'B', SimpleData::from('C'), SimpleData::from('D'),
        ]),
    ];

    yield "collection" => [
        fn () => SimpleData::collection([
            'A', 'B', SimpleData::from('C'), SimpleData::from('D'),
        ]),
    ];

    yield "paginator" => [
        fn () => SimpleData::collection(new LengthAwarePaginator([
            'A', 'B', SimpleData::from('C'), SimpleData::from('D'),
        ], 4, 15)),
    ];

    yield "cursor paginator" => [
        fn () => SimpleData::collection(new CursorPaginator([
            'A', 'B', SimpleData::from('C'), SimpleData::from('D'),
        ], 4)),
    ];
});
