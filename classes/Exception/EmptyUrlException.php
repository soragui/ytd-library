<?php

/**
 * EmptyUrlException class.
 */

namespace Ytd\Library\Exception;

/**
 * Exception thrown when youtube-dl returns an empty URL.
 */
class EmptyUrlException extends YtdLibraryException
{
    /**
     * Error message.
     * @var string
     */
    protected $message = 'youtube-dl returned an empty URL.';
}
