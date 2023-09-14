<?php

namespace Ytd\Library\Exception;

/**
 * Could not open popen stream.
 */
class PopenStreamException extends YtdLibraryException
{
    /**
     * Error message.
     * @var string
     */
    protected $message = 'Could not open popen stream.';
}
