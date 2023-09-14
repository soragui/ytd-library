<?php

namespace Ytd\Library\Exception;

/**
 * Conversion of playlists is not supported.
 */
class PlaylistConversionException extends YtdLibraryException
{
    /**
     * Error message.
     * @var string
     */
    protected $message = 'Conversion of playlists is not supported.';
}
