<?php

namespace Tounaf\ExceptionBundle\FormatResponse;

use Symfony\Component\HttpFoundation\Response;

class HtmlFormatResponse implements FormatResponseInterface
{
    public function __construct()
    {

    }

    /**
     * @var    array $data
     * @return Response
     */
    public function render(array $data): Response
    {
        return new Response('Resource not found');
    }

    /**
     * @var    string $format
     * @return bool
     */
    public function supportsFormat(string $format): bool
    {
        return $format === 'html';
    }

}
