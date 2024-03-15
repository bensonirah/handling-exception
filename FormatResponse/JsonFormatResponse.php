<?php

namespace Tounaf\ExceptionBundle\FormatResponse;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class JsonFormatResponse implements FormatResponseInterface
{
    /**
     * @var    array $data
     * @return Response
     */
    public function render(array $data): Response
    {
        return new JsonResponse($data);
    }

    /**
     * @var    string $format
     * @return bool
     */
    public function supportsFormat(string $format): bool
    {
        return $format === 'json';
    }

}
