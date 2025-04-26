<?php

declare(strict_types=1);

namespace SmitBackend\DocForgePdf;

use SmitBackend\DocForgePdf\Contracts\PdfEngineInterface;

/**
 * Class PdfRenderer
 *
 * @package SmitBackend\DocForgePdf
 */
class PdfRenderer implements PdfEngineInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Primary lifecycle processing
        return array_merge($this->config, $payload);
    }
}
