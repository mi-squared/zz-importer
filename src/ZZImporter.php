<?php


namespace Mi2\ZZImport;

use Mi2\Import\Interfaces\ImporterServiceInterface;
use Mi2\Import\Models\Batch;
use Mi2\Import\Models\Response;
use Mi2\Import\Traits\InteractsWithLogger;

class ZZImporter implements ImporterServiceInterface
{
    use InteractsWithLogger;

    protected $count = 0;
    protected $columns = [];

    /**
     * We only support zz (imaginary extension)
     *
     * @param $extension
     * @return bool
     */
    public function supports($extension)
    {
        if ($extension == 'zz') {
            return true;
        }

        return false;
    }

    public function setup(Batch $batch):bool
    {
        // TODO: Implement setup() method.
    }

    public function validate()
    {
        // TODO: Implement validate() method.
    }

    public function validateUploadFile($file)
    {
        // TODO: Implement validateUploadFile() method.
    }

    public function getValidationMessages()
    {
        // TODO: Implement getValidationMessages() method.
    }

    public function import()
    {
        // TODO: Implement import() method.
    }
}
