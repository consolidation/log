<?php
namespace Consolidation\Log;

/**
 * Additional log levels for use in Console applications.
 *
 * ConsoleLogLevels may be used by methods of Symfony Command
 * in applications where it is known that the Consolidation logger
 * is in use.  These log levels provide access to the 'success'
 * styled output method.
 *
 * All ConsoleLogLevels should be interpreted as LogLevel\NOTICE.
 *
 * @author Greg Anderson <greg.1.anderson@greenknowe.org>
 */
class ConsoleLogLevel extends \Psr\Log\LogLevel
{
    /**
     * Command successfully completed some operation.
     * Displayed at VERBOSITY_NORMAL.
     */
    const SUCCESS = 'notice';
}
