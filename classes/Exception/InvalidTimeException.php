<?php

namespace Ytd\Library\Exception;

/**
 * Invalid time.
 */
class InvalidTimeException extends YtdLibraryException
{

    /**
     * InvalidTimeException constructor.
     * @param string $time Invalid time
     */
    public function __construct(string $time)
    {
        parent::__construct('Invalid time: ' . $time);
    }
}
