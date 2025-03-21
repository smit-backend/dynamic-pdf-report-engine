<?php

declare(strict_types=1);

namespace SmitBackend\DocForgePdf\Contracts;

/**
 * Interface PdfEngineInterface
 *
 * @package SmitBackend\DocForgePdf
 */
interface PdfEngineInterface
{
    public function execute(array $payload = []): mixed;
}
