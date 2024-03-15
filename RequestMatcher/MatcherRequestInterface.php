<?php

namespace Tounaf\Exception\RequestMatcher;

use Symfony\Component\HttpFoundation\Request;

interface MatcherRequestInterface
{
    /**
     * @var Request $request
     * @return bool
     */
    public function match(Request $request): bool;
}
