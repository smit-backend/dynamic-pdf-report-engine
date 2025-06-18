<?php

return [
    'enabled' => env('DYNAMIC_PDF_REPORT_ENGINE_ENABLED', true),
    'timeout' => env('DYNAMIC_PDF_REPORT_ENGINE_TIMEOUT', 30),
    'log_channel' => env('DYNAMIC_PDF_REPORT_ENGINE_LOG', 'stack'),
];
