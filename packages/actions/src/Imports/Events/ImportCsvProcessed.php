<?php

namespace Filament\Actions\Imports\Events;

use Filament\Actions\Imports\Models\Import;
use Illuminate\Foundation\Events\Dispatchable;
use Throwable;

class ImportCsvProcessed
{
    use Dispatchable;

    /**
     * @param  array<Throwable>  $exceptions
     */
    public function __construct(
        protected Import $import,
        protected int $processedRows,
        protected int $successfulRows,
        protected array $exceptions,
    ) {}

    public function getImport(): Import
    {
        return $this->import;
    }

    /**
     * @return int
     */
    public function getProcessedRows(): int
    {
        return $this->processedRows;
    }

    /**
     * @return int
     */
    public function getSuccessfulRows(): int
    {
        return $this->successfulRows;
    }

    /**
     * @return array<Throwable>
     */
    public function getExceptions(): array
    {
        return $this->exceptions;
    }
}
