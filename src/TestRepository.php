<?php
declare(strict_types = 1);

final class TestRepository
{
    public function __construct(array $collection)
    {
        array_walk(
            $collection,
            function (array $item) {
                return;
            }
        );
    }
}
