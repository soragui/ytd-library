<?php

namespace Ytd\Library\Exception;

/**
 * Wrong password.
 */
class WrongPasswordException extends YtdLibraryException
{
    /**
     * Error message.
     * @var string
     */
    protected $message = 'Wrong password.';
}
