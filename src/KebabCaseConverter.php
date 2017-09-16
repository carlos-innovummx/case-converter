<?php

namespace CaseConverter;

class KebabCaseConverter implements TypeCase
{
    use LowersArrays;

    public function split(string $input): array
    {
        $words = explode('-', $input);

        $this->lowerArray($words);

        return $words;
    }

    public function join(array $parsed): string
    {
        // TODO: Implement join() method.
    }
}