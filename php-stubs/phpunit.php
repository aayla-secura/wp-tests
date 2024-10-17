<?php

namespace PHPUnit\Event;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This interface is not covered by the backward compatibility promise for PHPUnit
 */
interface Dispatcher
{
    /**
     * @throws UnknownEventTypeException
     */
    public function dispatch(\PHPUnit\Event\Event $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This interface is not covered by the backward compatibility promise for PHPUnit
 */
interface SubscribableDispatcher extends \PHPUnit\Event\Dispatcher
{
    /**
     * @throws UnknownSubscriberTypeException
     */
    public function registerSubscriber(\PHPUnit\Event\Subscriber $subscriber) : void;
    public function registerTracer(\PHPUnit\Event\Tracer\Tracer $tracer) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class DeferringDispatcher implements \PHPUnit\Event\SubscribableDispatcher
{
    public function __construct(\PHPUnit\Event\SubscribableDispatcher $dispatcher)
    {
    }
    public function registerTracer(\PHPUnit\Event\Tracer\Tracer $tracer) : void
    {
    }
    public function registerSubscriber(\PHPUnit\Event\Subscriber $subscriber) : void
    {
    }
    public function dispatch(\PHPUnit\Event\Event $event) : void
    {
    }
    public function flush() : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class DirectDispatcher implements \PHPUnit\Event\SubscribableDispatcher
{
    public function __construct(\PHPUnit\Event\TypeMap $map)
    {
    }
    public function registerTracer(\PHPUnit\Event\Tracer\Tracer $tracer) : void
    {
    }
    /**
     * @throws MapError
     * @throws UnknownSubscriberTypeException
     */
    public function registerSubscriber(\PHPUnit\Event\Subscriber $subscriber) : void
    {
    }
    /**
     * @throws Throwable
     * @throws UnknownEventTypeException
     */
    public function dispatch(\PHPUnit\Event\Event $event) : void
    {
    }
    /**
     * @throws Throwable
     */
    public function handleThrowable(\Throwable $t) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CollectingDispatcher implements \PHPUnit\Event\Dispatcher
{
    public function __construct()
    {
    }
    public function dispatch(\PHPUnit\Event\Event $event) : void
    {
    }
    public function flush() : \PHPUnit\Event\EventCollection
    {
    }
}
namespace PHPUnit;

interface Exception extends \Throwable
{
}
namespace PHPUnit\Event;

interface Exception extends \PHPUnit\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class UnknownEventTypeException extends \RuntimeException implements \PHPUnit\Event\Exception
{
}
namespace PHPUnit\Event\Test;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class NoComparisonFailureException extends \RuntimeException implements \PHPUnit\Event\Exception
{
}
namespace PHPUnit\Event;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class UnknownSubscriberTypeException extends \RuntimeException implements \PHPUnit\Event\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class InvalidSubscriberException extends \RuntimeException implements \PHPUnit\Event\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class UnknownEventException extends \RuntimeException implements \PHPUnit\Event\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class RuntimeException extends \RuntimeException implements \PHPUnit\Event\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class UnknownSubscriberException extends \RuntimeException implements \PHPUnit\Event\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class NoPreviousThrowableException extends \RuntimeException implements \PHPUnit\Event\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class InvalidEventException extends \RuntimeException implements \PHPUnit\Event\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class MapError extends \RuntimeException implements \PHPUnit\Event\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class SubscriberTypeAlreadyRegisteredException extends \RuntimeException implements \PHPUnit\Event\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class InvalidArgumentException extends \InvalidArgumentException implements \PHPUnit\Event\Exception
{
}
namespace PHPUnit\Event\TestData;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class NoDataSetFromDataProviderException extends \RuntimeException implements \PHPUnit\Event\Exception
{
}
namespace PHPUnit\Event;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class EventAlreadyAssignedException extends \RuntimeException implements \PHPUnit\Event\Exception
{
}
namespace PHPUnit\Event\Code;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class NoTestCaseObjectOnCallStackException extends \RuntimeException implements \PHPUnit\Event\Exception
{
    public function __construct()
    {
    }
}
namespace PHPUnit\Event;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class EventFacadeIsSealedException extends \RuntimeException implements \PHPUnit\Event\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface Subscriber
{
}
namespace PHPUnit\Event\TestSuite;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface FilteredSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\TestSuite\Filtered $event) : void;
}
namespace PHPUnit\Event;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface Event
{
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info;
    public function asString() : string;
}
namespace PHPUnit\Event\TestSuite;

/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Loaded implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\TestSuite\TestSuite $testSuite)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function testSuite() : \PHPUnit\Event\TestSuite\TestSuite
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface FinishedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\TestSuite\Finished $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Finished implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\TestSuite\TestSuite $testSuite)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function testSuite() : \PHPUnit\Event\TestSuite\TestSuite
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface StartedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\TestSuite\Started $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface SkippedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\TestSuite\Skipped $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface LoadedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\TestSuite\Loaded $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Sorted implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, int $executionOrder, int $executionOrderDefects, bool $resolveDependencies)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function executionOrder() : int
    {
    }
    public function executionOrderDefects() : int
    {
    }
    public function resolveDependencies() : bool
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Filtered implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\TestSuite\TestSuite $testSuite)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function testSuite() : \PHPUnit\Event\TestSuite\TestSuite
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Started implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\TestSuite\TestSuite $testSuite)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function testSuite() : \PHPUnit\Event\TestSuite\TestSuite
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Skipped implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\TestSuite\TestSuite $testSuite, string $message)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function testSuite() : \PHPUnit\Event\TestSuite\TestSuite
    {
    }
    public function message() : string
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface SortedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\TestSuite\Sorted $event) : void;
}
namespace PHPUnit\Event;

/**
 * @template-implements Iterator<int, Event>
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class EventCollectionIterator implements \Iterator
{
    public function __construct(\PHPUnit\Event\EventCollection $events)
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\Event\Event
    {
    }
    public function next() : void
    {
    }
}
namespace PHPUnit\Event\Application;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface FinishedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Application\Finished $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Finished implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, int $shellExitCode)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function shellExitCode() : int
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface StartedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Application\Started $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Started implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\Runtime\Runtime $runtime)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function runtime() : \PHPUnit\Event\Runtime\Runtime
    {
    }
    public function asString() : string
    {
    }
}
namespace PHPUnit\Event\TestRunner;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface DeprecationTriggeredSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\TestRunner\DeprecationTriggered $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ExtensionBootstrapped implements \PHPUnit\Event\Event
{
    /**
     * @param class-string          $className
     * @param array<string, string> $parameters
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, string $className, array $parameters)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    /**
     * @return array<string, string>
     */
    public function parameters() : array
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface ExecutionAbortedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\TestRunner\ExecutionAborted $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class EventFacadeSealed implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface GarbageCollectionDisabledSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\TestRunner\GarbageCollectionDisabled $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface ExecutionStartedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\TestRunner\ExecutionStarted $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface EventFacadeSealedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\TestRunner\EventFacadeSealed $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface ExecutionFinishedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\TestRunner\ExecutionFinished $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ExecutionStarted implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\TestSuite\TestSuite $testSuite)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function testSuite() : \PHPUnit\Event\TestSuite\TestSuite
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface ExtensionLoadedFromPharSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\TestRunner\ExtensionLoadedFromPhar $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface FinishedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\TestRunner\Finished $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Finished implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface StartedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\TestRunner\Started $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface ConfiguredSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\TestRunner\Configured $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface GarbageCollectionTriggeredSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\TestRunner\GarbageCollectionTriggered $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Configured implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\TextUI\Configuration\Configuration $configuration)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function configuration() : \PHPUnit\TextUI\Configuration\Configuration
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class GarbageCollectionDisabled implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface GarbageCollectionEnabledSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\TestRunner\GarbageCollectionEnabled $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ExecutionFinished implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface BootstrapFinishedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\TestRunner\BootstrapFinished $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class BootstrapFinished implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, string $filename)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function filename() : string
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class WarningTriggered implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, string $message)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function message() : string
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface WarningTriggeredSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\TestRunner\WarningTriggered $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Started implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ExecutionAborted implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class GarbageCollectionTriggered implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ExtensionLoadedFromPhar implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, string $filename, string $name, string $version)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function filename() : string
    {
    }
    public function name() : string
    {
    }
    public function version() : string
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface ExtensionBootstrappedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\TestRunner\ExtensionBootstrapped $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class GarbageCollectionEnabled implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class DeprecationTriggered implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, string $message)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function message() : string
    {
    }
    public function asString() : string
    {
    }
}
namespace PHPUnit\Event;

/**
 * @template-implements IteratorAggregate<int, Event>
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class EventCollection implements \Countable, \IteratorAggregate
{
    public function add(\PHPUnit\Event\Event ...$events) : void
    {
    }
    /**
     * @return list<Event>
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function isEmpty() : bool
    {
    }
    public function isNotEmpty() : bool
    {
    }
    public function getIterator() : \PHPUnit\Event\EventCollectionIterator
    {
    }
}
namespace PHPUnit\Event\Test;

/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class PrintedUnexpectedOutput implements \PHPUnit\Event\Event
{
    /**
     * @param non-empty-string $output
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, string $output)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    /**
     * @return non-empty-string
     */
    public function output() : string
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface PrintedUnexpectedOutputSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\PrintedUnexpectedOutput $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface PhpunitErrorTriggeredSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\PhpunitErrorTriggered $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface DeprecationTriggeredSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\DeprecationTriggered $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class PhpDeprecationTriggered implements \PHPUnit\Event\Event
{
    /**
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline, bool $ignoredByTest, \PHPUnit\Event\Code\IssueTrigger\IssueTrigger $trigger)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function test() : \PHPUnit\Event\Code\Test
    {
    }
    /**
     * @return non-empty-string
     */
    public function message() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function file() : string
    {
    }
    /**
     * @return positive-int
     */
    public function line() : int
    {
    }
    public function wasSuppressed() : bool
    {
    }
    public function ignoredByBaseline() : bool
    {
    }
    public function ignoredByTest() : bool
    {
    }
    public function trigger() : \PHPUnit\Event\Code\IssueTrigger\IssueTrigger
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class PhpNoticeTriggered implements \PHPUnit\Event\Event
{
    /**
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function test() : \PHPUnit\Event\Code\Test
    {
    }
    /**
     * @return non-empty-string
     */
    public function message() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function file() : string
    {
    }
    /**
     * @return positive-int
     */
    public function line() : int
    {
    }
    public function wasSuppressed() : bool
    {
    }
    public function ignoredByBaseline() : bool
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class PhpunitWarningTriggered implements \PHPUnit\Event\Event
{
    /**
     * @param non-empty-string $message
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\Code\Test $test, string $message)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function test() : \PHPUnit\Event\Code\Test
    {
    }
    /**
     * @return non-empty-string
     */
    public function message() : string
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface ErrorTriggeredSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\ErrorTriggered $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface ConsideredRiskySubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\ConsideredRisky $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface NoticeTriggeredSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\NoticeTriggered $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ErrorTriggered implements \PHPUnit\Event\Event
{
    /**
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\Code\Test $test, string $message, string $file, int $line, bool $suppressed)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function test() : \PHPUnit\Event\Code\Test
    {
    }
    /**
     * @return non-empty-string
     */
    public function message() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function file() : string
    {
    }
    /**
     * @return positive-int
     */
    public function line() : int
    {
    }
    public function wasSuppressed() : bool
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class PhpWarningTriggered implements \PHPUnit\Event\Event
{
    /**
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function test() : \PHPUnit\Event\Code\Test
    {
    }
    /**
     * @return non-empty-string
     */
    public function message() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function file() : string
    {
    }
    /**
     * @return positive-int
     */
    public function line() : int
    {
    }
    public function wasSuppressed() : bool
    {
    }
    public function ignoredByBaseline() : bool
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface PhpNoticeTriggeredSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\PhpNoticeTriggered $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface PhpDeprecationTriggeredSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\PhpDeprecationTriggered $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class WarningTriggered implements \PHPUnit\Event\Event
{
    /**
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function test() : \PHPUnit\Event\Code\Test
    {
    }
    /**
     * @return non-empty-string
     */
    public function message() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function file() : string
    {
    }
    /**
     * @return positive-int
     */
    public function line() : int
    {
    }
    public function wasSuppressed() : bool
    {
    }
    public function ignoredByBaseline() : bool
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ConsideredRisky implements \PHPUnit\Event\Event
{
    /**
     * @param non-empty-string $message
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\Code\Test $test, string $message)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function test() : \PHPUnit\Event\Code\Test
    {
    }
    /**
     * @return non-empty-string
     */
    public function message() : string
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface WarningTriggeredSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\WarningTriggered $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class PhpunitDeprecationTriggered implements \PHPUnit\Event\Event
{
    /**
     * @param non-empty-string $message
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\Code\Test $test, string $message)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function test() : \PHPUnit\Event\Code\Test
    {
    }
    /**
     * @return non-empty-string
     */
    public function message() : string
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class PhpunitErrorTriggered implements \PHPUnit\Event\Event
{
    /**
     * @param non-empty-string $message
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\Code\Test $test, string $message)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function test() : \PHPUnit\Event\Code\Test
    {
    }
    /**
     * @return non-empty-string
     */
    public function message() : string
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface PhpunitDeprecationTriggeredSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\PhpunitDeprecationTriggered $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface PhpWarningTriggeredSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\PhpWarningTriggered $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface PhpunitWarningTriggeredSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\PhpunitWarningTriggered $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class NoticeTriggered implements \PHPUnit\Event\Event
{
    /**
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function test() : \PHPUnit\Event\Code\Test
    {
    }
    /**
     * @return non-empty-string
     */
    public function message() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function file() : string
    {
    }
    /**
     * @return positive-int
     */
    public function line() : int
    {
    }
    public function wasSuppressed() : bool
    {
    }
    public function ignoredByBaseline() : bool
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class DeprecationTriggered implements \PHPUnit\Event\Event
{
    /**
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline, bool $ignoredByTest, \PHPUnit\Event\Code\IssueTrigger\IssueTrigger $trigger)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function test() : \PHPUnit\Event\Code\Test
    {
    }
    /**
     * @return non-empty-string
     */
    public function message() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function file() : string
    {
    }
    /**
     * @return positive-int
     */
    public function line() : int
    {
    }
    public function wasSuppressed() : bool
    {
    }
    public function ignoredByBaseline() : bool
    {
    }
    public function ignoredByTest() : bool
    {
    }
    public function trigger() : \PHPUnit\Event\Code\IssueTrigger\IssueTrigger
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class PartialMockObjectCreated implements \PHPUnit\Event\Event
{
    /**
     * @param class-string $className
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, string $className, string ...$methodNames)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    /**
     * @return list<string>
     */
    public function methodNames() : array
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestStubForIntersectionOfInterfacesCreated implements \PHPUnit\Event\Event
{
    /**
     * @param list<class-string> $interfaces
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, array $interfaces)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    /**
     * @return list<class-string>
     */
    public function interfaces() : array
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestStubCreated implements \PHPUnit\Event\Event
{
    /**
     * @param class-string $className
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, string $className)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class MockObjectForIntersectionOfInterfacesCreated implements \PHPUnit\Event\Event
{
    /**
     * @param list<class-string> $interfaces
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, array $interfaces)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    /**
     * @return list<class-string>
     */
    public function interfaces() : array
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class MockObjectCreated implements \PHPUnit\Event\Event
{
    /**
     * @param class-string $className
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, string $className)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface MockObjectForIntersectionOfInterfacesCreatedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\MockObjectForIntersectionOfInterfacesCreated $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface TestStubForIntersectionOfInterfacesCreatedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\TestStubForIntersectionOfInterfacesCreated $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface PartialMockObjectCreatedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\PartialMockObjectCreated $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface MockObjectCreatedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\MockObjectCreated $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface TestStubCreatedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\TestStubCreated $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class MarkedIncomplete implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\Code\Test $test, \PHPUnit\Event\Code\Throwable $throwable)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function test() : \PHPUnit\Event\Code\Test
    {
    }
    public function throwable() : \PHPUnit\Event\Code\Throwable
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface MarkedIncompleteSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\MarkedIncomplete $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Failed implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\Code\Test $test, \PHPUnit\Event\Code\Throwable $throwable, ?\PHPUnit\Event\Code\ComparisonFailure $comparisonFailure)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function test() : \PHPUnit\Event\Code\Test
    {
    }
    public function throwable() : \PHPUnit\Event\Code\Throwable
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->comparisonFailure
     */
    public function hasComparisonFailure() : bool
    {
    }
    /**
     * @throws NoComparisonFailureException
     */
    public function comparisonFailure() : \PHPUnit\Event\Code\ComparisonFailure
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface PassedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\Passed $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface FailedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\Failed $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Errored implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\Code\Test $test, \PHPUnit\Event\Code\Throwable $throwable)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function test() : \PHPUnit\Event\Code\Test
    {
    }
    public function throwable() : \PHPUnit\Event\Code\Throwable
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface SkippedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\Skipped $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface ErroredSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\Errored $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Skipped implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\Code\Test $test, string $message)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function test() : \PHPUnit\Event\Code\Test
    {
    }
    public function message() : string
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Passed implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\Code\Test $test)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function test() : \PHPUnit\Event\Code\Test
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class DataProviderMethodFinished implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\Code\ClassMethod $testMethod, \PHPUnit\Event\Code\ClassMethod ...$calledMethods)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function testMethod() : \PHPUnit\Event\Code\ClassMethod
    {
    }
    /**
     * @return list<Code\ClassMethod>
     */
    public function calledMethods() : array
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Prepared implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\Code\Test $test)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function test() : \PHPUnit\Event\Code\Test
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface PreparationFailedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\PreparationFailed $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class PreparationFailed implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\Code\Test $test)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function test() : \PHPUnit\Event\Code\Test
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface FinishedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\Finished $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Finished implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\Code\Test $test, int $numberOfAssertionsPerformed)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function test() : \PHPUnit\Event\Code\Test
    {
    }
    public function numberOfAssertionsPerformed() : int
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface PreparationStartedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\PreparationStarted $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class DataProviderMethodCalled implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\Code\ClassMethod $testMethod, \PHPUnit\Event\Code\ClassMethod $dataProviderMethod)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function testMethod() : \PHPUnit\Event\Code\ClassMethod
    {
    }
    public function dataProviderMethod() : \PHPUnit\Event\Code\ClassMethod
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class PreparationStarted implements \PHPUnit\Event\Event
{
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, \PHPUnit\Event\Code\Test $test)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    public function test() : \PHPUnit\Event\Code\Test
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface DataProviderMethodCalledSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\DataProviderMethodCalled $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface PreparedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\Prepared $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface DataProviderMethodFinishedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\DataProviderMethodFinished $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface ComparatorRegisteredSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\ComparatorRegistered $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface BeforeTestMethodFinishedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\BeforeTestMethodFinished $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class PreConditionCalled implements \PHPUnit\Event\Event
{
    /**
     * @param class-string $testClassName
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, string $testClassName, \PHPUnit\Event\Code\ClassMethod $calledMethod)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    /**
     * @return class-string
     */
    public function testClassName() : string
    {
    }
    public function calledMethod() : \PHPUnit\Event\Code\ClassMethod
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface BeforeFirstTestMethodFinishedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\BeforeFirstTestMethodFinished $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface BeforeFirstTestMethodErroredSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\BeforeFirstTestMethodErrored $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class BeforeFirstTestMethodErrored implements \PHPUnit\Event\Event
{
    /**
     * @param class-string $testClassName
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, string $testClassName, \PHPUnit\Event\Code\ClassMethod $calledMethod, \PHPUnit\Event\Code\Throwable $throwable)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    /**
     * @return class-string
     */
    public function testClassName() : string
    {
    }
    public function calledMethod() : \PHPUnit\Event\Code\ClassMethod
    {
    }
    public function throwable() : \PHPUnit\Event\Code\Throwable
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class PostConditionCalled implements \PHPUnit\Event\Event
{
    /**
     * @param class-string $testClassName
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, string $testClassName, \PHPUnit\Event\Code\ClassMethod $calledMethod)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    /**
     * @return class-string
     */
    public function testClassName() : string
    {
    }
    public function calledMethod() : \PHPUnit\Event\Code\ClassMethod
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class BeforeTestMethodFinished implements \PHPUnit\Event\Event
{
    /**
     * @param class-string $testClassName
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, string $testClassName, \PHPUnit\Event\Code\ClassMethod ...$calledMethods)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    /**
     * @return class-string
     */
    public function testClassName() : string
    {
    }
    /**
     * @return list<Code\ClassMethod>
     */
    public function calledMethods() : array
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class PostConditionFinished implements \PHPUnit\Event\Event
{
    /**
     * @param class-string $testClassName
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, string $testClassName, \PHPUnit\Event\Code\ClassMethod ...$calledMethods)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    /**
     * @return class-string
     */
    public function testClassName() : string
    {
    }
    /**
     * @return list<Code\ClassMethod>
     */
    public function calledMethods() : array
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class PreConditionFinished implements \PHPUnit\Event\Event
{
    /**
     * @param class-string $testClassName
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, string $testClassName, \PHPUnit\Event\Code\ClassMethod ...$calledMethods)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    /**
     * @return class-string
     */
    public function testClassName() : string
    {
    }
    /**
     * @return list<Code\ClassMethod>
     */
    public function calledMethods() : array
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class BeforeTestMethodCalled implements \PHPUnit\Event\Event
{
    /**
     * @param class-string $testClassName
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, string $testClassName, \PHPUnit\Event\Code\ClassMethod $calledMethod)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    /**
     * @return class-string
     */
    public function testClassName() : string
    {
    }
    public function calledMethod() : \PHPUnit\Event\Code\ClassMethod
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class BeforeFirstTestMethodFinished implements \PHPUnit\Event\Event
{
    /**
     * @param class-string $testClassName
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, string $testClassName, \PHPUnit\Event\Code\ClassMethod ...$calledMethods)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    /**
     * @return class-string
     */
    public function testClassName() : string
    {
    }
    /**
     * @return list<Code\ClassMethod>
     */
    public function calledMethods() : array
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class AfterTestMethodCalled implements \PHPUnit\Event\Event
{
    /**
     * @param class-string $testClassName
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, string $testClassName, \PHPUnit\Event\Code\ClassMethod $calledMethod)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    /**
     * @return class-string
     */
    public function testClassName() : string
    {
    }
    public function calledMethod() : \PHPUnit\Event\Code\ClassMethod
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface AfterLastTestMethodCalledSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\AfterLastTestMethodCalled $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface PostConditionFinishedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\PostConditionFinished $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class AfterLastTestMethodCalled implements \PHPUnit\Event\Event
{
    /**
     * @param class-string $testClassName
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, string $testClassName, \PHPUnit\Event\Code\ClassMethod $calledMethod)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    /**
     * @return class-string
     */
    public function testClassName() : string
    {
    }
    public function calledMethod() : \PHPUnit\Event\Code\ClassMethod
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface AfterTestMethodCalledSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\AfterTestMethodCalled $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface PreConditionFinishedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\PreConditionFinished $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface BeforeTestMethodCalledSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\BeforeTestMethodCalled $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class BeforeFirstTestMethodCalled implements \PHPUnit\Event\Event
{
    /**
     * @param class-string $testClassName
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, string $testClassName, \PHPUnit\Event\Code\ClassMethod $calledMethod)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    /**
     * @return class-string
     */
    public function testClassName() : string
    {
    }
    public function calledMethod() : \PHPUnit\Event\Code\ClassMethod
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface BeforeFirstTestMethodCalledSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\BeforeFirstTestMethodCalled $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface AfterTestMethodFinishedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\AfterTestMethodFinished $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class AfterLastTestMethodFinished implements \PHPUnit\Event\Event
{
    /**
     * @param class-string $testClassName
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, string $testClassName, \PHPUnit\Event\Code\ClassMethod ...$calledMethods)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    /**
     * @return class-string
     */
    public function testClassName() : string
    {
    }
    /**
     * @return list<Code\ClassMethod>
     */
    public function calledMethods() : array
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface PreConditionCalledSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\PreConditionCalled $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface PostConditionCalledSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\PostConditionCalled $event) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface AfterLastTestMethodFinishedSubscriber extends \PHPUnit\Event\Subscriber
{
    public function notify(\PHPUnit\Event\Test\AfterLastTestMethodFinished $event) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class AfterTestMethodFinished implements \PHPUnit\Event\Event
{
    /**
     * @param class-string $testClassName
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, string $testClassName, \PHPUnit\Event\Code\ClassMethod ...$calledMethods)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    /**
     * @return class-string
     */
    public function testClassName() : string
    {
    }
    /**
     * @return list<Code\ClassMethod>
     */
    public function calledMethods() : array
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ComparatorRegistered implements \PHPUnit\Event\Event
{
    /**
     * @param class-string $className
     */
    public function __construct(\PHPUnit\Event\Telemetry\Info $telemetryInfo, string $className)
    {
    }
    public function telemetryInfo() : \PHPUnit\Event\Telemetry\Info
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    public function asString() : string
    {
    }
}
namespace PHPUnit\Event\Tracer;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface Tracer
{
    public function trace(\PHPUnit\Event\Event $event) : void;
}
namespace PHPUnit\Event\TestSuite;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestSuiteBuilder
{
    /**
     * @throws RuntimeException
     */
    public static function from(\PHPUnit\Framework\TestSuite $testSuite) : \PHPUnit\Event\TestSuite\TestSuite
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract readonly class TestSuite
{
    /**
     * @param non-empty-string $name
     */
    public function __construct(string $name, int $size, \PHPUnit\Event\Code\TestCollection $tests)
    {
    }
    /**
     * @return non-empty-string
     */
    public function name() : string
    {
    }
    public function count() : int
    {
    }
    public function tests() : \PHPUnit\Event\Code\TestCollection
    {
    }
    /**
     * @phpstan-assert-if-true TestSuiteWithName $this
     */
    public function isWithName() : bool
    {
    }
    /**
     * @phpstan-assert-if-true TestSuiteForTestClass $this
     */
    public function isForTestClass() : bool
    {
    }
    /**
     * @phpstan-assert-if-true TestSuiteForTestMethodWithDataProvider $this
     */
    public function isForTestMethodWithDataProvider() : bool
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestSuiteForTestMethodWithDataProvider extends \PHPUnit\Event\TestSuite\TestSuite
{
    /**
     * @param non-empty-string $name
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public function __construct(string $name, int $size, \PHPUnit\Event\Code\TestCollection $tests, string $className, string $methodName, string $file, int $line)
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function methodName() : string
    {
    }
    public function file() : string
    {
    }
    public function line() : int
    {
    }
    public function isForTestMethodWithDataProvider() : true
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestSuiteForTestClass extends \PHPUnit\Event\TestSuite\TestSuite
{
    /**
     * @param class-string $name
     */
    public function __construct(string $name, int $size, \PHPUnit\Event\Code\TestCollection $tests, string $file, int $line)
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    public function file() : string
    {
    }
    public function line() : int
    {
    }
    public function isForTestClass() : true
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestSuiteWithName extends \PHPUnit\Event\TestSuite\TestSuite
{
    public function isWithName() : true
    {
    }
}
namespace PHPUnit\Event\Code;

/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Throwable
{
    /**
     * @param class-string $className
     */
    public function __construct(string $className, string $message, string $description, string $stackTrace, ?self $previous)
    {
    }
    /**
     * @throws NoPreviousThrowableException
     */
    public function asString() : string
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    public function message() : string
    {
    }
    public function description() : string
    {
    }
    public function stackTrace() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->previous
     */
    public function hasPrevious() : bool
    {
    }
    /**
     * @throws NoPreviousThrowableException
     */
    public function previous() : self
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ComparisonFailure
{
    public function __construct(string $expected, string $actual, string $diff)
    {
    }
    public function expected() : string
    {
    }
    public function actual() : string
    {
    }
    public function diff() : string
    {
    }
}
namespace PHPUnit\Event\Telemetry;

/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class HRTime
{
    /**
     * @throws InvalidArgumentException
     */
    public static function fromSecondsAndNanoseconds(int $seconds, int $nanoseconds) : self
    {
    }
    public function seconds() : int
    {
    }
    public function nanoseconds() : int
    {
    }
    public function duration(self $start) : \PHPUnit\Event\Telemetry\Duration
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This interface is not covered by the backward compatibility promise for PHPUnit
 */
interface GarbageCollectorStatusProvider
{
    public function status() : \PHPUnit\Event\Telemetry\GarbageCollectorStatus;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class SystemGarbageCollectorStatusProvider implements \PHPUnit\Event\Telemetry\GarbageCollectorStatusProvider
{
    public function status() : \PHPUnit\Event\Telemetry\GarbageCollectorStatus
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This interface is not covered by the backward compatibility promise for PHPUnit
 */
interface StopWatch
{
    public function current() : \PHPUnit\Event\Telemetry\HRTime;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @codeCoverageIgnore
 */
final class SystemStopWatchWithOffset implements \PHPUnit\Event\Telemetry\StopWatch
{
    public function __construct(\PHPUnit\Event\Telemetry\HRTime $offset)
    {
    }
    /**
     * @throws InvalidArgumentException
     */
    public function current() : \PHPUnit\Event\Telemetry\HRTime
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This interface is not covered by the backward compatibility promise for PHPUnit
 */
interface MemoryMeter
{
    public function memoryUsage() : \PHPUnit\Event\Telemetry\MemoryUsage;
    public function peakMemoryUsage() : \PHPUnit\Event\Telemetry\MemoryUsage;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class System
{
    public function __construct(\PHPUnit\Event\Telemetry\StopWatch $stopWatch, \PHPUnit\Event\Telemetry\MemoryMeter $memoryMeter, \PHPUnit\Event\Telemetry\GarbageCollectorStatusProvider $garbageCollectorStatusProvider)
    {
    }
    public function snapshot() : \PHPUnit\Event\Telemetry\Snapshot
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class SystemStopWatch implements \PHPUnit\Event\Telemetry\StopWatch
{
    /**
     * @throws InvalidArgumentException
     */
    public function current() : \PHPUnit\Event\Telemetry\HRTime
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class MemoryUsage
{
    public static function fromBytes(int $bytes) : self
    {
    }
    public function bytes() : int
    {
    }
    public function diff(self $other) : self
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class SystemMemoryMeter implements \PHPUnit\Event\Telemetry\MemoryMeter
{
    public function memoryUsage() : \PHPUnit\Event\Telemetry\MemoryUsage
    {
    }
    public function peakMemoryUsage() : \PHPUnit\Event\Telemetry\MemoryUsage
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class GarbageCollectorStatus
{
    public function __construct(int $runs, int $collected, int $threshold, int $roots, float $applicationTime, float $collectorTime, float $destructorTime, float $freeTime, bool $running, bool $protected, bool $full, int $bufferSize)
    {
    }
    public function runs() : int
    {
    }
    public function collected() : int
    {
    }
    public function threshold() : int
    {
    }
    public function roots() : int
    {
    }
    public function applicationTime() : float
    {
    }
    public function collectorTime() : float
    {
    }
    public function destructorTime() : float
    {
    }
    public function freeTime() : float
    {
    }
    public function isRunning() : bool
    {
    }
    public function isProtected() : bool
    {
    }
    public function isFull() : bool
    {
    }
    public function bufferSize() : int
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Snapshot
{
    public function __construct(\PHPUnit\Event\Telemetry\HRTime $time, \PHPUnit\Event\Telemetry\MemoryUsage $memoryUsage, \PHPUnit\Event\Telemetry\MemoryUsage $peakMemoryUsage, \PHPUnit\Event\Telemetry\GarbageCollectorStatus $garbageCollectorStatus)
    {
    }
    public function time() : \PHPUnit\Event\Telemetry\HRTime
    {
    }
    public function memoryUsage() : \PHPUnit\Event\Telemetry\MemoryUsage
    {
    }
    public function peakMemoryUsage() : \PHPUnit\Event\Telemetry\MemoryUsage
    {
    }
    public function garbageCollectorStatus() : \PHPUnit\Event\Telemetry\GarbageCollectorStatus
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Info
{
    public function __construct(\PHPUnit\Event\Telemetry\Snapshot $current, \PHPUnit\Event\Telemetry\Duration $durationSinceStart, \PHPUnit\Event\Telemetry\MemoryUsage $memorySinceStart, \PHPUnit\Event\Telemetry\Duration $durationSincePrevious, \PHPUnit\Event\Telemetry\MemoryUsage $memorySincePrevious)
    {
    }
    public function time() : \PHPUnit\Event\Telemetry\HRTime
    {
    }
    public function memoryUsage() : \PHPUnit\Event\Telemetry\MemoryUsage
    {
    }
    public function peakMemoryUsage() : \PHPUnit\Event\Telemetry\MemoryUsage
    {
    }
    public function durationSinceStart() : \PHPUnit\Event\Telemetry\Duration
    {
    }
    public function memoryUsageSinceStart() : \PHPUnit\Event\Telemetry\MemoryUsage
    {
    }
    public function durationSincePrevious() : \PHPUnit\Event\Telemetry\Duration
    {
    }
    public function memoryUsageSincePrevious() : \PHPUnit\Event\Telemetry\MemoryUsage
    {
    }
    public function garbageCollectorStatus() : \PHPUnit\Event\Telemetry\GarbageCollectorStatus
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Duration
{
    /**
     * @throws InvalidArgumentException
     */
    public static function fromSecondsAndNanoseconds(int $seconds, int $nanoseconds) : self
    {
    }
    public function seconds() : int
    {
    }
    public function nanoseconds() : int
    {
    }
    public function asFloat() : float
    {
    }
    public function asString() : string
    {
    }
    public function equals(self $other) : bool
    {
    }
    public function isLessThan(self $other) : bool
    {
    }
    public function isGreaterThan(self $other) : bool
    {
    }
}
namespace PHPUnit\Event\Runtime;

/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class PHPUnit
{
    public function __construct()
    {
    }
    public function versionId() : string
    {
    }
    public function releaseSeries() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class OperatingSystem
{
    public function __construct()
    {
    }
    public function operatingSystem() : string
    {
    }
    public function operatingSystemFamily() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class PHP
{
    public function __construct()
    {
    }
    public function version() : string
    {
    }
    public function sapi() : string
    {
    }
    public function majorVersion() : int
    {
    }
    public function minorVersion() : int
    {
    }
    public function releaseVersion() : int
    {
    }
    public function extraVersion() : string
    {
    }
    public function versionId() : int
    {
    }
    /**
     * @return list<string>
     */
    public function extensions() : array
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Runtime
{
    public function __construct()
    {
    }
    public function asString() : string
    {
    }
    public function operatingSystem() : \PHPUnit\Event\Runtime\OperatingSystem
    {
    }
    public function php() : \PHPUnit\Event\Runtime\PHP
    {
    }
    public function phpunit() : \PHPUnit\Event\Runtime\PHPUnit
    {
    }
}
namespace PHPUnit\Event\Code;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ThrowableBuilder
{
    /**
     * @throws Exception
     * @throws NoPreviousThrowableException
     */
    public static function from(\Throwable $t) : \PHPUnit\Event\Code\Throwable
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ComparisonFailureBuilder
{
    public static function from(\Throwable $t) : ?\PHPUnit\Event\Code\ComparisonFailure
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ClassMethod
{
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public function __construct(string $className, string $methodName)
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function methodName() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract readonly class Test
{
    /**
     * @param non-empty-string $file
     */
    public function __construct(string $file)
    {
    }
    /**
     * @return non-empty-string
     */
    public function file() : string
    {
    }
    /**
     * @phpstan-assert-if-true TestMethod $this
     */
    public function isTestMethod() : bool
    {
    }
    /**
     * @phpstan-assert-if-true Phpt $this
     */
    public function isPhpt() : bool
    {
    }
    /**
     * @return non-empty-string
     */
    public abstract function id() : string;
    /**
     * @return non-empty-string
     */
    public abstract function name() : string;
}
namespace PHPUnit\Event\Code\IssueTrigger;

/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract class IssueTrigger
{
    public static function self() : \PHPUnit\Event\Code\IssueTrigger\SelfTrigger
    {
    }
    public static function direct() : \PHPUnit\Event\Code\IssueTrigger\DirectTrigger
    {
    }
    public static function indirect() : \PHPUnit\Event\Code\IssueTrigger\IndirectTrigger
    {
    }
    public static function unknown() : \PHPUnit\Event\Code\IssueTrigger\UnknownTrigger
    {
    }
    /**
     * Your own code triggers an issue in your own code.
     *
     * @phpstan-assert-if-true SelfTrigger $this
     */
    public function isSelf() : bool
    {
    }
    /**
     * Your own code triggers an issue in third-party code.
     *
     * @phpstan-assert-if-true DirectTrigger $this
     */
    public function isDirect() : bool
    {
    }
    /**
     * Third-party code triggers an issue either in your own code or in third-party code.
     *
     * @phpstan-assert-if-true IndirectTrigger $this
     */
    public function isIndirect() : bool
    {
    }
    /**
     * @phpstan-assert-if-true UnknownTrigger $this
     */
    public function isUnknown() : bool
    {
    }
    public abstract function asString() : string;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IndirectTrigger extends \PHPUnit\Event\Code\IssueTrigger\IssueTrigger
{
    /**
     * Third-party code triggers an issue either in your own code or in third-party code.
     */
    public function isIndirect() : true
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class SelfTrigger extends \PHPUnit\Event\Code\IssueTrigger\IssueTrigger
{
    /**
     * Your own code triggers an issue in your own code.
     */
    public function isSelf() : true
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class UnknownTrigger extends \PHPUnit\Event\Code\IssueTrigger\IssueTrigger
{
    public function isUnknown() : true
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class DirectTrigger extends \PHPUnit\Event\Code\IssueTrigger\IssueTrigger
{
    /**
     * Your own code triggers an issue in third-party code.
     */
    public function isDirect() : true
    {
    }
    public function asString() : string
    {
    }
}
namespace PHPUnit\Event\Code;

/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestMethod extends \PHPUnit\Event\Code\Test
{
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     * @param non-empty-string $file
     * @param non-negative-int $line
     */
    public function __construct(string $className, string $methodName, string $file, int $line, \PHPUnit\Event\Code\TestDox $testDox, \PHPUnit\Metadata\MetadataCollection $metadata, \PHPUnit\Event\TestData\TestDataCollection $testData)
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function methodName() : string
    {
    }
    /**
     * @return non-negative-int
     */
    public function line() : int
    {
    }
    public function testDox() : \PHPUnit\Event\Code\TestDox
    {
    }
    public function metadata() : \PHPUnit\Metadata\MetadataCollection
    {
    }
    public function testData() : \PHPUnit\Event\TestData\TestDataCollection
    {
    }
    public function isTestMethod() : true
    {
    }
    /**
     * @return non-empty-string
     */
    public function id() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function nameWithClass() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function name() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Phpt extends \PHPUnit\Event\Code\Test
{
    public function isPhpt() : true
    {
    }
    /**
     * @return non-empty-string
     */
    public function id() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function name() : string
    {
    }
}
namespace PHPUnit\Event\TestData;

/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract readonly class TestData
{
    protected function __construct(string $data)
    {
    }
    public function data() : string
    {
    }
    /**
     * @phpstan-assert-if-true DataFromDataProvider $this
     */
    public function isFromDataProvider() : bool
    {
    }
    /**
     * @phpstan-assert-if-true DataFromTestDependency $this
     */
    public function isFromTestDependency() : bool
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class DataFromTestDependency extends \PHPUnit\Event\TestData\TestData
{
    public static function from(string $data) : self
    {
    }
    public function isFromTestDependency() : true
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class DataFromDataProvider extends \PHPUnit\Event\TestData\TestData
{
    public static function from(int|string $dataSetName, string $data, string $dataAsStringForResultOutput) : self
    {
    }
    public function dataSetName() : int|string
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function dataAsStringForResultOutput() : string
    {
    }
    public function isFromDataProvider() : true
    {
    }
}
/**
 * @template-implements Iterator<int, TestData>
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class TestDataCollectionIterator implements \Iterator
{
    public function __construct(\PHPUnit\Event\TestData\TestDataCollection $data)
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\Event\TestData\TestData
    {
    }
    public function next() : void
    {
    }
}
/**
 * @template-implements IteratorAggregate<int, TestData>
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestDataCollection implements \Countable, \IteratorAggregate
{
    /**
     * @param list<TestData> $data
     */
    public static function fromArray(array $data) : self
    {
    }
    /**
     * @return list<TestData>
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->fromDataProvider
     */
    public function hasDataFromDataProvider() : bool
    {
    }
    /**
     * @throws NoDataSetFromDataProviderException
     */
    public function dataFromDataProvider() : \PHPUnit\Event\TestData\DataFromDataProvider
    {
    }
    public function getIterator() : \PHPUnit\Event\TestData\TestDataCollectionIterator
    {
    }
}
namespace PHPUnit\Event\Code;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestDoxBuilder
{
    public static function fromTestCase(\PHPUnit\Framework\TestCase $testCase) : \PHPUnit\Event\Code\TestDox
    {
    }
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public static function fromClassNameAndMethodName(string $className, string $methodName) : \PHPUnit\Event\Code\TestDox
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestDox
{
    public function __construct(string $prettifiedClassName, string $prettifiedMethodName, string $prettifiedAndColorizedMethodName)
    {
    }
    public function prettifiedClassName() : string
    {
    }
    public function prettifiedMethodName(bool $colorize = false) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestMethodBuilder
{
    public static function fromTestCase(\PHPUnit\Framework\TestCase $testCase) : \PHPUnit\Event\Code\TestMethod
    {
    }
    /**
     * @throws NoTestCaseObjectOnCallStackException
     */
    public static function fromCallStack() : \PHPUnit\Event\Code\TestMethod
    {
    }
}
/**
 * @template-implements IteratorAggregate<int, Test>
 *
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestCollection implements \Countable, \IteratorAggregate
{
    /**
     * @param list<Test> $tests
     */
    public static function fromArray(array $tests) : self
    {
    }
    /**
     * @return list<Test>
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \PHPUnit\Event\Code\TestCollectionIterator
    {
    }
}
/**
 * @template-implements Iterator<int, Test>
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class TestCollectionIterator implements \Iterator
{
    public function __construct(\PHPUnit\Event\Code\TestCollection $tests)
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\Event\Code\Test
    {
    }
    public function next() : void
    {
    }
}
namespace PHPUnit\Event;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface Emitter
{
    public function applicationStarted() : void;
    public function testRunnerStarted() : void;
    public function testRunnerConfigured(\PHPUnit\TextUI\Configuration\Configuration $configuration) : void;
    public function testRunnerBootstrapFinished(string $filename) : void;
    public function testRunnerLoadedExtensionFromPhar(string $filename, string $name, string $version) : void;
    /**
     * @param class-string          $className
     * @param array<string, string> $parameters
     */
    public function testRunnerBootstrappedExtension(string $className, array $parameters) : void;
    public function dataProviderMethodCalled(\PHPUnit\Event\Code\ClassMethod $testMethod, \PHPUnit\Event\Code\ClassMethod $dataProviderMethod) : void;
    public function dataProviderMethodFinished(\PHPUnit\Event\Code\ClassMethod $testMethod, \PHPUnit\Event\Code\ClassMethod ...$calledMethods) : void;
    public function testSuiteLoaded(\PHPUnit\Event\TestSuite\TestSuite $testSuite) : void;
    public function testSuiteFiltered(\PHPUnit\Event\TestSuite\TestSuite $testSuite) : void;
    public function testSuiteSorted(int $executionOrder, int $executionOrderDefects, bool $resolveDependencies) : void;
    public function testRunnerEventFacadeSealed() : void;
    public function testRunnerExecutionStarted(\PHPUnit\Event\TestSuite\TestSuite $testSuite) : void;
    public function testRunnerDisabledGarbageCollection() : void;
    public function testRunnerTriggeredGarbageCollection() : void;
    public function testSuiteSkipped(\PHPUnit\Event\TestSuite\TestSuite $testSuite, string $message) : void;
    public function testSuiteStarted(\PHPUnit\Event\TestSuite\TestSuite $testSuite) : void;
    public function testPreparationStarted(\PHPUnit\Event\Code\Test $test) : void;
    public function testPreparationFailed(\PHPUnit\Event\Code\Test $test) : void;
    /**
     * @param class-string $testClassName
     */
    public function testBeforeFirstTestMethodCalled(string $testClassName, \PHPUnit\Event\Code\ClassMethod $calledMethod) : void;
    /**
     * @param class-string $testClassName
     */
    public function testBeforeFirstTestMethodErrored(string $testClassName, \PHPUnit\Event\Code\ClassMethod $calledMethod, \PHPUnit\Event\Code\Throwable $throwable) : void;
    /**
     * @param class-string $testClassName
     */
    public function testBeforeFirstTestMethodFinished(string $testClassName, \PHPUnit\Event\Code\ClassMethod ...$calledMethods) : void;
    /**
     * @param class-string $testClassName
     */
    public function testBeforeTestMethodCalled(string $testClassName, \PHPUnit\Event\Code\ClassMethod $calledMethod) : void;
    /**
     * @param class-string $testClassName
     */
    public function testBeforeTestMethodFinished(string $testClassName, \PHPUnit\Event\Code\ClassMethod ...$calledMethods) : void;
    /**
     * @param class-string $testClassName
     */
    public function testPreConditionCalled(string $testClassName, \PHPUnit\Event\Code\ClassMethod $calledMethod) : void;
    /**
     * @param class-string $testClassName
     */
    public function testPreConditionFinished(string $testClassName, \PHPUnit\Event\Code\ClassMethod ...$calledMethods) : void;
    public function testPrepared(\PHPUnit\Event\Code\Test $test) : void;
    /**
     * @param class-string $className
     */
    public function testRegisteredComparator(string $className) : void;
    /**
     * @param class-string $className
     */
    public function testCreatedMockObject(string $className) : void;
    /**
     * @param list<class-string> $interfaces
     */
    public function testCreatedMockObjectForIntersectionOfInterfaces(array $interfaces) : void;
    /**
     * @param class-string $className
     */
    public function testCreatedPartialMockObject(string $className, string ...$methodNames) : void;
    /**
     * @param class-string $className
     */
    public function testCreatedStub(string $className) : void;
    /**
     * @param list<class-string> $interfaces
     */
    public function testCreatedStubForIntersectionOfInterfaces(array $interfaces) : void;
    public function testErrored(\PHPUnit\Event\Code\Test $test, \PHPUnit\Event\Code\Throwable $throwable) : void;
    public function testFailed(\PHPUnit\Event\Code\Test $test, \PHPUnit\Event\Code\Throwable $throwable, ?\PHPUnit\Event\Code\ComparisonFailure $comparisonFailure) : void;
    public function testPassed(\PHPUnit\Event\Code\Test $test) : void;
    /**
     * @param non-empty-string $message
     */
    public function testConsideredRisky(\PHPUnit\Event\Code\Test $test, string $message) : void;
    public function testMarkedAsIncomplete(\PHPUnit\Event\Code\Test $test, \PHPUnit\Event\Code\Throwable $throwable) : void;
    /**
     * @param non-empty-string $message
     */
    public function testSkipped(\PHPUnit\Event\Code\Test $test, string $message) : void;
    /**
     * @param non-empty-string $message
     */
    public function testTriggeredPhpunitDeprecation(?\PHPUnit\Event\Code\Test $test, string $message) : void;
    /**
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
     */
    public function testTriggeredPhpDeprecation(\PHPUnit\Event\Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline, bool $ignoredByTest, \PHPUnit\Event\Code\IssueTrigger\IssueTrigger $trigger) : void;
    /**
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
     */
    public function testTriggeredDeprecation(\PHPUnit\Event\Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline, bool $ignoredByTest, \PHPUnit\Event\Code\IssueTrigger\IssueTrigger $trigger) : void;
    /**
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
     */
    public function testTriggeredError(\PHPUnit\Event\Code\Test $test, string $message, string $file, int $line, bool $suppressed) : void;
    /**
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
     */
    public function testTriggeredNotice(\PHPUnit\Event\Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline) : void;
    /**
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
     */
    public function testTriggeredPhpNotice(\PHPUnit\Event\Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline) : void;
    /**
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
     */
    public function testTriggeredWarning(\PHPUnit\Event\Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline) : void;
    /**
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
     */
    public function testTriggeredPhpWarning(\PHPUnit\Event\Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline) : void;
    /**
     * @param non-empty-string $message
     */
    public function testTriggeredPhpunitError(\PHPUnit\Event\Code\Test $test, string $message) : void;
    /**
     * @param non-empty-string $message
     */
    public function testTriggeredPhpunitWarning(\PHPUnit\Event\Code\Test $test, string $message) : void;
    /**
     * @param non-empty-string $output
     */
    public function testPrintedUnexpectedOutput(string $output) : void;
    public function testFinished(\PHPUnit\Event\Code\Test $test, int $numberOfAssertionsPerformed) : void;
    /**
     * @param class-string $testClassName
     */
    public function testPostConditionCalled(string $testClassName, \PHPUnit\Event\Code\ClassMethod $calledMethod) : void;
    /**
     * @param class-string $testClassName
     */
    public function testPostConditionFinished(string $testClassName, \PHPUnit\Event\Code\ClassMethod ...$calledMethods) : void;
    /**
     * @param class-string $testClassName
     */
    public function testAfterTestMethodCalled(string $testClassName, \PHPUnit\Event\Code\ClassMethod $calledMethod) : void;
    /**
     * @param class-string $testClassName
     */
    public function testAfterTestMethodFinished(string $testClassName, \PHPUnit\Event\Code\ClassMethod ...$calledMethods) : void;
    /**
     * @param class-string $testClassName
     */
    public function testAfterLastTestMethodCalled(string $testClassName, \PHPUnit\Event\Code\ClassMethod $calledMethod) : void;
    /**
     * @param class-string $testClassName
     */
    public function testAfterLastTestMethodFinished(string $testClassName, \PHPUnit\Event\Code\ClassMethod ...$calledMethods) : void;
    public function testSuiteFinished(\PHPUnit\Event\TestSuite\TestSuite $testSuite) : void;
    public function testRunnerTriggeredDeprecation(string $message) : void;
    public function testRunnerTriggeredWarning(string $message) : void;
    public function testRunnerEnabledGarbageCollection() : void;
    public function testRunnerExecutionAborted() : void;
    public function testRunnerExecutionFinished() : void;
    public function testRunnerFinished() : void;
    public function applicationFinished(int $shellExitCode) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class DispatchingEmitter implements \PHPUnit\Event\Emitter
{
    public function __construct(\PHPUnit\Event\Dispatcher $dispatcher, \PHPUnit\Event\Telemetry\System $system)
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function applicationStarted() : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerStarted() : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerConfigured(\PHPUnit\TextUI\Configuration\Configuration $configuration) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerBootstrapFinished(string $filename) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerLoadedExtensionFromPhar(string $filename, string $name, string $version) : void
    {
    }
    /**
     * @param class-string          $className
     * @param array<string, string> $parameters
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerBootstrappedExtension(string $className, array $parameters) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function dataProviderMethodCalled(\PHPUnit\Event\Code\ClassMethod $testMethod, \PHPUnit\Event\Code\ClassMethod $dataProviderMethod) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function dataProviderMethodFinished(\PHPUnit\Event\Code\ClassMethod $testMethod, \PHPUnit\Event\Code\ClassMethod ...$calledMethods) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testSuiteLoaded(\PHPUnit\Event\TestSuite\TestSuite $testSuite) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testSuiteFiltered(\PHPUnit\Event\TestSuite\TestSuite $testSuite) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testSuiteSorted(int $executionOrder, int $executionOrderDefects, bool $resolveDependencies) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerEventFacadeSealed() : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerExecutionStarted(\PHPUnit\Event\TestSuite\TestSuite $testSuite) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerDisabledGarbageCollection() : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerTriggeredGarbageCollection() : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testSuiteSkipped(\PHPUnit\Event\TestSuite\TestSuite $testSuite, string $message) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testSuiteStarted(\PHPUnit\Event\TestSuite\TestSuite $testSuite) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testPreparationStarted(\PHPUnit\Event\Code\Test $test) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testPreparationFailed(\PHPUnit\Event\Code\Test $test) : void
    {
    }
    /**
     * @param class-string $testClassName
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testBeforeFirstTestMethodCalled(string $testClassName, \PHPUnit\Event\Code\ClassMethod $calledMethod) : void
    {
    }
    /**
     * @param class-string $testClassName
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testBeforeFirstTestMethodErrored(string $testClassName, \PHPUnit\Event\Code\ClassMethod $calledMethod, \PHPUnit\Event\Code\Throwable $throwable) : void
    {
    }
    /**
     * @param class-string $testClassName
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testBeforeFirstTestMethodFinished(string $testClassName, \PHPUnit\Event\Code\ClassMethod ...$calledMethods) : void
    {
    }
    /**
     * @param class-string $testClassName
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testBeforeTestMethodCalled(string $testClassName, \PHPUnit\Event\Code\ClassMethod $calledMethod) : void
    {
    }
    /**
     * @param class-string $testClassName
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testBeforeTestMethodFinished(string $testClassName, \PHPUnit\Event\Code\ClassMethod ...$calledMethods) : void
    {
    }
    /**
     * @param class-string $testClassName
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testPreConditionCalled(string $testClassName, \PHPUnit\Event\Code\ClassMethod $calledMethod) : void
    {
    }
    /**
     * @param class-string $testClassName
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testPreConditionFinished(string $testClassName, \PHPUnit\Event\Code\ClassMethod ...$calledMethods) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testPrepared(\PHPUnit\Event\Code\Test $test) : void
    {
    }
    /**
     * @param class-string $className
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRegisteredComparator(string $className) : void
    {
    }
    /**
     * @param class-string $className
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testCreatedMockObject(string $className) : void
    {
    }
    /**
     * @param list<class-string> $interfaces
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testCreatedMockObjectForIntersectionOfInterfaces(array $interfaces) : void
    {
    }
    /**
     * @param class-string $className
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testCreatedPartialMockObject(string $className, string ...$methodNames) : void
    {
    }
    /**
     * @param class-string $className
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testCreatedStub(string $className) : void
    {
    }
    /**
     * @param list<class-string> $interfaces
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testCreatedStubForIntersectionOfInterfaces(array $interfaces) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testErrored(\PHPUnit\Event\Code\Test $test, \PHPUnit\Event\Code\Throwable $throwable) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testFailed(\PHPUnit\Event\Code\Test $test, \PHPUnit\Event\Code\Throwable $throwable, ?\PHPUnit\Event\Code\ComparisonFailure $comparisonFailure) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testPassed(\PHPUnit\Event\Code\Test $test) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testConsideredRisky(\PHPUnit\Event\Code\Test $test, string $message) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testMarkedAsIncomplete(\PHPUnit\Event\Code\Test $test, \PHPUnit\Event\Code\Throwable $throwable) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testSkipped(\PHPUnit\Event\Code\Test $test, string $message) : void
    {
    }
    /**
     * @param non-empty-string $message
     *
     * @throws InvalidArgumentException
     * @throws NoTestCaseObjectOnCallStackException
     * @throws UnknownEventTypeException
     */
    public function testTriggeredPhpunitDeprecation(?\PHPUnit\Event\Code\Test $test, string $message) : void
    {
    }
    /**
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testTriggeredPhpDeprecation(\PHPUnit\Event\Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline, bool $ignoredByTest, \PHPUnit\Event\Code\IssueTrigger\IssueTrigger $trigger) : void
    {
    }
    /**
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testTriggeredDeprecation(\PHPUnit\Event\Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline, bool $ignoredByTest, \PHPUnit\Event\Code\IssueTrigger\IssueTrigger $trigger) : void
    {
    }
    /**
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testTriggeredError(\PHPUnit\Event\Code\Test $test, string $message, string $file, int $line, bool $suppressed) : void
    {
    }
    /**
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testTriggeredNotice(\PHPUnit\Event\Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline) : void
    {
    }
    /**
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testTriggeredPhpNotice(\PHPUnit\Event\Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline) : void
    {
    }
    /**
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testTriggeredWarning(\PHPUnit\Event\Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline) : void
    {
    }
    /**
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testTriggeredPhpWarning(\PHPUnit\Event\Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline) : void
    {
    }
    /**
     * @param non-empty-string $message
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testTriggeredPhpunitError(\PHPUnit\Event\Code\Test $test, string $message) : void
    {
    }
    /**
     * @param non-empty-string $message
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testTriggeredPhpunitWarning(\PHPUnit\Event\Code\Test $test, string $message) : void
    {
    }
    /**
     * @param non-empty-string $output
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testPrintedUnexpectedOutput(string $output) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testFinished(\PHPUnit\Event\Code\Test $test, int $numberOfAssertionsPerformed) : void
    {
    }
    /**
     * @param class-string $testClassName
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testPostConditionCalled(string $testClassName, \PHPUnit\Event\Code\ClassMethod $calledMethod) : void
    {
    }
    /**
     * @param class-string $testClassName
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testPostConditionFinished(string $testClassName, \PHPUnit\Event\Code\ClassMethod ...$calledMethods) : void
    {
    }
    /**
     * @param class-string $testClassName
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testAfterTestMethodCalled(string $testClassName, \PHPUnit\Event\Code\ClassMethod $calledMethod) : void
    {
    }
    /**
     * @param class-string $testClassName
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testAfterTestMethodFinished(string $testClassName, \PHPUnit\Event\Code\ClassMethod ...$calledMethods) : void
    {
    }
    /**
     * @param class-string $testClassName
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testAfterLastTestMethodCalled(string $testClassName, \PHPUnit\Event\Code\ClassMethod $calledMethod) : void
    {
    }
    /**
     * @param class-string $testClassName
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testAfterLastTestMethodFinished(string $testClassName, \PHPUnit\Event\Code\ClassMethod ...$calledMethods) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testSuiteFinished(\PHPUnit\Event\TestSuite\TestSuite $testSuite) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerTriggeredDeprecation(string $message) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerTriggeredWarning(string $message) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerEnabledGarbageCollection() : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerExecutionAborted() : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerExecutionFinished() : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerFinished() : void
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function applicationFinished(int $shellExitCode) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Facade
{
    public static function instance() : self
    {
    }
    public static function emitter() : \PHPUnit\Event\Emitter
    {
    }
    public function __construct()
    {
    }
    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public function registerSubscribers(\PHPUnit\Event\Subscriber ...$subscribers) : void
    {
    }
    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public function registerSubscriber(\PHPUnit\Event\Subscriber $subscriber) : void
    {
    }
    /**
     * @throws EventFacadeIsSealedException
     */
    public function registerTracer(\PHPUnit\Event\Tracer\Tracer $tracer) : void
    {
    }
    /**
     * @codeCoverageIgnore
     *
     * @noinspection PhpUnused
     */
    public function initForIsolation(\PHPUnit\Event\Telemetry\HRTime $offset) : \PHPUnit\Event\CollectingDispatcher
    {
    }
    public function forward(\PHPUnit\Event\EventCollection $events) : void
    {
    }
    public function seal() : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TypeMap
{
    /**
     * @param class-string $subscriberInterface
     * @param class-string $eventClass
     *
     * @throws EventAlreadyAssignedException
     * @throws InvalidEventException
     * @throws InvalidSubscriberException
     * @throws SubscriberTypeAlreadyRegisteredException
     * @throws UnknownEventException
     * @throws UnknownSubscriberException
     */
    public function addMapping(string $subscriberInterface, string $eventClass) : void
    {
    }
    public function isKnownSubscriberType(\PHPUnit\Event\Subscriber $subscriber) : bool
    {
    }
    public function isKnownEventType(\PHPUnit\Event\Event $event) : bool
    {
    }
    /**
     * @throws MapError
     *
     * @return class-string
     */
    public function map(\PHPUnit\Event\Subscriber $subscriber) : string
    {
    }
}
namespace PHPUnit\Runner;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface Exception extends \PHPUnit\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ClassCannotBeFoundException extends \RuntimeException implements \PHPUnit\Runner\Exception
{
    public function __construct(string $className, string $file)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class NoIgnoredEventException extends \RuntimeException implements \PHPUnit\Runner\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class UnsupportedPhptSectionException extends \RuntimeException implements \PHPUnit\Runner\Exception
{
    public function __construct(string $section)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ErrorException extends \Error implements \PHPUnit\Runner\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvalidOrderException extends \RuntimeException implements \PHPUnit\Runner\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ClassIsAbstractException extends \RuntimeException implements \PHPUnit\Runner\Exception
{
    public function __construct(string $className, string $file)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class PhptExternalFileCannotBeLoadedException extends \RuntimeException implements \PHPUnit\Runner\Exception
{
    public function __construct(string $section, string $file)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvalidPhptFileException extends \RuntimeException implements \PHPUnit\Runner\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class FileDoesNotExistException extends \RuntimeException implements \PHPUnit\Runner\Exception
{
    public function __construct(string $file)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class DirectoryDoesNotExistException extends \RuntimeException implements \PHPUnit\Runner\Exception
{
    public function __construct(string $directory)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ParameterDoesNotExistException extends \RuntimeException implements \PHPUnit\Runner\Exception
{
    public function __construct(string $name)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ReflectionException extends \RuntimeException implements \PHPUnit\Runner\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ClassDoesNotExtendTestCaseException extends \RuntimeException implements \PHPUnit\Runner\Exception
{
    public function __construct(string $className, string $file)
    {
    }
}
namespace PHPUnit\TestRunner;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class IssueFilter
{
    public function __construct(\PHPUnit\TextUI\Configuration\Source $source)
    {
    }
    public function shouldBeProcessed(\PHPUnit\Event\Test\DeprecationTriggered|\PHPUnit\Event\Test\ErrorTriggered|\PHPUnit\Event\Test\NoticeTriggered|\PHPUnit\Event\Test\PhpDeprecationTriggered|\PHPUnit\Event\Test\PhpNoticeTriggered|\PHPUnit\Event\Test\PhpWarningTriggered|\PHPUnit\Event\Test\WarningTriggered $event, bool $onlyTestMethods = false) : bool
    {
    }
}
namespace PHPUnit\Runner\DeprecationCollector;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Facade
{
    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public static function init() : void
    {
    }
    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     *
     * @return list<non-empty-string>
     */
    public static function deprecations() : array
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Collector
{
    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public function __construct(\PHPUnit\Event\Facade $facade)
    {
    }
    /**
     * @return list<non-empty-string>
     */
    public function deprecations() : array
    {
    }
    public function testPrepared() : void
    {
    }
    public function testTriggeredDeprecation(\PHPUnit\Event\Test\DeprecationTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract class Subscriber
{
    public function __construct(\PHPUnit\Runner\DeprecationCollector\Collector $collector)
    {
    }
    protected function collector() : \PHPUnit\Runner\DeprecationCollector\Collector
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestTriggeredDeprecationSubscriber extends \PHPUnit\Runner\DeprecationCollector\Subscriber implements \PHPUnit\Event\Test\DeprecationTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\DeprecationTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestPreparedSubscriber extends \PHPUnit\Runner\DeprecationCollector\Subscriber implements \PHPUnit\Event\Test\PreparedSubscriber
{
    public function notify(\PHPUnit\Event\Test\Prepared $event) : void
    {
    }
}
namespace PHPUnit\Runner\Extension;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class Facade
{
    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public function registerSubscribers(\PHPUnit\Event\Subscriber ...$subscribers) : void
    {
    }
    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public function registerSubscriber(\PHPUnit\Event\Subscriber $subscriber) : void
    {
    }
    /**
     * @throws EventFacadeIsSealedException
     */
    public function registerTracer(\PHPUnit\Event\Tracer\Tracer $tracer) : void
    {
    }
    public function replaceOutput() : void
    {
    }
    public function replacesOutput() : bool
    {
    }
    public function replaceProgressOutput() : void
    {
    }
    public function replacesProgressOutput() : bool
    {
    }
    public function replaceResultOutput() : void
    {
    }
    public function replacesResultOutput() : bool
    {
    }
    public function requireCodeCoverageCollection() : void
    {
    }
    public function requiresCodeCoverageCollection() : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface Extension
{
    public function bootstrap(\PHPUnit\TextUI\Configuration\Configuration $configuration, \PHPUnit\Runner\Extension\Facade $facade, \PHPUnit\Runner\Extension\ParameterCollection $parameters) : void;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ParameterCollection
{
    /**
     * @param array<string, string> $parameters
     */
    public static function fromArray(array $parameters) : self
    {
    }
    public function has(string $name) : bool
    {
    }
    /**
     * @throws ParameterDoesNotExistException
     */
    public function get(string $name) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class PharLoader
{
    /**
     * @param non-empty-string $directory
     *
     * @return list<string>
     */
    public function loadPharExtensionsInDirectory(string $directory) : array
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ExtensionBootstrapper
{
    public function __construct(\PHPUnit\TextUI\Configuration\Configuration $configuration, \PHPUnit\Runner\Extension\Facade $facade)
    {
    }
    /**
     * @param non-empty-string      $className
     * @param array<string, string> $parameters
     */
    public function bootstrap(string $className, array $parameters) : void
    {
    }
}
namespace PHPUnit\Runner;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class Version
{
    /**
     * @return non-empty-string
     */
    public static function id() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public static function series() : string
    {
    }
    /**
     * @return positive-int
     */
    public static function majorVersionNumber() : int
    {
    }
    /**
     * @return non-empty-string
     */
    public static function getVersionString() : string
    {
    }
}
namespace PHPUnit\Runner\ResultCache;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface ResultCache
{
    public function setStatus(string $id, \PHPUnit\Framework\TestStatus\TestStatus $status) : void;
    public function status(string $id) : \PHPUnit\Framework\TestStatus\TestStatus;
    public function setTime(string $id, float $time) : void;
    public function time(string $id) : float;
    public function load() : void;
    public function persist() : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class NullResultCache implements \PHPUnit\Runner\ResultCache\ResultCache
{
    public function setStatus(string $id, \PHPUnit\Framework\TestStatus\TestStatus $status) : void
    {
    }
    public function status(string $id) : \PHPUnit\Framework\TestStatus\TestStatus
    {
    }
    public function setTime(string $id, float $time) : void
    {
    }
    public function time(string $id) : float
    {
    }
    public function load() : void
    {
    }
    public function persist() : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class DefaultResultCache implements \PHPUnit\Runner\ResultCache\ResultCache
{
    public function __construct(?string $filepath = null)
    {
    }
    public function setStatus(string $id, \PHPUnit\Framework\TestStatus\TestStatus $status) : void
    {
    }
    public function status(string $id) : \PHPUnit\Framework\TestStatus\TestStatus
    {
    }
    public function setTime(string $id, float $time) : void
    {
    }
    public function time(string $id) : float
    {
    }
    public function load() : void
    {
    }
    /**
     * @throws Exception
     */
    public function persist() : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ResultCacheHandler
{
    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public function __construct(\PHPUnit\Runner\ResultCache\ResultCache $cache, \PHPUnit\Event\Facade $facade)
    {
    }
    public function testSuiteStarted() : void
    {
    }
    public function testSuiteFinished() : void
    {
    }
    public function testPrepared(\PHPUnit\Event\Test\Prepared $event) : void
    {
    }
    public function testMarkedIncomplete(\PHPUnit\Event\Test\MarkedIncomplete $event) : void
    {
    }
    public function testConsideredRisky(\PHPUnit\Event\Test\ConsideredRisky $event) : void
    {
    }
    public function testErrored(\PHPUnit\Event\Test\Errored $event) : void
    {
    }
    public function testFailed(\PHPUnit\Event\Test\Failed $event) : void
    {
    }
    /**
     * @throws \PHPUnit\Event\InvalidArgumentException
     * @throws InvalidArgumentException
     */
    public function testSkipped(\PHPUnit\Event\Test\Skipped $event) : void
    {
    }
    /**
     * @throws \PHPUnit\Event\InvalidArgumentException
     * @throws InvalidArgumentException
     */
    public function testFinished(\PHPUnit\Event\Test\Finished $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract readonly class Subscriber
{
    public function __construct(\PHPUnit\Runner\ResultCache\ResultCacheHandler $handler)
    {
    }
    protected function handler() : \PHPUnit\Runner\ResultCache\ResultCacheHandler
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestMarkedIncompleteSubscriber extends \PHPUnit\Runner\ResultCache\Subscriber implements \PHPUnit\Event\Test\MarkedIncompleteSubscriber
{
    public function notify(\PHPUnit\Event\Test\MarkedIncomplete $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestErroredSubscriber extends \PHPUnit\Runner\ResultCache\Subscriber implements \PHPUnit\Event\Test\ErroredSubscriber
{
    public function notify(\PHPUnit\Event\Test\Errored $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestSkippedSubscriber extends \PHPUnit\Runner\ResultCache\Subscriber implements \PHPUnit\Event\Test\SkippedSubscriber
{
    /**
     * @throws \PHPUnit\Framework\InvalidArgumentException
     * @throws InvalidArgumentException
     */
    public function notify(\PHPUnit\Event\Test\Skipped $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestFailedSubscriber extends \PHPUnit\Runner\ResultCache\Subscriber implements \PHPUnit\Event\Test\FailedSubscriber
{
    public function notify(\PHPUnit\Event\Test\Failed $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestConsideredRiskySubscriber extends \PHPUnit\Runner\ResultCache\Subscriber implements \PHPUnit\Event\Test\ConsideredRiskySubscriber
{
    public function notify(\PHPUnit\Event\Test\ConsideredRisky $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestSuiteStartedSubscriber extends \PHPUnit\Runner\ResultCache\Subscriber implements \PHPUnit\Event\TestSuite\StartedSubscriber
{
    public function notify(\PHPUnit\Event\TestSuite\Started $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestPreparedSubscriber extends \PHPUnit\Runner\ResultCache\Subscriber implements \PHPUnit\Event\Test\PreparedSubscriber
{
    public function notify(\PHPUnit\Event\Test\Prepared $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestSuiteFinishedSubscriber extends \PHPUnit\Runner\ResultCache\Subscriber implements \PHPUnit\Event\TestSuite\FinishedSubscriber
{
    public function notify(\PHPUnit\Event\TestSuite\Finished $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestFinishedSubscriber extends \PHPUnit\Runner\ResultCache\Subscriber implements \PHPUnit\Event\Test\FinishedSubscriber
{
    /**
     * @throws \PHPUnit\Framework\InvalidArgumentException
     * @throws InvalidArgumentException
     */
    public function notify(\PHPUnit\Event\Test\Finished $event) : void
    {
    }
}
namespace PHPUnit\Runner;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @codeCoverageIgnore
 */
final class CodeCoverage
{
    public static function instance() : self
    {
    }
    public function init(\PHPUnit\TextUI\Configuration\Configuration $configuration, \PHPUnit\TextUI\Configuration\CodeCoverageFilterRegistry $codeCoverageFilterRegistry, bool $extensionRequiresCodeCoverageCollection) : void
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->instance
     */
    public function isActive() : bool
    {
    }
    public function codeCoverage() : \SebastianBergmann\CodeCoverage\CodeCoverage
    {
    }
    public function driver() : \SebastianBergmann\CodeCoverage\Driver\Driver
    {
    }
    public function start(\PHPUnit\Framework\TestCase $test) : void
    {
    }
    /**
     * @param array<string,list<int>>|false $linesToBeCovered
     * @param array<string,list<int>>       $linesToBeUsed
     */
    public function stop(bool $append = true, array|false $linesToBeCovered = [], array $linesToBeUsed = []) : void
    {
    }
    public function deactivate() : void
    {
    }
    public function generateReports(\PHPUnit\TextUI\Output\Printer $printer, \PHPUnit\TextUI\Configuration\Configuration $configuration) : void
    {
    }
    /**
     * @param array<string,list<int>> $linesToBeIgnored
     */
    public function ignoreLines(array $linesToBeIgnored) : void
    {
    }
    /**
     * @return array<string,list<int>>
     */
    public function linesToBeIgnored() : array
    {
    }
}
namespace PHPUnit\Runner\Baseline;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class FileDoesNotHaveLineException extends \RuntimeException implements \PHPUnit\Runner\Exception
{
    public function __construct(string $file, int $line)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CannotLoadBaselineException extends \RuntimeException implements \PHPUnit\Runner\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Reader
{
    /**
     * @param non-empty-string $baselineFile
     *
     * @throws CannotLoadBaselineException
     */
    public function read(string $baselineFile) : \PHPUnit\Runner\Baseline\Baseline
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Writer
{
    /**
     * @param non-empty-string $baselineFile
     */
    public function write(string $baselineFile, \PHPUnit\Runner\Baseline\Baseline $baseline) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Generator
{
    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public function __construct(\PHPUnit\Event\Facade $facade, \PHPUnit\TextUI\Configuration\Source $source)
    {
    }
    public function baseline() : \PHPUnit\Runner\Baseline\Baseline
    {
    }
    /**
     * @throws FileDoesNotExistException
     * @throws FileDoesNotHaveLineException
     */
    public function testTriggeredIssue(\PHPUnit\Event\Test\DeprecationTriggered|\PHPUnit\Event\Test\NoticeTriggered|\PHPUnit\Event\Test\PhpDeprecationTriggered|\PHPUnit\Event\Test\PhpNoticeTriggered|\PHPUnit\Event\Test\PhpWarningTriggered|\PHPUnit\Event\Test\WarningTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @see Copied from https://github.com/phpstan/phpstan-src/blob/1.10.33/src/File/ParentDirectoryRelativePathHelper.php
 */
final readonly class RelativePathCalculator
{
    /**
     * @param non-empty-string $baselineDirectory
     */
    public function __construct(string $baselineDirectory)
    {
    }
    /**
     * @param non-empty-string $filename
     *
     * @return non-empty-string
     */
    public function calculate(string $filename) : string
    {
    }
    /**
     * @param non-empty-string $filename
     *
     * @return list<non-empty-string>
     */
    public function parts(string $filename) : array
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Baseline
{
    public const VERSION = 1;
    public function add(\PHPUnit\Runner\Baseline\Issue $issue) : void
    {
    }
    public function has(\PHPUnit\Runner\Baseline\Issue $issue) : bool
    {
    }
    /**
     * @return array<string, array<positive-int, list<Issue>>>
     */
    public function groupedByFileAndLine() : array
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Issue
{
    /**
     * @param non-empty-string  $file
     * @param positive-int      $line
     * @param ?non-empty-string $hash
     * @param non-empty-string  $description
     *
     * @throws FileDoesNotExistException
     * @throws FileDoesNotHaveLineException
     */
    public static function from(string $file, int $line, ?string $hash, string $description) : self
    {
    }
    /**
     * @return non-empty-string
     */
    public function file() : string
    {
    }
    /**
     * @return positive-int
     */
    public function line() : int
    {
    }
    /**
     * @return non-empty-string
     */
    public function hash() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function description() : string
    {
    }
    public function equals(self $other) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract readonly class Subscriber
{
    public function __construct(\PHPUnit\Runner\Baseline\Generator $generator)
    {
    }
    protected function generator() : \PHPUnit\Runner\Baseline\Generator
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredWarningSubscriber extends \PHPUnit\Runner\Baseline\Subscriber implements \PHPUnit\Event\Test\WarningTriggeredSubscriber
{
    /**
     * @throws FileDoesNotExistException
     * @throws FileDoesNotHaveLineException
     */
    public function notify(\PHPUnit\Event\Test\WarningTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredNoticeSubscriber extends \PHPUnit\Runner\Baseline\Subscriber implements \PHPUnit\Event\Test\NoticeTriggeredSubscriber
{
    /**
     * @throws FileDoesNotExistException
     * @throws FileDoesNotHaveLineException
     */
    public function notify(\PHPUnit\Event\Test\NoticeTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredPhpWarningSubscriber extends \PHPUnit\Runner\Baseline\Subscriber implements \PHPUnit\Event\Test\PhpWarningTriggeredSubscriber
{
    /**
     * @throws FileDoesNotExistException
     * @throws FileDoesNotHaveLineException
     */
    public function notify(\PHPUnit\Event\Test\PhpWarningTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredPhpNoticeSubscriber extends \PHPUnit\Runner\Baseline\Subscriber implements \PHPUnit\Event\Test\PhpNoticeTriggeredSubscriber
{
    /**
     * @throws FileDoesNotExistException
     * @throws FileDoesNotHaveLineException
     */
    public function notify(\PHPUnit\Event\Test\PhpNoticeTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredDeprecationSubscriber extends \PHPUnit\Runner\Baseline\Subscriber implements \PHPUnit\Event\Test\DeprecationTriggeredSubscriber
{
    /**
     * @throws FileDoesNotExistException
     * @throws FileDoesNotHaveLineException
     */
    public function notify(\PHPUnit\Event\Test\DeprecationTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredPhpDeprecationSubscriber extends \PHPUnit\Runner\Baseline\Subscriber implements \PHPUnit\Event\Test\PhpDeprecationTriggeredSubscriber
{
    /**
     * @throws FileDoesNotExistException
     * @throws FileDoesNotHaveLineException
     */
    public function notify(\PHPUnit\Event\Test\PhpDeprecationTriggered $event) : void
    {
    }
}
namespace PHPUnit\Runner;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ErrorHandler
{
    public static function instance() : self
    {
    }
    /**
     * @throws NoTestCaseObjectOnCallStackException
     */
    public function __invoke(int $errorNumber, string $errorString, string $errorFile, int $errorLine) : bool
    {
    }
    public function enable() : void
    {
    }
    public function disable() : void
    {
    }
    public function useBaseline(\PHPUnit\Runner\Baseline\Baseline $baseline) : void
    {
    }
    /**
     * @param array{functions: list<non-empty-string>, methods: list<array{className: class-string, methodName: non-empty-string}>} $deprecationTriggers
     */
    public function useDeprecationTriggers(array $deprecationTriggers) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestSuiteLoader
{
    /**
     * @throws Exception
     *
     * @return ReflectionClass<TestCase>
     */
    public function load(string $suiteClassFile) : \ReflectionClass
    {
    }
}
namespace PHPUnit\Runner\GarbageCollection;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class GarbageCollectionHandler
{
    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public function __construct(\PHPUnit\Event\Facade $facade, int $threshold)
    {
    }
    public function executionStarted() : void
    {
    }
    public function executionFinished() : void
    {
    }
    public function testFinished() : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract readonly class Subscriber
{
    public function __construct(\PHPUnit\Runner\GarbageCollection\GarbageCollectionHandler $handler)
    {
    }
    protected function handler() : \PHPUnit\Runner\GarbageCollection\GarbageCollectionHandler
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ExecutionStartedSubscriber extends \PHPUnit\Runner\GarbageCollection\Subscriber implements \PHPUnit\Event\TestRunner\ExecutionStartedSubscriber
{
    /**
     * @throws \PHPUnit\Framework\InvalidArgumentException
     * @throws InvalidArgumentException
     */
    public function notify(\PHPUnit\Event\TestRunner\ExecutionStarted $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ExecutionFinishedSubscriber extends \PHPUnit\Runner\GarbageCollection\Subscriber implements \PHPUnit\Event\TestRunner\ExecutionFinishedSubscriber
{
    /**
     * @throws \PHPUnit\Framework\InvalidArgumentException
     * @throws InvalidArgumentException
     */
    public function notify(\PHPUnit\Event\TestRunner\ExecutionFinished $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestFinishedSubscriber extends \PHPUnit\Runner\GarbageCollection\Subscriber implements \PHPUnit\Event\Test\FinishedSubscriber
{
    /**
     * @throws \PHPUnit\Framework\InvalidArgumentException
     * @throws InvalidArgumentException
     */
    public function notify(\PHPUnit\Event\Test\Finished $event) : void
    {
    }
}
namespace PHPUnit\Framework;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface Reorderable
{
    public function sortId() : string;
    /**
     * @return list<ExecutionOrderDependency>
     */
    public function provides() : array;
    /**
     * @return list<ExecutionOrderDependency>
     */
    public function requires() : array;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface SelfDescribing
{
    /**
     * Returns a string representation of the object.
     */
    public function toString() : string;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface Test extends \Countable
{
    public function run() : void;
}
namespace PHPUnit\Runner;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class PhptTestCase implements \PHPUnit\Framework\Reorderable, \PHPUnit\Framework\SelfDescribing, \PHPUnit\Framework\Test
{
    /**
     * Constructs a test case with the given filename.
     *
     * @param non-empty-string $filename
     *
     * @throws Exception
     */
    public function __construct(string $filename)
    {
    }
    /**
     * Counts the number of test cases executed by run(TestResult result).
     */
    public function count() : int
    {
    }
    /**
     * Runs a test and collects its result in a TestResult instance.
     *
     * @throws \PHPUnit\Framework\Exception
     * @throws \SebastianBergmann\Template\InvalidArgumentException
     * @throws Exception
     * @throws InvalidArgumentException
     * @throws NoPreviousThrowableException
     * @throws ReflectionException
     * @throws StaticAnalysisCacheNotConfiguredException
     * @throws TestIdMissingException
     * @throws UnintentionallyCoveredCodeException
     *
     * @noinspection RepetitiveMethodCallsInspection
     */
    public function run() : void
    {
    }
    /**
     * Returns the name of the test case.
     */
    public function getName() : string
    {
    }
    /**
     * Returns a string representation of the test case.
     */
    public function toString() : string
    {
    }
    public function usesDataProvider() : bool
    {
    }
    public function numberOfAssertionsPerformed() : int
    {
    }
    public function output() : string
    {
    }
    public function hasOutput() : bool
    {
    }
    public function sortId() : string
    {
    }
    /**
     * @return list<ExecutionOrderDependency>
     */
    public function provides() : array
    {
    }
    /**
     * @return list<ExecutionOrderDependency>
     */
    public function requires() : array
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function valueObjectForEvents() : \PHPUnit\Event\Code\Phpt
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestSuiteSorter
{
    /**
     * @var int
     */
    public const ORDER_DEFAULT = 0;
    /**
     * @var int
     */
    public const ORDER_RANDOMIZED = 1;
    /**
     * @var int
     */
    public const ORDER_REVERSED = 2;
    /**
     * @var int
     */
    public const ORDER_DEFECTS_FIRST = 3;
    /**
     * @var int
     */
    public const ORDER_DURATION = 4;
    /**
     * @var int
     */
    public const ORDER_SIZE = 5;
    public function __construct(?\PHPUnit\Runner\ResultCache\ResultCache $cache = null)
    {
    }
    /**
     * @throws Exception
     */
    public function reorderTestsInSuite(\PHPUnit\Framework\Test $suite, int $order, bool $resolveDependencies, int $orderDefects, bool $isRootTestSuite = true) : void
    {
    }
    /**
     * @return array<string>
     */
    public function getOriginalExecutionOrder() : array
    {
    }
    /**
     * @return array<string>
     */
    public function getExecutionOrder() : array
    {
    }
}
namespace PHPUnit\Runner\Filter;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract class GroupFilterIterator extends \RecursiveFilterIterator
{
    /**
     * @param RecursiveIterator<int, Test> $iterator
     * @param list<non-empty-string>       $groups
     */
    public function __construct(\RecursiveIterator $iterator, array $groups, \PHPUnit\Framework\TestSuite $suite)
    {
    }
    public function accept() : bool
    {
    }
    /**
     * @param non-empty-string       $id
     * @param list<non-empty-string> $groupTests
     */
    protected abstract function doAccept(string $id, array $groupTests) : bool;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ExcludeGroupFilterIterator extends \PHPUnit\Runner\Filter\GroupFilterIterator
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract class NameFilterIterator extends \RecursiveFilterIterator
{
    /**
     * @param RecursiveIterator<int, Test> $iterator
     * @param non-empty-string             $filter
     */
    public function __construct(\RecursiveIterator $iterator, string $filter)
    {
    }
    public function accept() : bool
    {
    }
    protected abstract function doAccept(bool $result) : bool;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ExcludeNameFilterIterator extends \PHPUnit\Runner\Filter\NameFilterIterator
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class IncludeGroupFilterIterator extends \PHPUnit\Runner\Filter\GroupFilterIterator
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Factory
{
    /**
     * @param list<non-empty-string> $testIds
     */
    public function addTestIdFilter(array $testIds) : void
    {
    }
    /**
     * @param list<non-empty-string> $groups
     */
    public function addIncludeGroupFilter(array $groups) : void
    {
    }
    /**
     * @param list<non-empty-string> $groups
     */
    public function addExcludeGroupFilter(array $groups) : void
    {
    }
    /**
     * @param non-empty-string $name
     */
    public function addIncludeNameFilter(string $name) : void
    {
    }
    /**
     * @param non-empty-string $name
     */
    public function addExcludeNameFilter(string $name) : void
    {
    }
    public function factory(\Iterator $iterator, \PHPUnit\Framework\TestSuite $suite) : \FilterIterator
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestIdFilterIterator extends \RecursiveFilterIterator
{
    /**
     * @param RecursiveIterator<int, Test>     $iterator
     * @param non-empty-list<non-empty-string> $testIds
     */
    public function __construct(\RecursiveIterator $iterator, array $testIds)
    {
    }
    public function accept() : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class IncludeNameFilterIterator extends \PHPUnit\Runner\Filter\NameFilterIterator
{
}
namespace PHPUnit\Runner;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class HookMethodCollection
{
    public static function defaultBeforeClass() : self
    {
    }
    public static function defaultBefore() : self
    {
    }
    public static function defaultPreCondition() : self
    {
    }
    public static function defaultPostCondition() : self
    {
    }
    public static function defaultAfter() : self
    {
    }
    public static function defaultAfterClass() : self
    {
    }
    public function add(\PHPUnit\Runner\HookMethod $hookMethod) : self
    {
    }
    /**
     * @return list<non-empty-string>
     */
    public function methodNamesSortedByPriority() : array
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class HookMethod
{
    /**
     * @param non-empty-string $methodName
     * @param non-negative-int $priority
     */
    public function __construct(string $methodName, int $priority)
    {
    }
    /**
     * @return non-empty-string
     */
    public function methodName() : string
    {
    }
    /**
     * @return non-negative-int
     */
    public function priority() : int
    {
    }
}
namespace PHPUnit\TestRunner\TestResult;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Facade
{
    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public static function init() : void
    {
    }
    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public static function result() : \PHPUnit\TestRunner\TestResult\TestResult
    {
    }
    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public static function shouldStop() : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestResult
{
    /**
     * @param list<BeforeFirstTestMethodErrored|Errored>      $testErroredEvents
     * @param list<Failed>                                    $testFailedEvents
     * @param array<string,list<ConsideredRisky>>             $testConsideredRiskyEvents
     * @param list<TestSuiteSkipped>                          $testSuiteSkippedEvents
     * @param list<TestSkipped>                               $testSkippedEvents
     * @param list<MarkedIncomplete>                          $testMarkedIncompleteEvents
     * @param array<string,list<PhpunitDeprecationTriggered>> $testTriggeredPhpunitDeprecationEvents
     * @param array<string,list<PhpunitErrorTriggered>>       $testTriggeredPhpunitErrorEvents
     * @param array<string,list<PhpunitWarningTriggered>>     $testTriggeredPhpunitWarningEvents
     * @param list<TestRunnerDeprecationTriggered>            $testRunnerTriggeredDeprecationEvents
     * @param list<TestRunnerWarningTriggered>                $testRunnerTriggeredWarningEvents
     * @param list<Issue>                                     $errors
     * @param list<Issue>                                     $deprecations
     * @param list<Issue>                                     $notices
     * @param list<Issue>                                     $warnings
     * @param list<Issue>                                     $phpDeprecations
     * @param list<Issue>                                     $phpNotices
     * @param list<Issue>                                     $phpWarnings
     * @param non-negative-int                                $numberOfIssuesIgnoredByBaseline
     */
    public function __construct(int $numberOfTests, int $numberOfTestsRun, int $numberOfAssertions, array $testErroredEvents, array $testFailedEvents, array $testConsideredRiskyEvents, array $testSuiteSkippedEvents, array $testSkippedEvents, array $testMarkedIncompleteEvents, array $testTriggeredPhpunitDeprecationEvents, array $testTriggeredPhpunitErrorEvents, array $testTriggeredPhpunitWarningEvents, array $testRunnerTriggeredDeprecationEvents, array $testRunnerTriggeredWarningEvents, array $errors, array $deprecations, array $notices, array $warnings, array $phpDeprecations, array $phpNotices, array $phpWarnings, int $numberOfIssuesIgnoredByBaseline)
    {
    }
    public function numberOfTestsRun() : int
    {
    }
    public function numberOfAssertions() : int
    {
    }
    /**
     * @return list<BeforeFirstTestMethodErrored|Errored>
     */
    public function testErroredEvents() : array
    {
    }
    public function numberOfTestErroredEvents() : int
    {
    }
    public function hasTestErroredEvents() : bool
    {
    }
    /**
     * @return list<Failed>
     */
    public function testFailedEvents() : array
    {
    }
    public function numberOfTestFailedEvents() : int
    {
    }
    public function hasTestFailedEvents() : bool
    {
    }
    /**
     * @return array<string,list<ConsideredRisky>>
     */
    public function testConsideredRiskyEvents() : array
    {
    }
    public function numberOfTestsWithTestConsideredRiskyEvents() : int
    {
    }
    public function hasTestConsideredRiskyEvents() : bool
    {
    }
    /**
     * @return list<TestSuiteSkipped>
     */
    public function testSuiteSkippedEvents() : array
    {
    }
    public function numberOfTestSuiteSkippedEvents() : int
    {
    }
    public function hasTestSuiteSkippedEvents() : bool
    {
    }
    /**
     * @return list<TestSkipped>
     */
    public function testSkippedEvents() : array
    {
    }
    public function numberOfTestSkippedEvents() : int
    {
    }
    public function hasTestSkippedEvents() : bool
    {
    }
    /**
     * @return list<MarkedIncomplete>
     */
    public function testMarkedIncompleteEvents() : array
    {
    }
    public function numberOfTestMarkedIncompleteEvents() : int
    {
    }
    public function hasTestMarkedIncompleteEvents() : bool
    {
    }
    /**
     * @return array<string,list<PhpunitDeprecationTriggered>>
     */
    public function testTriggeredPhpunitDeprecationEvents() : array
    {
    }
    public function numberOfTestsWithTestTriggeredPhpunitDeprecationEvents() : int
    {
    }
    public function hasTestTriggeredPhpunitDeprecationEvents() : bool
    {
    }
    /**
     * @return array<string,list<PhpunitErrorTriggered>>
     */
    public function testTriggeredPhpunitErrorEvents() : array
    {
    }
    public function numberOfTestsWithTestTriggeredPhpunitErrorEvents() : int
    {
    }
    public function hasTestTriggeredPhpunitErrorEvents() : bool
    {
    }
    /**
     * @return array<string,list<PhpunitWarningTriggered>>
     */
    public function testTriggeredPhpunitWarningEvents() : array
    {
    }
    public function numberOfTestsWithTestTriggeredPhpunitWarningEvents() : int
    {
    }
    public function hasTestTriggeredPhpunitWarningEvents() : bool
    {
    }
    /**
     * @return list<TestRunnerDeprecationTriggered>
     */
    public function testRunnerTriggeredDeprecationEvents() : array
    {
    }
    public function numberOfTestRunnerTriggeredDeprecationEvents() : int
    {
    }
    public function hasTestRunnerTriggeredDeprecationEvents() : bool
    {
    }
    /**
     * @return list<TestRunnerWarningTriggered>
     */
    public function testRunnerTriggeredWarningEvents() : array
    {
    }
    public function numberOfTestRunnerTriggeredWarningEvents() : int
    {
    }
    public function hasTestRunnerTriggeredWarningEvents() : bool
    {
    }
    public function wasSuccessful() : bool
    {
    }
    public function wasSuccessfulIgnoringPhpunitWarnings() : bool
    {
    }
    public function wasSuccessfulAndNoTestHasIssues() : bool
    {
    }
    public function hasTestsWithIssues() : bool
    {
    }
    /**
     * @return list<Issue>
     */
    public function errors() : array
    {
    }
    /**
     * @return list<Issue>
     */
    public function deprecations() : array
    {
    }
    /**
     * @return list<Issue>
     */
    public function notices() : array
    {
    }
    /**
     * @return list<Issue>
     */
    public function warnings() : array
    {
    }
    /**
     * @return list<Issue>
     */
    public function phpDeprecations() : array
    {
    }
    /**
     * @return list<Issue>
     */
    public function phpNotices() : array
    {
    }
    /**
     * @return list<Issue>
     */
    public function phpWarnings() : array
    {
    }
    public function hasTests() : bool
    {
    }
    public function hasErrors() : bool
    {
    }
    public function numberOfErrors() : int
    {
    }
    public function hasDeprecations() : bool
    {
    }
    public function hasPhpOrUserDeprecations() : bool
    {
    }
    public function numberOfPhpOrUserDeprecations() : int
    {
    }
    public function hasPhpunitDeprecations() : bool
    {
    }
    public function numberOfPhpunitDeprecations() : int
    {
    }
    public function numberOfDeprecations() : int
    {
    }
    public function hasNotices() : bool
    {
    }
    public function numberOfNotices() : int
    {
    }
    public function hasWarnings() : bool
    {
    }
    public function numberOfWarnings() : int
    {
    }
    public function hasIncompleteTests() : bool
    {
    }
    public function hasRiskyTests() : bool
    {
    }
    public function hasSkippedTests() : bool
    {
    }
    public function hasIssuesIgnoredByBaseline() : bool
    {
    }
    /**
     * @return non-negative-int
     */
    public function numberOfIssuesIgnoredByBaseline() : int
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Collector
{
    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public function __construct(\PHPUnit\Event\Facade $facade, \PHPUnit\TestRunner\IssueFilter $issueFilter)
    {
    }
    public function result() : \PHPUnit\TestRunner\TestResult\TestResult
    {
    }
    public function executionStarted(\PHPUnit\Event\TestRunner\ExecutionStarted $event) : void
    {
    }
    public function testSuiteSkipped(\PHPUnit\Event\TestSuite\Skipped $event) : void
    {
    }
    public function testSuiteStarted(\PHPUnit\Event\TestSuite\Started $event) : void
    {
    }
    public function testSuiteFinished(\PHPUnit\Event\TestSuite\Finished $event) : void
    {
    }
    public function testPrepared() : void
    {
    }
    public function testFinished(\PHPUnit\Event\Test\Finished $event) : void
    {
    }
    public function beforeTestClassMethodErrored(\PHPUnit\Event\Test\BeforeFirstTestMethodErrored $event) : void
    {
    }
    public function testErrored(\PHPUnit\Event\Test\Errored $event) : void
    {
    }
    public function testFailed(\PHPUnit\Event\Test\Failed $event) : void
    {
    }
    public function testMarkedIncomplete(\PHPUnit\Event\Test\MarkedIncomplete $event) : void
    {
    }
    public function testSkipped(\PHPUnit\Event\Test\Skipped $event) : void
    {
    }
    public function testConsideredRisky(\PHPUnit\Event\Test\ConsideredRisky $event) : void
    {
    }
    public function testTriggeredDeprecation(\PHPUnit\Event\Test\DeprecationTriggered $event) : void
    {
    }
    public function testTriggeredPhpDeprecation(\PHPUnit\Event\Test\PhpDeprecationTriggered $event) : void
    {
    }
    public function testTriggeredPhpunitDeprecation(\PHPUnit\Event\Test\PhpunitDeprecationTriggered $event) : void
    {
    }
    public function testTriggeredError(\PHPUnit\Event\Test\ErrorTriggered $event) : void
    {
    }
    public function testTriggeredNotice(\PHPUnit\Event\Test\NoticeTriggered $event) : void
    {
    }
    public function testTriggeredPhpNotice(\PHPUnit\Event\Test\PhpNoticeTriggered $event) : void
    {
    }
    public function testTriggeredWarning(\PHPUnit\Event\Test\WarningTriggered $event) : void
    {
    }
    public function testTriggeredPhpWarning(\PHPUnit\Event\Test\PhpWarningTriggered $event) : void
    {
    }
    public function testTriggeredPhpunitError(\PHPUnit\Event\Test\PhpunitErrorTriggered $event) : void
    {
    }
    public function testTriggeredPhpunitWarning(\PHPUnit\Event\Test\PhpunitWarningTriggered $event) : void
    {
    }
    public function testRunnerTriggeredDeprecation(\PHPUnit\Event\TestRunner\DeprecationTriggered $event) : void
    {
    }
    public function testRunnerTriggeredWarning(\PHPUnit\Event\TestRunner\WarningTriggered $event) : void
    {
    }
    public function hasErroredTests() : bool
    {
    }
    public function hasFailedTests() : bool
    {
    }
    public function hasRiskyTests() : bool
    {
    }
    public function hasSkippedTests() : bool
    {
    }
    public function hasIncompleteTests() : bool
    {
    }
    public function hasDeprecations() : bool
    {
    }
    public function hasNotices() : bool
    {
    }
    public function hasWarnings() : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class PassedTests
{
    public static function instance() : self
    {
    }
    /**
     * @param class-string $className
     */
    public function testClassPassed(string $className) : void
    {
    }
    public function testMethodPassed(\PHPUnit\Event\Code\TestMethod $test, mixed $returnValue) : void
    {
    }
    public function import(self $other) : void
    {
    }
    /**
     * @param class-string $className
     */
    public function hasTestClassPassed(string $className) : bool
    {
    }
    public function hasTestMethodPassed(string $method) : bool
    {
    }
    public function isGreaterThan(string $method, \PHPUnit\Framework\TestSize\TestSize $other) : bool
    {
    }
    public function returnValue(string $method) : mixed
    {
    }
}
namespace PHPUnit\TestRunner\TestResult\Issues;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Issue
{
    /**
     * @param non-empty-string $file
     * @param positive-int     $line
     * @param non-empty-string $description
     */
    public static function from(string $file, int $line, string $description, \PHPUnit\Event\Code\Test $triggeringTest) : self
    {
    }
    public function triggeredBy(\PHPUnit\Event\Code\Test $test) : void
    {
    }
    /**
     * @return non-empty-string
     */
    public function file() : string
    {
    }
    /**
     * @return positive-int
     */
    public function line() : int
    {
    }
    /**
     * @return non-empty-string
     */
    public function description() : string
    {
    }
    /**
     * @return non-empty-array<non-empty-string, array{test: Test, count: int}>
     */
    public function triggeringTests() : array
    {
    }
}
namespace PHPUnit\TestRunner\TestResult;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract readonly class Subscriber
{
    public function __construct(\PHPUnit\TestRunner\TestResult\Collector $collector)
    {
    }
    protected function collector() : \PHPUnit\TestRunner\TestResult\Collector
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestMarkedIncompleteSubscriber extends \PHPUnit\TestRunner\TestResult\Subscriber implements \PHPUnit\Event\Test\MarkedIncompleteSubscriber
{
    public function notify(\PHPUnit\Event\Test\MarkedIncomplete $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredPhpunitErrorSubscriber extends \PHPUnit\TestRunner\TestResult\Subscriber implements \PHPUnit\Event\Test\PhpunitErrorTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\PhpunitErrorTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredWarningSubscriber extends \PHPUnit\TestRunner\TestResult\Subscriber implements \PHPUnit\Event\Test\WarningTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\WarningTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ExecutionStartedSubscriber extends \PHPUnit\TestRunner\TestResult\Subscriber implements \PHPUnit\Event\TestRunner\ExecutionStartedSubscriber
{
    public function notify(\PHPUnit\Event\TestRunner\ExecutionStarted $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestErroredSubscriber extends \PHPUnit\TestRunner\TestResult\Subscriber implements \PHPUnit\Event\Test\ErroredSubscriber
{
    public function notify(\PHPUnit\Event\Test\Errored $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredNoticeSubscriber extends \PHPUnit\TestRunner\TestResult\Subscriber implements \PHPUnit\Event\Test\NoticeTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\NoticeTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredPhpWarningSubscriber extends \PHPUnit\TestRunner\TestResult\Subscriber implements \PHPUnit\Event\Test\PhpWarningTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\PhpWarningTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredPhpNoticeSubscriber extends \PHPUnit\TestRunner\TestResult\Subscriber implements \PHPUnit\Event\Test\PhpNoticeTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\PhpNoticeTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class BeforeTestClassMethodErroredSubscriber extends \PHPUnit\TestRunner\TestResult\Subscriber implements \PHPUnit\Event\Test\BeforeFirstTestMethodErroredSubscriber
{
    public function notify(\PHPUnit\Event\Test\BeforeFirstTestMethodErrored $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestRunnerTriggeredWarningSubscriber extends \PHPUnit\TestRunner\TestResult\Subscriber implements \PHPUnit\Event\TestRunner\WarningTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\TestRunner\WarningTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredPhpunitWarningSubscriber extends \PHPUnit\TestRunner\TestResult\Subscriber implements \PHPUnit\Event\Test\PhpunitWarningTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\PhpunitWarningTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredDeprecationSubscriber extends \PHPUnit\TestRunner\TestResult\Subscriber implements \PHPUnit\Event\Test\DeprecationTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\DeprecationTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestSuiteSkippedSubscriber extends \PHPUnit\TestRunner\TestResult\Subscriber implements \PHPUnit\Event\TestSuite\SkippedSubscriber
{
    public function notify(\PHPUnit\Event\TestSuite\Skipped $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredErrorSubscriber extends \PHPUnit\TestRunner\TestResult\Subscriber implements \PHPUnit\Event\Test\ErrorTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\ErrorTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredPhpDeprecationSubscriber extends \PHPUnit\TestRunner\TestResult\Subscriber implements \PHPUnit\Event\Test\PhpDeprecationTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\PhpDeprecationTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestSkippedSubscriber extends \PHPUnit\TestRunner\TestResult\Subscriber implements \PHPUnit\Event\Test\SkippedSubscriber
{
    public function notify(\PHPUnit\Event\Test\Skipped $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestFailedSubscriber extends \PHPUnit\TestRunner\TestResult\Subscriber implements \PHPUnit\Event\Test\FailedSubscriber
{
    public function notify(\PHPUnit\Event\Test\Failed $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredPhpunitDeprecationSubscriber extends \PHPUnit\TestRunner\TestResult\Subscriber implements \PHPUnit\Event\Test\PhpunitDeprecationTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\PhpunitDeprecationTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestConsideredRiskySubscriber extends \PHPUnit\TestRunner\TestResult\Subscriber implements \PHPUnit\Event\Test\ConsideredRiskySubscriber
{
    public function notify(\PHPUnit\Event\Test\ConsideredRisky $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestRunnerTriggeredDeprecationSubscriber extends \PHPUnit\TestRunner\TestResult\Subscriber implements \PHPUnit\Event\TestRunner\DeprecationTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\TestRunner\DeprecationTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestSuiteStartedSubscriber extends \PHPUnit\TestRunner\TestResult\Subscriber implements \PHPUnit\Event\TestSuite\StartedSubscriber
{
    public function notify(\PHPUnit\Event\TestSuite\Started $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestPreparedSubscriber extends \PHPUnit\TestRunner\TestResult\Subscriber implements \PHPUnit\Event\Test\PreparedSubscriber
{
    public function notify(\PHPUnit\Event\Test\Prepared $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestSuiteFinishedSubscriber extends \PHPUnit\TestRunner\TestResult\Subscriber implements \PHPUnit\Event\TestSuite\FinishedSubscriber
{
    public function notify(\PHPUnit\Event\TestSuite\Finished $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestFinishedSubscriber extends \PHPUnit\TestRunner\TestResult\Subscriber implements \PHPUnit\Event\Test\FinishedSubscriber
{
    public function notify(\PHPUnit\Event\Test\Finished $event) : void
    {
    }
}
namespace PHPUnit\Metadata;

interface Exception extends \PHPUnit\Exception
{
}
final class NoVersionRequirementException extends \RuntimeException implements \PHPUnit\Metadata\Exception
{
}
final class InvalidVersionRequirementException extends \RuntimeException implements \PHPUnit\Metadata\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ReflectionException extends \RuntimeException implements \PHPUnit\Exception
{
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract readonly class Metadata
{
    /**
     * @param non-negative-int $priority
     */
    public static function after(int $priority) : \PHPUnit\Metadata\After
    {
    }
    /**
     * @param non-negative-int $priority
     */
    public static function afterClass(int $priority) : \PHPUnit\Metadata\AfterClass
    {
    }
    public static function backupGlobalsOnClass(bool $enabled) : \PHPUnit\Metadata\BackupGlobals
    {
    }
    public static function backupGlobalsOnMethod(bool $enabled) : \PHPUnit\Metadata\BackupGlobals
    {
    }
    public static function backupStaticPropertiesOnClass(bool $enabled) : \PHPUnit\Metadata\BackupStaticProperties
    {
    }
    public static function backupStaticPropertiesOnMethod(bool $enabled) : \PHPUnit\Metadata\BackupStaticProperties
    {
    }
    /**
     * @param non-negative-int $priority
     */
    public static function before(int $priority) : \PHPUnit\Metadata\Before
    {
    }
    /**
     * @param non-negative-int $priority
     */
    public static function beforeClass(int $priority) : \PHPUnit\Metadata\BeforeClass
    {
    }
    /**
     * @param class-string $className
     */
    public static function coversClass(string $className) : \PHPUnit\Metadata\CoversClass
    {
    }
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public static function coversMethod(string $className, string $methodName) : \PHPUnit\Metadata\CoversMethod
    {
    }
    /**
     * @param non-empty-string $functionName
     */
    public static function coversFunction(string $functionName) : \PHPUnit\Metadata\CoversFunction
    {
    }
    public static function coversNothingOnClass() : \PHPUnit\Metadata\CoversNothing
    {
    }
    public static function coversNothingOnMethod() : \PHPUnit\Metadata\CoversNothing
    {
    }
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public static function dataProvider(string $className, string $methodName) : \PHPUnit\Metadata\DataProvider
    {
    }
    /**
     * @param class-string $className
     */
    public static function dependsOnClass(string $className, bool $deepClone, bool $shallowClone) : \PHPUnit\Metadata\DependsOnClass
    {
    }
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public static function dependsOnMethod(string $className, string $methodName, bool $deepClone, bool $shallowClone) : \PHPUnit\Metadata\DependsOnMethod
    {
    }
    public static function disableReturnValueGenerationForTestDoubles() : \PHPUnit\Metadata\DisableReturnValueGenerationForTestDoubles
    {
    }
    public static function doesNotPerformAssertionsOnClass() : \PHPUnit\Metadata\DoesNotPerformAssertions
    {
    }
    public static function doesNotPerformAssertionsOnMethod() : \PHPUnit\Metadata\DoesNotPerformAssertions
    {
    }
    /**
     * @param non-empty-string $globalVariableName
     */
    public static function excludeGlobalVariableFromBackupOnClass(string $globalVariableName) : \PHPUnit\Metadata\ExcludeGlobalVariableFromBackup
    {
    }
    /**
     * @param non-empty-string $globalVariableName
     */
    public static function excludeGlobalVariableFromBackupOnMethod(string $globalVariableName) : \PHPUnit\Metadata\ExcludeGlobalVariableFromBackup
    {
    }
    /**
     * @param class-string     $className
     * @param non-empty-string $propertyName
     */
    public static function excludeStaticPropertyFromBackupOnClass(string $className, string $propertyName) : \PHPUnit\Metadata\ExcludeStaticPropertyFromBackup
    {
    }
    /**
     * @param class-string     $className
     * @param non-empty-string $propertyName
     */
    public static function excludeStaticPropertyFromBackupOnMethod(string $className, string $propertyName) : \PHPUnit\Metadata\ExcludeStaticPropertyFromBackup
    {
    }
    /**
     * @param non-empty-string $groupName
     */
    public static function groupOnClass(string $groupName) : \PHPUnit\Metadata\Group
    {
    }
    /**
     * @param non-empty-string $groupName
     */
    public static function groupOnMethod(string $groupName) : \PHPUnit\Metadata\Group
    {
    }
    public static function ignoreDeprecationsOnClass() : \PHPUnit\Metadata\IgnoreDeprecations
    {
    }
    public static function ignoreDeprecationsOnMethod() : \PHPUnit\Metadata\IgnoreDeprecations
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public static function ignorePhpunitDeprecationsOnClass() : \PHPUnit\Metadata\IgnorePhpunitDeprecations
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public static function ignorePhpunitDeprecationsOnMethod() : \PHPUnit\Metadata\IgnorePhpunitDeprecations
    {
    }
    /**
     * @param non-negative-int $priority
     */
    public static function postCondition(int $priority) : \PHPUnit\Metadata\PostCondition
    {
    }
    /**
     * @param non-negative-int $priority
     */
    public static function preCondition(int $priority) : \PHPUnit\Metadata\PreCondition
    {
    }
    public static function preserveGlobalStateOnClass(bool $enabled) : \PHPUnit\Metadata\PreserveGlobalState
    {
    }
    public static function preserveGlobalStateOnMethod(bool $enabled) : \PHPUnit\Metadata\PreserveGlobalState
    {
    }
    /**
     * @param non-empty-string $functionName
     */
    public static function requiresFunctionOnClass(string $functionName) : \PHPUnit\Metadata\RequiresFunction
    {
    }
    /**
     * @param non-empty-string $functionName
     */
    public static function requiresFunctionOnMethod(string $functionName) : \PHPUnit\Metadata\RequiresFunction
    {
    }
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public static function requiresMethodOnClass(string $className, string $methodName) : \PHPUnit\Metadata\RequiresMethod
    {
    }
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public static function requiresMethodOnMethod(string $className, string $methodName) : \PHPUnit\Metadata\RequiresMethod
    {
    }
    /**
     * @param non-empty-string $operatingSystem
     */
    public static function requiresOperatingSystemOnClass(string $operatingSystem) : \PHPUnit\Metadata\RequiresOperatingSystem
    {
    }
    /**
     * @param non-empty-string $operatingSystem
     */
    public static function requiresOperatingSystemOnMethod(string $operatingSystem) : \PHPUnit\Metadata\RequiresOperatingSystem
    {
    }
    /**
     * @param non-empty-string $operatingSystemFamily
     */
    public static function requiresOperatingSystemFamilyOnClass(string $operatingSystemFamily) : \PHPUnit\Metadata\RequiresOperatingSystemFamily
    {
    }
    /**
     * @param non-empty-string $operatingSystemFamily
     */
    public static function requiresOperatingSystemFamilyOnMethod(string $operatingSystemFamily) : \PHPUnit\Metadata\RequiresOperatingSystemFamily
    {
    }
    public static function requiresPhpOnClass(\PHPUnit\Metadata\Version\Requirement $versionRequirement) : \PHPUnit\Metadata\RequiresPhp
    {
    }
    public static function requiresPhpOnMethod(\PHPUnit\Metadata\Version\Requirement $versionRequirement) : \PHPUnit\Metadata\RequiresPhp
    {
    }
    /**
     * @param non-empty-string $extension
     */
    public static function requiresPhpExtensionOnClass(string $extension, ?\PHPUnit\Metadata\Version\Requirement $versionRequirement) : \PHPUnit\Metadata\RequiresPhpExtension
    {
    }
    /**
     * @param non-empty-string $extension
     */
    public static function requiresPhpExtensionOnMethod(string $extension, ?\PHPUnit\Metadata\Version\Requirement $versionRequirement) : \PHPUnit\Metadata\RequiresPhpExtension
    {
    }
    public static function requiresPhpunitOnClass(\PHPUnit\Metadata\Version\Requirement $versionRequirement) : \PHPUnit\Metadata\RequiresPhpunit
    {
    }
    public static function requiresPhpunitOnMethod(\PHPUnit\Metadata\Version\Requirement $versionRequirement) : \PHPUnit\Metadata\RequiresPhpunit
    {
    }
    /**
     * @param class-string<Extension> $extensionClass
     */
    public static function requiresPhpunitExtensionOnClass(string $extensionClass) : \PHPUnit\Metadata\RequiresPhpunitExtension
    {
    }
    /**
     * @param class-string<Extension> $extensionClass
     */
    public static function requiresPhpunitExtensionOnMethod(string $extensionClass) : \PHPUnit\Metadata\RequiresPhpunitExtension
    {
    }
    /**
     * @param non-empty-string $setting
     * @param non-empty-string $value
     */
    public static function requiresSettingOnClass(string $setting, string $value) : \PHPUnit\Metadata\RequiresSetting
    {
    }
    /**
     * @param non-empty-string $setting
     * @param non-empty-string $value
     */
    public static function requiresSettingOnMethod(string $setting, string $value) : \PHPUnit\Metadata\RequiresSetting
    {
    }
    public static function runClassInSeparateProcess() : \PHPUnit\Metadata\RunClassInSeparateProcess
    {
    }
    public static function runTestsInSeparateProcesses() : \PHPUnit\Metadata\RunTestsInSeparateProcesses
    {
    }
    public static function runInSeparateProcess() : \PHPUnit\Metadata\RunInSeparateProcess
    {
    }
    public static function test() : \PHPUnit\Metadata\Test
    {
    }
    /**
     * @param non-empty-string $text
     */
    public static function testDoxOnClass(string $text) : \PHPUnit\Metadata\TestDox
    {
    }
    /**
     * @param non-empty-string $text
     */
    public static function testDoxOnMethod(string $text) : \PHPUnit\Metadata\TestDox
    {
    }
    /**
     * @param array<array<mixed>> $data
     * @param ?non-empty-string   $name
     */
    public static function testWith(array $data, ?string $name = null) : \PHPUnit\Metadata\TestWith
    {
    }
    /**
     * @param class-string $className
     */
    public static function usesClass(string $className) : \PHPUnit\Metadata\UsesClass
    {
    }
    /**
     * @param non-empty-string $functionName
     */
    public static function usesFunction(string $functionName) : \PHPUnit\Metadata\UsesFunction
    {
    }
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public static function usesMethod(string $className, string $methodName) : \PHPUnit\Metadata\UsesMethod
    {
    }
    public static function withoutErrorHandler() : \PHPUnit\Metadata\WithoutErrorHandler
    {
    }
    /**
     * @param 0|1 $level
     */
    protected function __construct(int $level)
    {
    }
    public function isClassLevel() : bool
    {
    }
    public function isMethodLevel() : bool
    {
    }
    /**
     * @phpstan-assert-if-true After $this
     */
    public function isAfter() : bool
    {
    }
    /**
     * @phpstan-assert-if-true AfterClass $this
     */
    public function isAfterClass() : bool
    {
    }
    /**
     * @phpstan-assert-if-true BackupGlobals $this
     */
    public function isBackupGlobals() : bool
    {
    }
    /**
     * @phpstan-assert-if-true BackupStaticProperties $this
     */
    public function isBackupStaticProperties() : bool
    {
    }
    /**
     * @phpstan-assert-if-true BeforeClass $this
     */
    public function isBeforeClass() : bool
    {
    }
    /**
     * @phpstan-assert-if-true Before $this
     */
    public function isBefore() : bool
    {
    }
    /**
     * @phpstan-assert-if-true CoversClass $this
     */
    public function isCoversClass() : bool
    {
    }
    /**
     * @phpstan-assert-if-true CoversFunction $this
     */
    public function isCoversFunction() : bool
    {
    }
    /**
     * @phpstan-assert-if-true CoversMethod $this
     */
    public function isCoversMethod() : bool
    {
    }
    /**
     * @phpstan-assert-if-true CoversNothing $this
     */
    public function isCoversNothing() : bool
    {
    }
    /**
     * @phpstan-assert-if-true DataProvider $this
     */
    public function isDataProvider() : bool
    {
    }
    /**
     * @phpstan-assert-if-true DependsOnClass $this
     */
    public function isDependsOnClass() : bool
    {
    }
    /**
     * @phpstan-assert-if-true DependsOnMethod $this
     */
    public function isDependsOnMethod() : bool
    {
    }
    /**
     * @phpstan-assert-if-true DisableReturnValueGenerationForTestDoubles $this
     */
    public function isDisableReturnValueGenerationForTestDoubles() : bool
    {
    }
    /**
     * @phpstan-assert-if-true DoesNotPerformAssertions $this
     */
    public function isDoesNotPerformAssertions() : bool
    {
    }
    /**
     * @phpstan-assert-if-true ExcludeGlobalVariableFromBackup $this
     */
    public function isExcludeGlobalVariableFromBackup() : bool
    {
    }
    /**
     * @phpstan-assert-if-true ExcludeStaticPropertyFromBackup $this
     */
    public function isExcludeStaticPropertyFromBackup() : bool
    {
    }
    /**
     * @phpstan-assert-if-true Group $this
     */
    public function isGroup() : bool
    {
    }
    /**
     * @phpstan-assert-if-true IgnoreDeprecations $this
     */
    public function isIgnoreDeprecations() : bool
    {
    }
    /**
     * @phpstan-assert-if-true IgnorePhpunitDeprecations $this
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function isIgnorePhpunitDeprecations() : bool
    {
    }
    /**
     * @phpstan-assert-if-true RunClassInSeparateProcess $this
     */
    public function isRunClassInSeparateProcess() : bool
    {
    }
    /**
     * @phpstan-assert-if-true RunInSeparateProcess $this
     */
    public function isRunInSeparateProcess() : bool
    {
    }
    /**
     * @phpstan-assert-if-true RunTestsInSeparateProcesses $this
     */
    public function isRunTestsInSeparateProcesses() : bool
    {
    }
    /**
     * @phpstan-assert-if-true Test $this
     */
    public function isTest() : bool
    {
    }
    /**
     * @phpstan-assert-if-true PreCondition $this
     */
    public function isPreCondition() : bool
    {
    }
    /**
     * @phpstan-assert-if-true PostCondition $this
     */
    public function isPostCondition() : bool
    {
    }
    /**
     * @phpstan-assert-if-true PreserveGlobalState $this
     */
    public function isPreserveGlobalState() : bool
    {
    }
    /**
     * @phpstan-assert-if-true RequiresMethod $this
     */
    public function isRequiresMethod() : bool
    {
    }
    /**
     * @phpstan-assert-if-true RequiresFunction $this
     */
    public function isRequiresFunction() : bool
    {
    }
    /**
     * @phpstan-assert-if-true RequiresOperatingSystem $this
     */
    public function isRequiresOperatingSystem() : bool
    {
    }
    /**
     * @phpstan-assert-if-true RequiresOperatingSystemFamily $this
     */
    public function isRequiresOperatingSystemFamily() : bool
    {
    }
    /**
     * @phpstan-assert-if-true RequiresPhp $this
     */
    public function isRequiresPhp() : bool
    {
    }
    /**
     * @phpstan-assert-if-true RequiresPhpExtension $this
     */
    public function isRequiresPhpExtension() : bool
    {
    }
    /**
     * @phpstan-assert-if-true RequiresPhpunit $this
     */
    public function isRequiresPhpunit() : bool
    {
    }
    /**
     * @phpstan-assert-if-true RequiresPhpunitExtension $this
     */
    public function isRequiresPhpunitExtension() : bool
    {
    }
    /**
     * @phpstan-assert-if-true RequiresSetting $this
     */
    public function isRequiresSetting() : bool
    {
    }
    /**
     * @phpstan-assert-if-true TestDox $this
     */
    public function isTestDox() : bool
    {
    }
    /**
     * @phpstan-assert-if-true TestWith $this
     */
    public function isTestWith() : bool
    {
    }
    /**
     * @phpstan-assert-if-true UsesClass $this
     */
    public function isUsesClass() : bool
    {
    }
    /**
     * @phpstan-assert-if-true UsesFunction $this
     */
    public function isUsesFunction() : bool
    {
    }
    /**
     * @phpstan-assert-if-true UsesMethod $this
     */
    public function isUsesMethod() : bool
    {
    }
    /**
     * @phpstan-assert-if-true WithoutErrorHandler $this
     */
    public function isWithoutErrorHandler() : bool
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RunTestsInSeparateProcesses extends \PHPUnit\Metadata\Metadata
{
    public function isRunTestsInSeparateProcesses() : true
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class AfterClass extends \PHPUnit\Metadata\Metadata
{
    public function isAfterClass() : true
    {
    }
    /**
     * @return non-negative-int
     */
    public function priority() : int
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RequiresSetting extends \PHPUnit\Metadata\Metadata
{
    public function isRequiresSetting() : true
    {
    }
    /**
     * @return non-empty-string
     */
    public function setting() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function value() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RunClassInSeparateProcess extends \PHPUnit\Metadata\Metadata
{
    public function isRunClassInSeparateProcess() : true
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class DoesNotPerformAssertions extends \PHPUnit\Metadata\Metadata
{
    public function isDoesNotPerformAssertions() : true
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class CoversMethod extends \PHPUnit\Metadata\Metadata
{
    public function isCoversMethod() : true
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function methodName() : string
    {
    }
    /**
     * @return non-empty-string
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function asStringForCodeUnitMapper() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class UsesFunction extends \PHPUnit\Metadata\Metadata
{
    /**
     * @param 0|1              $level
     * @param non-empty-string $functionName
     */
    public function __construct(int $level, string $functionName)
    {
    }
    public function isUsesFunction() : true
    {
    }
    /**
     * @return non-empty-string
     */
    public function functionName() : string
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function asStringForCodeUnitMapper() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class CoversClass extends \PHPUnit\Metadata\Metadata
{
    public function isCoversClass() : true
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    /**
     * @return class-string
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function asStringForCodeUnitMapper() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Test extends \PHPUnit\Metadata\Metadata
{
    public function isTest() : true
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class DataProvider extends \PHPUnit\Metadata\Metadata
{
    public function isDataProvider() : true
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function methodName() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class PostCondition extends \PHPUnit\Metadata\Metadata
{
    public function isPostCondition() : true
    {
    }
    /**
     * @return non-negative-int
     */
    public function priority() : int
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class DependsOnMethod extends \PHPUnit\Metadata\Metadata
{
    public function isDependsOnMethod() : true
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function methodName() : string
    {
    }
    public function deepClone() : bool
    {
    }
    public function shallowClone() : bool
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class PreserveGlobalState extends \PHPUnit\Metadata\Metadata
{
    public function isPreserveGlobalState() : true
    {
    }
    public function enabled() : bool
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class UsesMethod extends \PHPUnit\Metadata\Metadata
{
    public function isUsesMethod() : true
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function methodName() : string
    {
    }
    /**
     * @return non-empty-string
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function asStringForCodeUnitMapper() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class DisableReturnValueGenerationForTestDoubles extends \PHPUnit\Metadata\Metadata
{
    public function isDisableReturnValueGenerationForTestDoubles() : true
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RequiresMethod extends \PHPUnit\Metadata\Metadata
{
    public function isRequiresMethod() : true
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function methodName() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class UsesClass extends \PHPUnit\Metadata\Metadata
{
    public function isUsesClass() : true
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    /**
     * @return class-string
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function asStringForCodeUnitMapper() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class DependsOnClass extends \PHPUnit\Metadata\Metadata
{
    public function isDependsOnClass() : true
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    public function deepClone() : bool
    {
    }
    public function shallowClone() : bool
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RequiresPhpExtension extends \PHPUnit\Metadata\Metadata
{
    public function isRequiresPhpExtension() : true
    {
    }
    /**
     * @return non-empty-string
     */
    public function extension() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->versionRequirement
     */
    public function hasVersionRequirement() : bool
    {
    }
    /**
     * @throws NoVersionRequirementException
     */
    public function versionRequirement() : \PHPUnit\Metadata\Version\Requirement
    {
    }
}
namespace PHPUnit\Metadata\Api;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class DataProvider
{
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     *
     * @throws InvalidDataProviderException
     *
     * @return ?array<array<mixed>>
     */
    public function providedData(string $className, string $methodName) : ?array
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Dependencies
{
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     *
     * @return list<ExecutionOrderDependency>
     */
    public static function dependencies(string $className, string $methodName) : array
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CodeCoverage
{
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     *
     * @throws CodeCoverageException
     *
     * @return array<string,list<int>>|false
     */
    public function linesToBeCovered(string $className, string $methodName) : array|false
    {
    }
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     *
     * @throws CodeCoverageException
     *
     * @return array<string,list<int>>
     */
    public function linesToBeUsed(string $className, string $methodName) : array
    {
    }
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public function shouldCodeCoverageBeCollectedFor(string $className, string $methodName) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Groups
{
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     *
     * @return list<non-empty-string>
     */
    public function groups(string $className, string $methodName, bool $includeVirtual = true) : array
    {
    }
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public function size(string $className, string $methodName) : \PHPUnit\Framework\TestSize\TestSize
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Requirements
{
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     *
     * @return list<string>
     */
    public function requirementsNotSatisfiedFor(string $className, string $methodName) : array
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class HookMethods
{
    /**
     * @param class-string<TestCase> $className
     *
     * @return array{beforeClass: HookMethodCollection, before: HookMethodCollection, preCondition: HookMethodCollection, postCondition: HookMethodCollection, after: HookMethodCollection, afterClass: HookMethodCollection}
     */
    public function hookMethods(string $className) : array
    {
    }
}
namespace PHPUnit\Metadata\Parser;

/**
 * Attribute information is static within a single PHP process.
 * It is therefore okay to use a Singleton registry here.
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Registry
{
    public static function parser() : \PHPUnit\Metadata\Parser\Parser
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface Parser
{
    /**
     * @param class-string $className
     */
    public function forClass(string $className) : \PHPUnit\Metadata\MetadataCollection;
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public function forMethod(string $className, string $methodName) : \PHPUnit\Metadata\MetadataCollection;
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public function forClassAndMethod(string $className, string $methodName) : \PHPUnit\Metadata\MetadataCollection;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CachingParser implements \PHPUnit\Metadata\Parser\Parser
{
    public function __construct(\PHPUnit\Metadata\Parser\Parser $reader)
    {
    }
    /**
     * @param class-string $className
     */
    public function forClass(string $className) : \PHPUnit\Metadata\MetadataCollection
    {
    }
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public function forMethod(string $className, string $methodName) : \PHPUnit\Metadata\MetadataCollection
    {
    }
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public function forClassAndMethod(string $className, string $methodName) : \PHPUnit\Metadata\MetadataCollection
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class AttributeParser implements \PHPUnit\Metadata\Parser\Parser
{
    /**
     * @param class-string $className
     */
    public function forClass(string $className) : \PHPUnit\Metadata\MetadataCollection
    {
    }
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public function forMethod(string $className, string $methodName) : \PHPUnit\Metadata\MetadataCollection
    {
    }
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public function forClassAndMethod(string $className, string $methodName) : \PHPUnit\Metadata\MetadataCollection
    {
    }
}
namespace PHPUnit\Metadata;

/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class BackupGlobals extends \PHPUnit\Metadata\Metadata
{
    public function isBackupGlobals() : true
    {
    }
    public function enabled() : bool
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RequiresPhp extends \PHPUnit\Metadata\Metadata
{
    public function isRequiresPhp() : true
    {
    }
    public function versionRequirement() : \PHPUnit\Metadata\Version\Requirement
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RequiresPhpunit extends \PHPUnit\Metadata\Metadata
{
    public function isRequiresPhpunit() : true
    {
    }
    public function versionRequirement() : \PHPUnit\Metadata\Version\Requirement
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RunInSeparateProcess extends \PHPUnit\Metadata\Metadata
{
    public function isRunInSeparateProcess() : true
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Group extends \PHPUnit\Metadata\Metadata
{
    public function isGroup() : true
    {
    }
    /**
     * @return non-empty-string
     */
    public function groupName() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class After extends \PHPUnit\Metadata\Metadata
{
    public function isAfter() : true
    {
    }
    /**
     * @return non-negative-int
     */
    public function priority() : int
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RequiresOperatingSystem extends \PHPUnit\Metadata\Metadata
{
    /**
     * @param 0|1              $level
     * @param non-empty-string $operatingSystem
     */
    public function __construct(int $level, string $operatingSystem)
    {
    }
    public function isRequiresOperatingSystem() : true
    {
    }
    /**
     * @return non-empty-string
     */
    public function operatingSystem() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RequiresPhpunitExtension extends \PHPUnit\Metadata\Metadata
{
    /**
     * @param class-string<Extension> $extensionClass
     */
    public function __construct(int $level, string $extensionClass)
    {
    }
    public function isRequiresPhpunitExtension() : true
    {
    }
    /**
     * @return class-string<Extension>
     */
    public function extensionClass() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestDox extends \PHPUnit\Metadata\Metadata
{
    public function isTestDox() : true
    {
    }
    /**
     * @return non-empty-string
     */
    public function text() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RequiresFunction extends \PHPUnit\Metadata\Metadata
{
    public function isRequiresFunction() : true
    {
    }
    /**
     * @return non-empty-string
     */
    public function functionName() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class BeforeClass extends \PHPUnit\Metadata\Metadata
{
    public function isBeforeClass() : true
    {
    }
    /**
     * @return non-negative-int
     */
    public function priority() : int
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class CoversNothing extends \PHPUnit\Metadata\Metadata
{
    public function isCoversNothing() : true
    {
    }
}
namespace PHPUnit\Metadata\Version;

/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract readonly class Requirement
{
    /**
     * @throws InvalidVersionOperatorException
     * @throws InvalidVersionRequirementException
     */
    public static function from(string $versionRequirement) : self
    {
    }
    public abstract function isSatisfiedBy(string $version) : bool;
    public abstract function asString() : string;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ConstraintRequirement extends \PHPUnit\Metadata\Version\Requirement
{
    public function __construct(\PharIo\Version\VersionConstraint $constraint)
    {
    }
    public function isSatisfiedBy(string $version) : bool
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ComparisonRequirement extends \PHPUnit\Metadata\Version\Requirement
{
    public function __construct(string $version, \PHPUnit\Util\VersionComparisonOperator $operator)
    {
    }
    public function isSatisfiedBy(string $version) : bool
    {
    }
    public function asString() : string
    {
    }
}
namespace PHPUnit\Metadata;

/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Before extends \PHPUnit\Metadata\Metadata
{
    public function isBefore() : true
    {
    }
    /**
     * @return non-negative-int
     */
    public function priority() : int
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class CoversFunction extends \PHPUnit\Metadata\Metadata
{
    public function isCoversFunction() : true
    {
    }
    /**
     * @return non-empty-string
     */
    public function functionName() : string
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function asStringForCodeUnitMapper() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RequiresOperatingSystemFamily extends \PHPUnit\Metadata\Metadata
{
    public function isRequiresOperatingSystemFamily() : true
    {
    }
    /**
     * @return non-empty-string
     */
    public function operatingSystemFamily() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class BackupStaticProperties extends \PHPUnit\Metadata\Metadata
{
    public function isBackupStaticProperties() : true
    {
    }
    public function enabled() : bool
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class IgnoreDeprecations extends \PHPUnit\Metadata\Metadata
{
    public function isIgnoreDeprecations() : true
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ExcludeGlobalVariableFromBackup extends \PHPUnit\Metadata\Metadata
{
    public function isExcludeGlobalVariableFromBackup() : true
    {
    }
    /**
     * @return non-empty-string
     */
    public function globalVariableName() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class IgnorePhpunitDeprecations extends \PHPUnit\Metadata\Metadata
{
    public function isIgnorePhpunitDeprecations() : true
    {
    }
}
/**
 * @template-implements IteratorAggregate<int, Metadata>
 *
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class MetadataCollection implements \Countable, \IteratorAggregate
{
    /**
     * @param list<Metadata> $metadata
     */
    public static function fromArray(array $metadata) : self
    {
    }
    /**
     * @return list<Metadata>
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function isEmpty() : bool
    {
    }
    public function isNotEmpty() : bool
    {
    }
    public function getIterator() : \PHPUnit\Metadata\MetadataCollectionIterator
    {
    }
    public function mergeWith(self $other) : self
    {
    }
    public function isClassLevel() : self
    {
    }
    public function isMethodLevel() : self
    {
    }
    public function isAfter() : self
    {
    }
    public function isAfterClass() : self
    {
    }
    public function isBackupGlobals() : self
    {
    }
    public function isBackupStaticProperties() : self
    {
    }
    public function isBeforeClass() : self
    {
    }
    public function isBefore() : self
    {
    }
    public function isCoversClass() : self
    {
    }
    public function isCoversFunction() : self
    {
    }
    public function isCoversMethod() : self
    {
    }
    public function isExcludeGlobalVariableFromBackup() : self
    {
    }
    public function isExcludeStaticPropertyFromBackup() : self
    {
    }
    public function isCoversNothing() : self
    {
    }
    public function isDataProvider() : self
    {
    }
    public function isDepends() : self
    {
    }
    public function isDependsOnClass() : self
    {
    }
    public function isDependsOnMethod() : self
    {
    }
    public function isDisableReturnValueGenerationForTestDoubles() : self
    {
    }
    public function isDoesNotPerformAssertions() : self
    {
    }
    public function isGroup() : self
    {
    }
    public function isIgnoreDeprecations() : self
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function isIgnorePhpunitDeprecations() : self
    {
    }
    public function isRunClassInSeparateProcess() : self
    {
    }
    public function isRunInSeparateProcess() : self
    {
    }
    public function isRunTestsInSeparateProcesses() : self
    {
    }
    public function isTest() : self
    {
    }
    public function isPreCondition() : self
    {
    }
    public function isPostCondition() : self
    {
    }
    public function isPreserveGlobalState() : self
    {
    }
    public function isRequiresMethod() : self
    {
    }
    public function isRequiresFunction() : self
    {
    }
    public function isRequiresOperatingSystem() : self
    {
    }
    public function isRequiresOperatingSystemFamily() : self
    {
    }
    public function isRequiresPhp() : self
    {
    }
    public function isRequiresPhpExtension() : self
    {
    }
    public function isRequiresPhpunit() : self
    {
    }
    public function isRequiresPhpunitExtension() : self
    {
    }
    public function isRequiresSetting() : self
    {
    }
    public function isTestDox() : self
    {
    }
    public function isTestWith() : self
    {
    }
    public function isUsesClass() : self
    {
    }
    public function isUsesFunction() : self
    {
    }
    public function isUsesMethod() : self
    {
    }
    public function isWithoutErrorHandler() : self
    {
    }
}
/**
 * @template-implements Iterator<int, Metadata>
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class MetadataCollectionIterator implements \Iterator
{
    public function __construct(\PHPUnit\Metadata\MetadataCollection $metadata)
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\Metadata\Metadata
    {
    }
    public function next() : void
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class PreCondition extends \PHPUnit\Metadata\Metadata
{
    public function isPreCondition() : true
    {
    }
    /**
     * @return non-negative-int
     */
    public function priority() : int
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestWith extends \PHPUnit\Metadata\Metadata
{
    public function isTestWith() : true
    {
    }
    /**
     * @return array<array<mixed>>
     */
    public function data() : array
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->name
     */
    public function hasName() : bool
    {
    }
    /**
     * @return ?non-empty-string
     */
    public function name() : ?string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class WithoutErrorHandler extends \PHPUnit\Metadata\Metadata
{
    public function isWithoutErrorHandler() : true
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ExcludeStaticPropertyFromBackup extends \PHPUnit\Metadata\Metadata
{
    public function isExcludeStaticPropertyFromBackup() : true
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function propertyName() : string
    {
    }
}
namespace PHPUnit\Util;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This interface is not covered by the backward compatibility promise for PHPUnit
 */
interface Exception extends \Throwable
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvalidVersionOperatorException extends \RuntimeException implements \PHPUnit\Util\Exception
{
    public function __construct(string $operator)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvalidJsonException extends \RuntimeException implements \PHPUnit\Util\Exception
{
}
namespace PHPUnit\Util\PHP;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class PhpProcessException extends \RuntimeException implements \PHPUnit\Util\Exception
{
}
namespace PHPUnit\Util;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvalidDirectoryException extends \RuntimeException implements \PHPUnit\Util\Exception
{
    public function __construct(string $directory)
    {
    }
}
namespace PHPUnit\Util\Xml;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class XmlException extends \RuntimeException implements \PHPUnit\Util\Exception
{
}
namespace PHPUnit\Util;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class ExcludeList
{
    /**
     * @param non-empty-string $directory
     *
     * @throws InvalidDirectoryException
     */
    public static function addDirectory(string $directory) : void
    {
    }
    public function __construct(?bool $enabled = null)
    {
    }
    /**
     * @return list<string>
     */
    public function getExcludedDirectories() : array
    {
    }
    public function isExcluded(string $file) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Xml
{
    /**
     * Escapes a string for the use in XML documents.
     *
     * Any Unicode character is allowed, excluding the surrogate blocks, FFFE,
     * and FFFF (not even as character reference).
     *
     * @see https://www.w3.org/TR/xml/#charsets
     */
    public static function prepareString(string $string) : string
    {
    }
}
namespace PHPUnit\Util\Xml;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Loader
{
    /**
     * @throws XmlException
     */
    public function loadFile(string $filename) : \DOMDocument
    {
    }
    /**
     * @throws XmlException
     */
    public function load(string $actual, ?string $filename = null) : \DOMDocument
    {
    }
}
namespace PHPUnit\Util;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Test
{
    public static function isTestMethod(\ReflectionMethod $method) : bool
    {
    }
}
namespace PHPUnit\Util\PHP;

/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Result
{
    public function __construct(string $stdout, string $stderr)
    {
    }
    public function stdout() : string
    {
    }
    public function stderr() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This interface is not covered by the backward compatibility promise for PHPUnit
 */
interface JobRunner
{
    public function run(\PHPUnit\Util\PHP\Job $job) : \PHPUnit\Util\PHP\Result;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class DefaultJobRunner implements \PHPUnit\Util\PHP\JobRunner
{
    /**
     * @throws PhpProcessException
     */
    public function run(\PHPUnit\Util\PHP\Job $job) : \PHPUnit\Util\PHP\Result
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Job
{
    /**
     * @param non-empty-string       $code
     * @param list<string>           $phpSettings
     * @param array<string, string>  $environmentVariables
     * @param list<non-empty-string> $arguments
     * @param ?non-empty-string      $input
     */
    public function __construct(string $code, array $phpSettings = [], array $environmentVariables = [], array $arguments = [], ?string $input = null, bool $redirectErrors = false)
    {
    }
    /**
     * @return non-empty-string
     */
    public function code() : string
    {
    }
    /**
     * @return list<string>
     */
    public function phpSettings() : array
    {
    }
    /**
     * @phpstan-assert-if-true !empty $this->environmentVariables
     */
    public function hasEnvironmentVariables() : bool
    {
    }
    /**
     * @return array<string, string>
     */
    public function environmentVariables() : array
    {
    }
    /**
     * @phpstan-assert-if-true !empty $this->arguments
     */
    public function hasArguments() : bool
    {
    }
    /**
     * @return list<non-empty-string>
     */
    public function arguments() : array
    {
    }
    /**
     * @phpstan-assert-if-true !empty $this->input
     */
    public function hasInput() : bool
    {
    }
    /**
     * @throws PhpProcessException
     *
     * @return non-empty-string
     */
    public function input() : string
    {
    }
    public function redirectErrors() : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class JobRunnerRegistry
{
    public static function run(\PHPUnit\Util\PHP\Job $job) : \PHPUnit\Util\PHP\Result
    {
    }
    public static function set(\PHPUnit\Util\PHP\JobRunner $runner) : void
    {
    }
}
namespace PHPUnit\Util;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ThrowableToStringMapper
{
    public static function map(\Throwable $t) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class VersionComparisonOperator
{
    /**
     * @param '!='|'<'|'<='|'<>'|'='|'=='|'>'|'>='|'eq'|'ge'|'gt'|'le'|'lt'|'ne' $operator
     *
     * @throws InvalidVersionOperatorException
     */
    public function __construct(string $operator)
    {
    }
    /**
     * @return '!='|'<'|'<='|'<>'|'='|'=='|'>'|'>='|'eq'|'ge'|'gt'|'le'|'lt'|'ne'
     */
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Json
{
    /**
     * @throws InvalidJsonException
     */
    public static function prettify(string $json) : string
    {
    }
    /**
     * Element 0 is true and element 1 is null when JSON decoding did not work.
     * * Element 0 is false and element 1 has the decoded value when JSON decoding did work.
     * * This is used to avoid ambiguity with JSON strings consisting entirely of 'null' or 'false'.
     *
     * @return array{0: false, 1: mixed}|array{0: true, 1: null}
     */
    public static function canonicalize(string $json) : array
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Reflection
{
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     *
     * @return array{file: non-empty-string, line: non-negative-int}
     */
    public static function sourceLocationFor(string $className, string $methodName) : array
    {
    }
    /**
     * @param ReflectionClass<TestCase> $class
     *
     * @return list<ReflectionMethod>
     */
    public static function publicMethodsDeclaredDirectlyInTestClass(\ReflectionClass $class) : array
    {
    }
    /**
     * @param ReflectionClass<TestCase> $class
     *
     * @return list<ReflectionMethod>
     */
    public static function methodsDeclaredDirectlyInTestClass(\ReflectionClass $class) : array
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class Exporter
{
    public static function export(mixed $value) : string
    {
    }
    /**
     * @param array<mixed> $data
     */
    public static function shortenedRecursiveExport(array $data) : string
    {
    }
    public static function shortenedExport(mixed $value) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class GlobalState
{
    /**
     * @throws Exception
     */
    public static function getIncludedFilesAsString() : string
    {
    }
    /**
     * @param list<string> $files
     *
     * @throws Exception
     */
    public static function processIncludedFilesAsString(array $files) : string
    {
    }
    public static function getIniSettingsAsString() : string
    {
    }
    public static function getConstantsAsString() : string
    {
    }
    public static function getGlobalsAsString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Color
{
    public static function colorize(string $color, string $buffer) : string
    {
    }
    public static function colorizeTextBox(string $color, string $buffer, ?int $columns = null) : string
    {
    }
    public static function colorizePath(string $path, ?string $previousPath = null, bool $colorizeFilename = false) : string
    {
    }
    public static function dim(string $buffer) : string
    {
    }
    public static function visualizeWhitespace(string $buffer, bool $visualizeEOL = false) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Filter
{
    /**
     * @throws Exception
     */
    public static function getFilteredStacktrace(\Throwable $t, bool $unwrap = true) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Filesystem
{
    public static function createDirectory(string $directory) : bool
    {
    }
    /**
     * @param non-empty-string $path
     *
     * @return false|non-empty-string
     */
    public static function resolveStreamOrFile(string $path) : false|string
    {
    }
}
namespace PHPUnit\Logging\JUnit;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class JunitXmlLogger
{
    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public function __construct(\PHPUnit\TextUI\Output\Printer $printer, \PHPUnit\Event\Facade $facade)
    {
    }
    public function flush() : void
    {
    }
    public function testSuiteStarted(\PHPUnit\Event\TestSuite\Started $event) : void
    {
    }
    public function testSuiteFinished() : void
    {
    }
    /**
     * @throws InvalidArgumentException
     */
    public function testPreparationStarted(\PHPUnit\Event\Test\PreparationStarted $event) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     */
    public function testPreparationFailed() : void
    {
    }
    /**
     * @throws InvalidArgumentException
     */
    public function testPrepared() : void
    {
    }
    /**
     * @throws InvalidArgumentException
     */
    public function testFinished(\PHPUnit\Event\Test\Finished $event) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     */
    public function testMarkedIncomplete(\PHPUnit\Event\Test\MarkedIncomplete $event) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     */
    public function testSkipped(\PHPUnit\Event\Test\Skipped $event) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     */
    public function testErrored(\PHPUnit\Event\Test\Errored $event) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     */
    public function testFailed(\PHPUnit\Event\Test\Failed $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract readonly class Subscriber
{
    public function __construct(\PHPUnit\Logging\JUnit\JunitXmlLogger $logger)
    {
    }
    protected function logger() : \PHPUnit\Logging\JUnit\JunitXmlLogger
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestMarkedIncompleteSubscriber extends \PHPUnit\Logging\JUnit\Subscriber implements \PHPUnit\Event\Test\MarkedIncompleteSubscriber
{
    /**
     * @throws InvalidArgumentException
     */
    public function notify(\PHPUnit\Event\Test\MarkedIncomplete $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestRunnerExecutionFinishedSubscriber extends \PHPUnit\Logging\JUnit\Subscriber implements \PHPUnit\Event\TestRunner\ExecutionFinishedSubscriber
{
    public function notify(\PHPUnit\Event\TestRunner\ExecutionFinished $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestErroredSubscriber extends \PHPUnit\Logging\JUnit\Subscriber implements \PHPUnit\Event\Test\ErroredSubscriber
{
    /**
     * @throws InvalidArgumentException
     */
    public function notify(\PHPUnit\Event\Test\Errored $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestPreparationFailedSubscriber extends \PHPUnit\Logging\JUnit\Subscriber implements \PHPUnit\Event\Test\PreparationFailedSubscriber
{
    /**
     * @throws InvalidArgumentException
     */
    public function notify(\PHPUnit\Event\Test\PreparationFailed $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestSkippedSubscriber extends \PHPUnit\Logging\JUnit\Subscriber implements \PHPUnit\Event\Test\SkippedSubscriber
{
    /**
     * @throws InvalidArgumentException
     */
    public function notify(\PHPUnit\Event\Test\Skipped $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestPreparationStartedSubscriber extends \PHPUnit\Logging\JUnit\Subscriber implements \PHPUnit\Event\Test\PreparationStartedSubscriber
{
    /**
     * @throws InvalidArgumentException
     */
    public function notify(\PHPUnit\Event\Test\PreparationStarted $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestFailedSubscriber extends \PHPUnit\Logging\JUnit\Subscriber implements \PHPUnit\Event\Test\FailedSubscriber
{
    /**
     * @throws InvalidArgumentException
     */
    public function notify(\PHPUnit\Event\Test\Failed $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestSuiteStartedSubscriber extends \PHPUnit\Logging\JUnit\Subscriber implements \PHPUnit\Event\TestSuite\StartedSubscriber
{
    public function notify(\PHPUnit\Event\TestSuite\Started $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestPreparedSubscriber extends \PHPUnit\Logging\JUnit\Subscriber implements \PHPUnit\Event\Test\PreparedSubscriber
{
    /**
     * @throws InvalidArgumentException
     */
    public function notify(\PHPUnit\Event\Test\Prepared $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestSuiteFinishedSubscriber extends \PHPUnit\Logging\JUnit\Subscriber implements \PHPUnit\Event\TestSuite\FinishedSubscriber
{
    public function notify(\PHPUnit\Event\TestSuite\Finished $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestFinishedSubscriber extends \PHPUnit\Logging\JUnit\Subscriber implements \PHPUnit\Event\Test\FinishedSubscriber
{
    /**
     * @throws InvalidArgumentException
     */
    public function notify(\PHPUnit\Event\Test\Finished $event) : void
    {
    }
}
namespace PHPUnit\Logging;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class EventLogger implements \PHPUnit\Event\Tracer\Tracer
{
    public function __construct(string $path, bool $includeTelemetryInfo)
    {
    }
    public function trace(\PHPUnit\Event\Event $event) : void
    {
    }
}
namespace PHPUnit\Logging\TestDox;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class NamePrettifier
{
    /**
     * @param class-string $className
     */
    public function prettifyTestClassName(string $className) : string
    {
    }
    // NOTE: this method is on a hot path and very performance sensitive. change with care.
    public function prettifyTestMethodName(string $name) : string
    {
    }
    public function prettifyTestCase(\PHPUnit\Framework\TestCase $test, bool $colorize) : string
    {
    }
    public function prettifyDataSet(\PHPUnit\Framework\TestCase $test, bool $colorize) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class PlainTextRenderer
{
    /**
     * @param array<string, TestResultCollection> $tests
     */
    public function render(array $tests) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class HtmlRenderer
{
    /**
     * @param array<string, TestResultCollection> $tests
     */
    public function render(array $tests) : string
    {
    }
}
/**
 * @template-implements Iterator<int, TestResult>
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestResultCollectionIterator implements \Iterator
{
    public function __construct(\PHPUnit\Logging\TestDox\TestResultCollection $testResults)
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\Logging\TestDox\TestResult
    {
    }
    public function next() : void
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestResult
{
    public function __construct(\PHPUnit\Event\Code\TestMethod $test, \PHPUnit\Framework\TestStatus\TestStatus $status, ?\PHPUnit\Event\Code\Throwable $throwable)
    {
    }
    public function test() : \PHPUnit\Event\Code\TestMethod
    {
    }
    public function status() : \PHPUnit\Framework\TestStatus\TestStatus
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->throwable
     */
    public function hasThrowable() : bool
    {
    }
    public function throwable() : ?\PHPUnit\Event\Code\Throwable
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestResultCollector
{
    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public function __construct(\PHPUnit\Event\Facade $facade, \PHPUnit\TestRunner\IssueFilter $issueFilter)
    {
    }
    /**
     * @return array<string, TestResultCollection>
     */
    public function testMethodsGroupedByClass() : array
    {
    }
    public function testPrepared(\PHPUnit\Event\Test\Prepared $event) : void
    {
    }
    public function testErrored(\PHPUnit\Event\Test\Errored $event) : void
    {
    }
    public function testFailed(\PHPUnit\Event\Test\Failed $event) : void
    {
    }
    public function testPassed(\PHPUnit\Event\Test\Passed $event) : void
    {
    }
    public function testSkipped(\PHPUnit\Event\Test\Skipped $event) : void
    {
    }
    public function testMarkedIncomplete(\PHPUnit\Event\Test\MarkedIncomplete $event) : void
    {
    }
    public function testConsideredRisky(\PHPUnit\Event\Test\ConsideredRisky $event) : void
    {
    }
    public function testTriggeredDeprecation(\PHPUnit\Event\Test\DeprecationTriggered $event) : void
    {
    }
    public function testTriggeredNotice(\PHPUnit\Event\Test\NoticeTriggered $event) : void
    {
    }
    public function testTriggeredWarning(\PHPUnit\Event\Test\WarningTriggered $event) : void
    {
    }
    public function testTriggeredPhpDeprecation(\PHPUnit\Event\Test\PhpDeprecationTriggered $event) : void
    {
    }
    public function testTriggeredPhpNotice(\PHPUnit\Event\Test\PhpNoticeTriggered $event) : void
    {
    }
    public function testTriggeredPhpWarning(\PHPUnit\Event\Test\PhpWarningTriggered $event) : void
    {
    }
    public function testTriggeredPhpunitDeprecation(\PHPUnit\Event\Test\PhpunitDeprecationTriggered $event) : void
    {
    }
    public function testTriggeredPhpunitError(\PHPUnit\Event\Test\PhpunitErrorTriggered $event) : void
    {
    }
    public function testTriggeredPhpunitWarning(\PHPUnit\Event\Test\PhpunitWarningTriggered $event) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     */
    public function testFinished(\PHPUnit\Event\Test\Finished $event) : void
    {
    }
}
/**
 * @template-implements IteratorAggregate<int, TestResult>
 *
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestResultCollection implements \IteratorAggregate
{
    /**
     * @param list<TestResult> $testResults
     */
    public static function fromArray(array $testResults) : self
    {
    }
    /**
     * @return list<TestResult>
     */
    public function asArray() : array
    {
    }
    public function getIterator() : \PHPUnit\Logging\TestDox\TestResultCollectionIterator
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract readonly class Subscriber
{
    public function __construct(\PHPUnit\Logging\TestDox\TestResultCollector $collector)
    {
    }
    protected function collector() : \PHPUnit\Logging\TestDox\TestResultCollector
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestMarkedIncompleteSubscriber extends \PHPUnit\Logging\TestDox\Subscriber implements \PHPUnit\Event\Test\MarkedIncompleteSubscriber
{
    public function notify(\PHPUnit\Event\Test\MarkedIncomplete $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredPhpunitErrorSubscriber extends \PHPUnit\Logging\TestDox\Subscriber implements \PHPUnit\Event\Test\PhpunitErrorTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\PhpunitErrorTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredWarningSubscriber extends \PHPUnit\Logging\TestDox\Subscriber implements \PHPUnit\Event\Test\WarningTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\WarningTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestErroredSubscriber extends \PHPUnit\Logging\TestDox\Subscriber implements \PHPUnit\Event\Test\ErroredSubscriber
{
    public function notify(\PHPUnit\Event\Test\Errored $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredNoticeSubscriber extends \PHPUnit\Logging\TestDox\Subscriber implements \PHPUnit\Event\Test\NoticeTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\NoticeTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredPhpWarningSubscriber extends \PHPUnit\Logging\TestDox\Subscriber implements \PHPUnit\Event\Test\PhpWarningTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\PhpWarningTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredPhpNoticeSubscriber extends \PHPUnit\Logging\TestDox\Subscriber implements \PHPUnit\Event\Test\PhpNoticeTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\PhpNoticeTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredPhpunitWarningSubscriber extends \PHPUnit\Logging\TestDox\Subscriber implements \PHPUnit\Event\Test\PhpunitWarningTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\PhpunitWarningTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredDeprecationSubscriber extends \PHPUnit\Logging\TestDox\Subscriber implements \PHPUnit\Event\Test\DeprecationTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\DeprecationTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredPhpDeprecationSubscriber extends \PHPUnit\Logging\TestDox\Subscriber implements \PHPUnit\Event\Test\PhpDeprecationTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\PhpDeprecationTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestSkippedSubscriber extends \PHPUnit\Logging\TestDox\Subscriber implements \PHPUnit\Event\Test\SkippedSubscriber
{
    public function notify(\PHPUnit\Event\Test\Skipped $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestFailedSubscriber extends \PHPUnit\Logging\TestDox\Subscriber implements \PHPUnit\Event\Test\FailedSubscriber
{
    public function notify(\PHPUnit\Event\Test\Failed $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredPhpunitDeprecationSubscriber extends \PHPUnit\Logging\TestDox\Subscriber implements \PHPUnit\Event\Test\PhpunitDeprecationTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\PhpunitDeprecationTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestConsideredRiskySubscriber extends \PHPUnit\Logging\TestDox\Subscriber implements \PHPUnit\Event\Test\ConsideredRiskySubscriber
{
    public function notify(\PHPUnit\Event\Test\ConsideredRisky $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestPreparedSubscriber extends \PHPUnit\Logging\TestDox\Subscriber implements \PHPUnit\Event\Test\PreparedSubscriber
{
    public function notify(\PHPUnit\Event\Test\Prepared $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestPassedSubscriber extends \PHPUnit\Logging\TestDox\Subscriber implements \PHPUnit\Event\Test\PassedSubscriber
{
    public function notify(\PHPUnit\Event\Test\Passed $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestFinishedSubscriber extends \PHPUnit\Logging\TestDox\Subscriber implements \PHPUnit\Event\Test\FinishedSubscriber
{
    /**
     * @throws InvalidArgumentException
     */
    public function notify(\PHPUnit\Event\Test\Finished $event) : void
    {
    }
}
namespace PHPUnit\Logging\TeamCity;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TeamCityLogger
{
    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public function __construct(\PHPUnit\TextUI\Output\Printer $printer, \PHPUnit\Event\Facade $facade)
    {
    }
    public function testSuiteStarted(\PHPUnit\Event\TestSuite\Started $event) : void
    {
    }
    public function testSuiteFinished(\PHPUnit\Event\TestSuite\Finished $event) : void
    {
    }
    public function testPrepared(\PHPUnit\Event\Test\Prepared $event) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     */
    public function testMarkedIncomplete(\PHPUnit\Event\Test\MarkedIncomplete $event) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     */
    public function testSkipped(\PHPUnit\Event\Test\Skipped $event) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     */
    public function testErrored(\PHPUnit\Event\Test\Errored $event) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     */
    public function testFailed(\PHPUnit\Event\Test\Failed $event) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     */
    public function testConsideredRisky(\PHPUnit\Event\Test\ConsideredRisky $event) : void
    {
    }
    /**
     * @throws InvalidArgumentException
     */
    public function testFinished(\PHPUnit\Event\Test\Finished $event) : void
    {
    }
    public function flush() : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract readonly class Subscriber
{
    public function __construct(\PHPUnit\Logging\TeamCity\TeamCityLogger $logger)
    {
    }
    protected function logger() : \PHPUnit\Logging\TeamCity\TeamCityLogger
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestMarkedIncompleteSubscriber extends \PHPUnit\Logging\TeamCity\Subscriber implements \PHPUnit\Event\Test\MarkedIncompleteSubscriber
{
    /**
     * @throws InvalidArgumentException
     */
    public function notify(\PHPUnit\Event\Test\MarkedIncomplete $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestRunnerExecutionFinishedSubscriber extends \PHPUnit\Logging\TeamCity\Subscriber implements \PHPUnit\Event\TestRunner\ExecutionFinishedSubscriber
{
    public function notify(\PHPUnit\Event\TestRunner\ExecutionFinished $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestErroredSubscriber extends \PHPUnit\Logging\TeamCity\Subscriber implements \PHPUnit\Event\Test\ErroredSubscriber
{
    /**
     * @throws InvalidArgumentException
     */
    public function notify(\PHPUnit\Event\Test\Errored $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestSkippedSubscriber extends \PHPUnit\Logging\TeamCity\Subscriber implements \PHPUnit\Event\Test\SkippedSubscriber
{
    /**
     * @throws InvalidArgumentException
     */
    public function notify(\PHPUnit\Event\Test\Skipped $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestFailedSubscriber extends \PHPUnit\Logging\TeamCity\Subscriber implements \PHPUnit\Event\Test\FailedSubscriber
{
    /**
     * @throws InvalidArgumentException
     */
    public function notify(\PHPUnit\Event\Test\Failed $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestConsideredRiskySubscriber extends \PHPUnit\Logging\TeamCity\Subscriber implements \PHPUnit\Event\Test\ConsideredRiskySubscriber
{
    /**
     * @throws InvalidArgumentException
     */
    public function notify(\PHPUnit\Event\Test\ConsideredRisky $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestSuiteStartedSubscriber extends \PHPUnit\Logging\TeamCity\Subscriber implements \PHPUnit\Event\TestSuite\StartedSubscriber
{
    public function notify(\PHPUnit\Event\TestSuite\Started $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestPreparedSubscriber extends \PHPUnit\Logging\TeamCity\Subscriber implements \PHPUnit\Event\Test\PreparedSubscriber
{
    public function notify(\PHPUnit\Event\Test\Prepared $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestSuiteFinishedSubscriber extends \PHPUnit\Logging\TeamCity\Subscriber implements \PHPUnit\Event\TestSuite\FinishedSubscriber
{
    public function notify(\PHPUnit\Event\TestSuite\Finished $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestFinishedSubscriber extends \PHPUnit\Logging\TeamCity\Subscriber implements \PHPUnit\Event\Test\FinishedSubscriber
{
    /**
     * @throws InvalidArgumentException
     */
    public function notify(\PHPUnit\Event\Test\Finished $event) : void
    {
    }
}
namespace PHPUnit\Logging;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Exception extends \RuntimeException implements \PHPUnit\Exception
{
}
namespace PHPUnit\Framework\MockObject;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface Exception extends \Throwable
{
}
namespace PHPUnit\Framework;

/**
 * Base class for all PHPUnit Framework exceptions.
 *
 * Ensures that exceptions thrown during a test run do not leave stray
 * references behind.
 *
 * Every Exception contains a stack trace. Each stack frame contains the 'args'
 * of the called function. The function arguments can contain references to
 * instantiated objects. The references prevent the objects from being
 * destructed (until test results are eventually printed), so memory cannot be
 * freed up.
 *
 * With enabled process isolation, test results are serialized in the child
 * process and unserialized in the parent process. The stack trace of Exceptions
 * may contain objects that cannot be serialized or unserialized (e.g., PDO
 * connections). Unserializing user-space objects from the child process into
 * the parent would break the intended encapsulation of process isolation.
 *
 * @see http://fabien.potencier.org/article/9/php-serialization-stack-traces-and-exceptions
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
class Exception extends \RuntimeException implements \PHPUnit\Exception
{
    /**
     * @var list<array{file: string, line: int, function: string}>
     */
    protected array $serializableTrace;
    public function __construct(string $message = '', int|string $code = 0, ?\Throwable $previous = null)
    {
    }
    public function __sleep() : array
    {
    }
    /**
     * Returns the serializable trace (without 'args').
     *
     * @return list<array{file: string, line: int, function: string}>
     */
    public function getSerializableTrace() : array
    {
    }
}
namespace PHPUnit\Framework\MockObject;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CannotUseOnlyMethodsException extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\MockObject\Exception
{
    public function __construct(string $type, string $methodName)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class BadMethodCallException extends \BadMethodCallException implements \PHPUnit\Framework\MockObject\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class RuntimeException extends \RuntimeException implements \PHPUnit\Framework\MockObject\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MethodCannotBeConfiguredException extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\MockObject\Exception
{
    public function __construct(string $method)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MethodParametersAlreadyConfiguredException extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\MockObject\Exception
{
    public function __construct()
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ReturnValueNotConfiguredException extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\MockObject\Exception
{
    public function __construct(\PHPUnit\Framework\MockObject\Invocation $invocation)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MatcherAlreadyRegisteredException extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\MockObject\Exception
{
    public function __construct(string $id)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MethodNameNotConfiguredException extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\MockObject\Exception
{
    public function __construct()
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class IncompatibleReturnValueException extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\MockObject\Exception
{
    public function __construct(\PHPUnit\Framework\MockObject\ConfigurableMethod $method, mixed $value)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class NoMoreReturnValuesConfiguredException extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\MockObject\Exception
{
    public function __construct(\PHPUnit\Framework\MockObject\Invocation $invocation, int $numberOfConfiguredReturnValues)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class NeverReturningMethodException extends \RuntimeException implements \PHPUnit\Framework\MockObject\Exception
{
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public function __construct(string $className, string $methodName)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MatchBuilderNotFoundException extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\MockObject\Exception
{
    public function __construct(string $id)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MethodNameAlreadyConfiguredException extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\MockObject\Exception
{
    public function __construct()
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ReflectionException extends \RuntimeException implements \PHPUnit\Framework\MockObject\Exception
{
}
/**
 * @template MockedType
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class MockBuilder
{
    /**
     * @param class-string|trait-string $type
     */
    public function __construct(\PHPUnit\Framework\TestCase $testCase, string $type)
    {
    }
    /**
     * Creates a mock object using a fluent interface.
     *
     * @throws ClassIsEnumerationException
     * @throws ClassIsFinalException
     * @throws DuplicateMethodException
     * @throws InvalidArgumentException
     * @throws InvalidMethodNameException
     * @throws NameAlreadyInUseException
     * @throws ReflectionException
     * @throws RuntimeException
     * @throws UnknownTypeException
     *
     * @return MockedType&MockObject
     */
    public function getMock() : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Specifies the subset of methods to mock, requiring each to exist in the class.
     *
     * @param list<non-empty-string> $methods
     *
     * @throws CannotUseOnlyMethodsException
     * @throws ReflectionException
     *
     * @return $this
     */
    public function onlyMethods(array $methods) : self
    {
    }
    /**
     * Specifies the arguments for the constructor.
     *
     * @param array<mixed> $arguments
     *
     * @return $this
     */
    public function setConstructorArgs(array $arguments) : self
    {
    }
    /**
     * Specifies the name for the mock class.
     *
     * @param class-string $name
     *
     * @return $this
     */
    public function setMockClassName(string $name) : self
    {
    }
    /**
     * Disables the invocation of the original constructor.
     *
     * @return $this
     */
    public function disableOriginalConstructor() : self
    {
    }
    /**
     * Enables the invocation of the original constructor.
     *
     * @return $this
     */
    public function enableOriginalConstructor() : self
    {
    }
    /**
     * Disables the invocation of the original clone constructor.
     *
     * @return $this
     */
    public function disableOriginalClone() : self
    {
    }
    /**
     * Enables the invocation of the original clone constructor.
     *
     * @return $this
     */
    public function enableOriginalClone() : self
    {
    }
    /**
     * @return $this
     */
    public function enableAutoReturnValueGeneration() : self
    {
    }
    /**
     * @return $this
     */
    public function disableAutoReturnValueGeneration() : self
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvocationHandler
{
    /**
     * @param list<ConfigurableMethod> $configurableMethods
     */
    public function __construct(array $configurableMethods, bool $returnValueGeneration)
    {
    }
    public function hasMatchers() : bool
    {
    }
    /**
     * Looks up the match builder with identification $id and returns it.
     */
    public function lookupMatcher(string $id) : ?\PHPUnit\Framework\MockObject\Matcher
    {
    }
    /**
     * Registers a matcher with the identification $id. The matcher can later be
     * looked up using lookupMatcher() to figure out if it has been invoked.
     *
     * @throws MatcherAlreadyRegisteredException
     */
    public function registerMatcher(string $id, \PHPUnit\Framework\MockObject\Matcher $matcher) : void
    {
    }
    public function expects(\PHPUnit\Framework\MockObject\Rule\InvocationOrder $rule) : \PHPUnit\Framework\MockObject\Builder\InvocationMocker
    {
    }
    /**
     * @throws \PHPUnit\Framework\MockObject\Exception
     * @throws Exception
     */
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation) : mixed
    {
    }
    /**
     * @throws Throwable
     */
    public function verify() : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface Stub
{
    public function method(\PHPUnit\Framework\Constraint\Constraint|\PHPUnit\Framework\MockObject\Runtime\PropertyHook|string $constraint) : \PHPUnit\Framework\MockObject\Builder\InvocationStubber;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface MockObject extends \PHPUnit\Framework\MockObject\Stub
{
    public function expects(\PHPUnit\Framework\MockObject\Rule\InvocationOrder $invocationRule) : \PHPUnit\Framework\MockObject\Builder\InvocationMocker;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This interface is not covered by the backward compatibility promise for PHPUnit
 */
interface StubInternal extends \PHPUnit\Framework\MockObject\Stub
{
    public function __phpunit_state() : \PHPUnit\Framework\MockObject\TestDoubleState;
    public function __phpunit_getInvocationHandler() : \PHPUnit\Framework\MockObject\InvocationHandler;
    public function __phpunit_unsetInvocationMocker() : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This interface is not covered by the backward compatibility promise for PHPUnit
 */
interface MockObjectInternal extends \PHPUnit\Framework\MockObject\MockObject, \PHPUnit\Framework\MockObject\StubInternal
{
    public function __phpunit_hasMatchers() : bool;
    public function __phpunit_verify(bool $unsetInvocationMocker = true) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Matcher
{
    public function __construct(\PHPUnit\Framework\MockObject\Rule\InvocationOrder $rule)
    {
    }
    public function hasMatchers() : bool
    {
    }
    public function hasMethodNameRule() : bool
    {
    }
    public function methodNameRule() : \PHPUnit\Framework\MockObject\Rule\MethodName
    {
    }
    public function setMethodNameRule(\PHPUnit\Framework\MockObject\Rule\MethodName $rule) : void
    {
    }
    public function hasParametersRule() : bool
    {
    }
    public function setParametersRule(\PHPUnit\Framework\MockObject\Rule\ParametersRule $rule) : void
    {
    }
    public function setStub(\PHPUnit\Framework\MockObject\Stub\Stub $stub) : void
    {
    }
    public function setAfterMatchBuilderId(string $id) : void
    {
    }
    /**
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws MatchBuilderNotFoundException
     * @throws MethodNameNotConfiguredException
     * @throws RuntimeException
     */
    public function invoked(\PHPUnit\Framework\MockObject\Invocation $invocation) : mixed
    {
    }
    /**
     * @throws ExpectationFailedException
     * @throws MatchBuilderNotFoundException
     * @throws MethodNameNotConfiguredException
     * @throws RuntimeException
     */
    public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation) : bool
    {
    }
    /**
     * @throws ExpectationFailedException
     * @throws MethodNameNotConfiguredException
     */
    public function verify() : void
    {
    }
}
namespace PHPUnit\Framework\Constraint;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract class Constraint implements \Countable, \PHPUnit\Framework\SelfDescribing
{
    /**
     * Evaluates the constraint for parameter $other.
     *
     * If $returnResult is set to false (the default), an exception is thrown
     * in case of a failure. null is returned otherwise.
     *
     * If $returnResult is true, the result of the evaluation is returned as
     * a boolean value instead: true in case of success, false in case of a
     * failure.
     *
     * @throws ExpectationFailedException
     */
    public function evaluate(mixed $other, string $description = '', bool $returnResult = false) : ?bool
    {
    }
    /**
     * Counts the number of constraint elements.
     */
    public function count() : int
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * This method can be overridden to implement the evaluation algorithm.
     */
    protected function matches(mixed $other) : bool
    {
    }
    /**
     * Throws an exception for the given compared value and test description.
     *
     * @throws ExpectationFailedException
     */
    protected function fail(mixed $other, string $description, ?\SebastianBergmann\Comparator\ComparisonFailure $comparisonFailure = null) : never
    {
    }
    /**
     * Return additional failure description where needed.
     *
     * The function can be overridden to provide additional failure
     * information like a diff
     */
    protected function additionalFailureDescription(mixed $other) : string
    {
    }
    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * To provide additional failure information additionalFailureDescription
     * can be used.
     */
    protected function failureDescription(mixed $other) : string
    {
    }
    /**
     * Returns a custom string representation of the constraint object when it
     * appears in context of an $operator expression.
     *
     * The purpose of this method is to provide meaningful descriptive string
     * in context of operators such as LogicalNot. Native PHPUnit constraints
     * are supported out of the box by LogicalNot, but externally developed
     * ones had no way to provide correct strings in this context.
     *
     * The method shall return empty string, when it does not handle
     * customization by itself.
     */
    protected function toStringInContext(\PHPUnit\Framework\Constraint\Operator $operator, mixed $role) : string
    {
    }
    /**
     * Returns the description of the failure when this constraint appears in
     * context of an $operator expression.
     *
     * The purpose of this method is to provide meaningful failure description
     * in context of operators such as LogicalNot. Native PHPUnit constraints
     * are supported out of the box by LogicalNot, but externally developed
     * ones had no way to provide correct messages in this context.
     *
     * The method shall return empty string, when it does not handle
     * customization by itself.
     */
    protected function failureDescriptionInContext(\PHPUnit\Framework\Constraint\Operator $operator, mixed $role, mixed $other) : string
    {
    }
    /**
     * Reduces the sub-expression starting at $this by skipping degenerate
     * sub-expression and returns first descendant constraint that starts
     * a non-reducible sub-expression.
     *
     * Returns $this for terminal constraints and for operators that start
     * non-reducible sub-expression, or the nearest descendant of $this that
     * starts a non-reducible sub-expression.
     *
     * A constraint expression may be modelled as a tree with non-terminal
     * nodes (operators) and terminal nodes. For example:
     *
     *      LogicalOr           (operator, non-terminal)
     *      + LogicalAnd        (operator, non-terminal)
     *      | + IsType('int')   (terminal)
     *      | + GreaterThan(10) (terminal)
     *      + LogicalNot        (operator, non-terminal)
     *        + IsType('array') (terminal)
     *
     * A degenerate sub-expression is a part of the tree, that effectively does
     * not contribute to the evaluation of the expression it appears in. An example
     * of degenerate sub-expression is a BinaryOperator constructed with single
     * operand or nested BinaryOperators, each with single operand. An
     * expression involving a degenerate sub-expression is equivalent to a
     * reduced expression with the degenerate sub-expression removed, for example
     *
     *      LogicalAnd          (operator)
     *      + LogicalOr         (degenerate operator)
     *      | + LogicalAnd      (degenerate operator)
     *      |   + IsType('int') (terminal)
     *      + GreaterThan(10)   (terminal)
     *
     * is equivalent to
     *
     *      LogicalAnd          (operator)
     *      + IsType('int')     (terminal)
     *      + GreaterThan(10)   (terminal)
     *
     * because the subexpression
     *
     *      + LogicalOr
     *        + LogicalAnd
     *          + -
     *
     * is degenerate. Calling reduce() on the LogicalOr object above, as well
     * as on LogicalAnd, shall return the IsType('int') instance.
     *
     * Other specific reductions can be implemented, for example cascade of
     * LogicalNot operators
     *
     *      + LogicalNot
     *        + LogicalNot
     *          +LogicalNot
     *           + IsTrue
     *
     * can be reduced to
     *
     *      LogicalNot
     *      + IsTrue
     */
    protected function reduce() : self
    {
    }
    /**
     * @return non-empty-string
     */
    protected function valueToTypeStringFragment(mixed $value) : string
    {
    }
}
namespace PHPUnit\Framework\MockObject;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MethodNameConstraint extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(string $methodName)
    {
    }
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This trait is not covered by the backward compatibility promise for PHPUnit
 */
trait MockObjectApi
{
    /** @noinspection MagicMethodsValidityInspection */
    public function __phpunit_hasMatchers() : bool
    {
    }
    /** @noinspection MagicMethodsValidityInspection */
    public function __phpunit_verify(bool $unsetInvocationMocker = true) : void
    {
    }
    public abstract function __phpunit_state() : \PHPUnit\Framework\MockObject\TestDoubleState;
    public abstract function __phpunit_getInvocationHandler() : \PHPUnit\Framework\MockObject\InvocationHandler;
    public abstract function __phpunit_unsetInvocationMocker() : void;
    public function expects(\PHPUnit\Framework\MockObject\Rule\InvocationOrder $matcher) : \PHPUnit\Framework\MockObject\Builder\InvocationMocker
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This trait is not covered by the backward compatibility promise for PHPUnit
 */
trait DoubledCloneMethod
{
    public function __clone() : void
    {
    }
    public abstract function __phpunit_state() : \PHPUnit\Framework\MockObject\TestDoubleState;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This trait is not covered by the backward compatibility promise for PHPUnit
 */
trait StubApi
{
    private readonly \PHPUnit\Framework\MockObject\TestDoubleState $__phpunit_state;
    public function __phpunit_state() : \PHPUnit\Framework\MockObject\TestDoubleState
    {
    }
    /** @noinspection MagicMethodsValidityInspection */
    public function __phpunit_getInvocationHandler() : \PHPUnit\Framework\MockObject\InvocationHandler
    {
    }
    /** @noinspection MagicMethodsValidityInspection */
    public function __phpunit_unsetInvocationMocker() : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This trait is not covered by the backward compatibility promise for PHPUnit
 */
trait Method
{
    public abstract function __phpunit_getInvocationHandler() : \PHPUnit\Framework\MockObject\InvocationHandler;
    public function method(\PHPUnit\Framework\Constraint\Constraint|\PHPUnit\Framework\MockObject\Runtime\PropertyHook|string $constraint) : \PHPUnit\Framework\MockObject\Builder\InvocationMocker
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestDoubleState
{
    /**
     * @param list<ConfigurableMethod> $configurableMethods
     */
    public function __construct(array $configurableMethods, bool $generateReturnValues)
    {
    }
    public function invocationHandler() : \PHPUnit\Framework\MockObject\InvocationHandler
    {
    }
    public function cloneInvocationHandler() : void
    {
    }
    public function unsetInvocationHandler() : void
    {
    }
    /**
     * @return list<ConfigurableMethod>
     */
    public function configurableMethods() : array
    {
    }
    public function generateReturnValues() : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This trait is not covered by the backward compatibility promise for PHPUnit
 */
trait ProxiedCloneMethod
{
    public function __clone() : void
    {
    }
    public abstract function __phpunit_state() : \PHPUnit\Framework\MockObject\TestDoubleState;
}
namespace PHPUnit\Framework\MockObject\Runtime;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract readonly class PropertyHook
{
    /**
     * @param non-empty-string $propertyName
     */
    public static function get(string $propertyName) : \PHPUnit\Framework\MockObject\Runtime\PropertyGetHook
    {
    }
    /**
     * @param non-empty-string $propertyName
     */
    public static function set(string $propertyName) : \PHPUnit\Framework\MockObject\Runtime\PropertySetHook
    {
    }
    /**
     * @param non-empty-string $propertyName
     */
    protected function __construct(string $propertyName)
    {
    }
    /**
     * @return non-empty-string
     */
    public function propertyName() : string
    {
    }
    /**
     * @return non-empty-string
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public abstract function asString() : string;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class PropertyGetHook extends \PHPUnit\Framework\MockObject\Runtime\PropertyHook
{
    /**
     * @return non-empty-string
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class PropertySetHook extends \PHPUnit\Framework\MockObject\Runtime\PropertyHook
{
    /**
     * @return non-empty-string
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function asString() : string
    {
    }
}
namespace PHPUnit\Framework\MockObject;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ReturnValueGenerator
{
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     *
     * @throws Exception
     */
    public function generate(string $className, string $methodName, \PHPUnit\Framework\MockObject\StubInternal $testStub, string $returnType) : mixed
    {
    }
}
namespace PHPUnit\Framework\MockObject\Builder;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface Identity
{
    /**
     * Sets the identification of the expectation to $id.
     *
     * @note The identifier is unique per mock object.
     */
    public function id(string $id) : self;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface Stub extends \PHPUnit\Framework\MockObject\Builder\Identity
{
    /**
     * Stubs the matching method with the stub object $stub. Any invocations of
     * the matched method will now be handled by the stub instead.
     */
    public function will(\PHPUnit\Framework\MockObject\Stub\Stub $stub) : \PHPUnit\Framework\MockObject\Builder\Identity;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface ParametersMatch extends \PHPUnit\Framework\MockObject\Builder\Stub
{
    /**
     * Defines the expectation which must occur before the current is valid.
     */
    public function after(string $id) : \PHPUnit\Framework\MockObject\Builder\Stub;
    /**
     * Sets the parameters to match for, each parameter to this function will
     * be part of match. To perform specific matches or constraints create a
     * new PHPUnit\Framework\Constraint\Constraint and use it for the parameter.
     * If the parameter value is not a constraint it will use the
     * PHPUnit\Framework\Constraint\IsEqual for the value.
     *
     * Some examples:
     * <code>
     * // match first parameter with value 2
     * $b->with(2);
     * // match first parameter with value 'smock' and second identical to 42
     * $b->with('smock', new PHPUnit\Framework\Constraint\IsEqual(42));
     * </code>
     */
    public function with(mixed ...$arguments) : self;
    /**
     * Sets a rule which allows any kind of parameters.
     *
     * Some examples:
     * <code>
     * // match any number of parameters
     * $b->withAnyParameters();
     * </code>
     */
    public function withAnyParameters() : self;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface MethodNameMatch extends \PHPUnit\Framework\MockObject\Builder\ParametersMatch
{
    /**
     * Adds a new method name match and returns the parameter match object for
     * further matching possibilities.
     */
    public function method(\PHPUnit\Framework\Constraint\Constraint|string $constraint) : self;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface InvocationStubber
{
    public function will(\PHPUnit\Framework\MockObject\Stub\Stub $stub) : \PHPUnit\Framework\MockObject\Builder\Identity;
    public function willReturn(mixed $value, mixed ...$nextValues) : self;
    public function willReturnReference(mixed &$reference) : self;
    /**
     * @param array<int, array<int, mixed>> $valueMap
     */
    public function willReturnMap(array $valueMap) : self;
    public function willReturnArgument(int $argumentIndex) : self;
    public function willReturnCallback(callable $callback) : self;
    public function willReturnSelf() : self;
    public function willReturnOnConsecutiveCalls(mixed ...$values) : self;
    public function willThrowException(\Throwable $exception) : self;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class InvocationMocker implements \PHPUnit\Framework\MockObject\Builder\InvocationStubber, \PHPUnit\Framework\MockObject\Builder\MethodNameMatch
{
    public function __construct(\PHPUnit\Framework\MockObject\InvocationHandler $handler, \PHPUnit\Framework\MockObject\Matcher $matcher, \PHPUnit\Framework\MockObject\ConfigurableMethod ...$configurableMethods)
    {
    }
    /**
     * @throws MatcherAlreadyRegisteredException
     *
     * @return $this
     */
    public function id(string $id) : self
    {
    }
    /**
     * @return $this
     */
    public function will(\PHPUnit\Framework\MockObject\Stub\Stub $stub) : \PHPUnit\Framework\MockObject\Builder\Identity
    {
    }
    /**
     * @throws IncompatibleReturnValueException
     */
    public function willReturn(mixed $value, mixed ...$nextValues) : self
    {
    }
    public function willReturnReference(mixed &$reference) : self
    {
    }
    public function willReturnMap(array $valueMap) : self
    {
    }
    public function willReturnArgument(int $argumentIndex) : self
    {
    }
    public function willReturnCallback(callable $callback) : self
    {
    }
    public function willReturnSelf() : self
    {
    }
    public function willReturnOnConsecutiveCalls(mixed ...$values) : self
    {
    }
    public function willThrowException(\Throwable $exception) : self
    {
    }
    /**
     * @return $this
     */
    public function after(string $id) : self
    {
    }
    /**
     * @throws \PHPUnit\Framework\Exception
     * @throws MethodNameNotConfiguredException
     * @throws MethodParametersAlreadyConfiguredException
     *
     * @return $this
     */
    public function with(mixed ...$arguments) : self
    {
    }
    /**
     * @throws MethodNameNotConfiguredException
     * @throws MethodParametersAlreadyConfiguredException
     *
     * @return $this
     */
    public function withAnyParameters() : self
    {
    }
    /**
     * @throws InvalidArgumentException
     * @throws MethodCannotBeConfiguredException
     * @throws MethodNameAlreadyConfiguredException
     *
     * @return $this
     */
    public function method(\PHPUnit\Framework\Constraint\Constraint|\PHPUnit\Framework\MockObject\Runtime\PropertyHook|string $constraint) : self
    {
    }
}
namespace PHPUnit\Framework\MockObject;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Invocation implements \PHPUnit\Framework\SelfDescribing
{
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     * @param array<mixed>     $parameters
     */
    public function __construct(string $className, string $methodName, array $parameters, string $returnType, \PHPUnit\Framework\MockObject\MockObjectInternal|\PHPUnit\Framework\MockObject\StubInternal $object)
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function methodName() : string
    {
    }
    /**
     * @return array<mixed>
     */
    public function parameters() : array
    {
    }
    /**
     * @throws Exception
     */
    public function generateReturnValue() : mixed
    {
    }
    public function toString() : string
    {
    }
    public function object() : \PHPUnit\Framework\MockObject\MockObjectInternal|\PHPUnit\Framework\MockObject\StubInternal
    {
    }
}
namespace PHPUnit\Framework\MockObject\Stub;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface Stub
{
    /**
     * Fakes the processing of the invocation $invocation by returning a
     * specific value.
     */
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation) : mixed;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ReturnCallback implements \PHPUnit\Framework\MockObject\Stub\Stub
{
    public function __construct(callable $callback)
    {
    }
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation) : mixed
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ReturnStub implements \PHPUnit\Framework\MockObject\Stub\Stub
{
    public function __construct(mixed $value)
    {
    }
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation) : mixed
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ConsecutiveCalls implements \PHPUnit\Framework\MockObject\Stub\Stub
{
    /**
     * @param array<mixed> $stack
     */
    public function __construct(array $stack)
    {
    }
    /**
     * @throws NoMoreReturnValuesConfiguredException
     */
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation) : mixed
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ReturnSelf implements \PHPUnit\Framework\MockObject\Stub\Stub
{
    /**
     * @throws RuntimeException
     */
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation) : object
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ReturnArgument implements \PHPUnit\Framework\MockObject\Stub\Stub
{
    public function __construct(int $argumentIndex)
    {
    }
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation) : mixed
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ReturnValueMap implements \PHPUnit\Framework\MockObject\Stub\Stub
{
    /**
     * @param array<mixed> $valueMap
     */
    public function __construct(array $valueMap)
    {
    }
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation) : mixed
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ReturnReference implements \PHPUnit\Framework\MockObject\Stub\Stub
{
    public function __construct(mixed &$reference)
    {
    }
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation) : mixed
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Exception implements \PHPUnit\Framework\MockObject\Stub\Stub
{
    public function __construct(\Throwable $exception)
    {
    }
    /**
     * @throws Throwable
     */
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation) : never
    {
    }
}
namespace PHPUnit\Framework\MockObject\Rule;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract class InvocationOrder implements \PHPUnit\Framework\SelfDescribing
{
    public function numberOfInvocations() : int
    {
    }
    public function hasBeenInvoked() : bool
    {
    }
    public final function invoked(\PHPUnit\Framework\MockObject\Invocation $invocation) : void
    {
    }
    public abstract function matches(\PHPUnit\Framework\MockObject\Invocation $invocation) : bool;
    public abstract function verify() : void;
    protected function invokedDo(\PHPUnit\Framework\MockObject\Invocation $invocation) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvokedAtLeastCount extends \PHPUnit\Framework\MockObject\Rule\InvocationOrder
{
    public function __construct(int $requiredInvocations)
    {
    }
    public function toString() : string
    {
    }
    /**
     * Verifies that the current expectation is valid. If everything is OK the
     * code should just return, if not it must throw an exception.
     *
     * @throws ExpectationFailedException
     */
    public function verify() : void
    {
    }
    public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvokedAtMostCount extends \PHPUnit\Framework\MockObject\Rule\InvocationOrder
{
    public function __construct(int $allowedInvocations)
    {
    }
    public function toString() : string
    {
    }
    /**
     * Verifies that the current expectation is valid. If everything is OK the
     * code should just return, if not it must throw an exception.
     *
     * @throws ExpectationFailedException
     */
    public function verify() : void
    {
    }
    public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface ParametersRule
{
    /**
     * @throws ExpectationFailedException if the invocation violates the rule
     */
    public function apply(\PHPUnit\Framework\MockObject\Invocation $invocation) : void;
    public function verify() : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Parameters implements \PHPUnit\Framework\MockObject\Rule\ParametersRule
{
    /**
     * @param array<mixed> $parameters
     *
     * @throws \PHPUnit\Framework\Exception
     */
    public function __construct(array $parameters)
    {
    }
    /**
     * @throws Exception
     */
    public function apply(\PHPUnit\Framework\MockObject\Invocation $invocation) : void
    {
    }
    /**
     * Checks if the invocation $invocation matches the current rules. If it
     * does the rule will get the invoked() method called which should check
     * if an expectation is met.
     *
     * @throws ExpectationFailedException
     */
    public function verify() : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class AnyParameters implements \PHPUnit\Framework\MockObject\Rule\ParametersRule
{
    public function apply(\PHPUnit\Framework\MockObject\Invocation $invocation) : void
    {
    }
    public function verify() : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvokedAtLeastOnce extends \PHPUnit\Framework\MockObject\Rule\InvocationOrder
{
    public function toString() : string
    {
    }
    /**
     * Verifies that the current expectation is valid. If everything is OK the
     * code should just return, if not it must throw an exception.
     *
     * @throws ExpectationFailedException
     */
    public function verify() : void
    {
    }
    public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvokedCount extends \PHPUnit\Framework\MockObject\Rule\InvocationOrder
{
    public function __construct(int $expectedCount)
    {
    }
    public function isNever() : bool
    {
    }
    public function toString() : string
    {
    }
    public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation) : bool
    {
    }
    /**
     * Verifies that the current expectation is valid. If everything is OK the
     * code should just return, if not it must throw an exception.
     *
     * @throws ExpectationFailedException
     */
    public function verify() : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class MethodName
{
    /**
     * @throws InvalidArgumentException
     */
    public function __construct(\PHPUnit\Framework\Constraint\Constraint|string $constraint)
    {
    }
    public function toString() : string
    {
    }
    /**
     * @throws ExpectationFailedException
     */
    public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation) : bool
    {
    }
    /**
     * @throws ExpectationFailedException
     */
    public function matchesName(string $methodName) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class AnyInvokedCount extends \PHPUnit\Framework\MockObject\Rule\InvocationOrder
{
    public function toString() : string
    {
    }
    public function verify() : void
    {
    }
    public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation) : bool
    {
    }
}
namespace PHPUnit\Framework\MockObject;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ConfigurableMethod
{
    /**
     * @param non-empty-string  $name
     * @param array<int, mixed> $defaultParameterValues
     * @param non-negative-int  $numberOfParameters
     */
    public function __construct(string $name, array $defaultParameterValues, int $numberOfParameters, \SebastianBergmann\Type\Type $returnType)
    {
    }
    /**
     * @return non-empty-string
     */
    public function name() : string
    {
    }
    /**
     * @return array<int, mixed>
     */
    public function defaultParameterValues() : array
    {
    }
    /**
     * @return non-negative-int
     */
    public function numberOfParameters() : int
    {
    }
    public function mayReturn(mixed $value) : bool
    {
    }
    public function returnTypeDeclaration() : string
    {
    }
}
namespace PHPUnit\Framework\MockObject\Generator;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This interface is not covered by the backward compatibility promise for PHPUnit
 */
interface Exception extends \PHPUnit\Framework\MockObject\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class RuntimeException extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\MockObject\Generator\Exception
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MethodNamedMethodException extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\MockObject\Generator\Exception
{
    public function __construct()
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ClassIsEnumerationException extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\MockObject\Generator\Exception
{
    public function __construct(string $className)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class UnknownTypeException extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\MockObject\Generator\Exception
{
    public function __construct(string $type)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class UnknownClassException extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\MockObject\Generator\Exception
{
    public function __construct(string $className)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvalidMethodNameException extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\MockObject\Generator\Exception
{
    public function __construct(string $method)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ClassIsFinalException extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\MockObject\Generator\Exception
{
    public function __construct(string $className)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class DuplicateMethodException extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\MockObject\Generator\Exception
{
    /**
     * @param list<string> $methods
     */
    public function __construct(array $methods)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ReflectionException extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\MockObject\Generator\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class NameAlreadyInUseException extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\MockObject\Generator\Exception
{
    /**
     * @param class-string|trait-string $name
     */
    public function __construct(string $name)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class HookedPropertyGenerator
{
    /**
     * @param class-string         $className
     * @param list<HookedProperty> $properties
     *
     * @return non-empty-string
     */
    public function generate(string $className, array $properties) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class HookedProperty
{
    /**
     * @param non-empty-string $name
     */
    public function __construct(string $name, \SebastianBergmann\Type\Type $type, bool $getHook, bool $setHook)
    {
    }
    public function name() : string
    {
    }
    public function type() : \SebastianBergmann\Type\Type
    {
    }
    public function hasGetHook() : bool
    {
    }
    public function hasSetHook() : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This trait is not covered by the backward compatibility promise for PHPUnit
 */
trait TemplateLoader
{
    /**
     * @var array<string,Template>
     */
    private static array $templates = [];
    private function loadTemplate(string $template) : \SebastianBergmann\Template\Template
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Generator
{
    use \PHPUnit\Framework\MockObject\Generator\TemplateLoader;
    /**
     * Returns a test double for the specified class.
     *
     * @param ?list<non-empty-string> $methods
     * @param list<mixed>             $arguments
     *
     * @throws ClassIsEnumerationException
     * @throws ClassIsFinalException
     * @throws DuplicateMethodException
     * @throws InvalidMethodNameException
     * @throws NameAlreadyInUseException
     * @throws ReflectionException
     * @throws RuntimeException
     * @throws UnknownTypeException
     */
    public function testDouble(string $type, bool $mockObject, ?array $methods = [], array $arguments = [], string $mockClassName = '', bool $callOriginalConstructor = true, bool $callOriginalClone = true, bool $returnValueGeneration = true) : \PHPUnit\Framework\MockObject\MockObject|\PHPUnit\Framework\MockObject\Stub
    {
    }
    /**
     * @param list<class-string> $interfaces
     *
     * @throws RuntimeException
     * @throws UnknownTypeException
     */
    public function testDoubleForInterfaceIntersection(array $interfaces, bool $mockObject, bool $returnValueGeneration = true) : \PHPUnit\Framework\MockObject\MockObject|\PHPUnit\Framework\MockObject\Stub
    {
    }
    /**
     * @param ?list<non-empty-string> $methods
     *
     * @throws ClassIsEnumerationException
     * @throws ClassIsFinalException
     * @throws ReflectionException
     * @throws RuntimeException
     *
     * @todo This method is only public because it is used to test generated code in PHPT tests
     *
     * @see https://github.com/sebastianbergmann/phpunit/issues/5476
     */
    public function generate(string $type, bool $mockObject, ?array $methods = null, string $mockClassName = '', bool $callOriginalClone = true) : \PHPUnit\Framework\MockObject\Generator\DoubledClass
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class DoubledClass
{
    /**
     * @param class-string             $mockName
     * @param list<ConfigurableMethod> $configurableMethods
     */
    public function __construct(string $classCode, string $mockName, array $configurableMethods)
    {
    }
    /**
     * @return class-string
     */
    public function generate() : string
    {
    }
    public function classCode() : string
    {
    }
    /**
     * @return list<ConfigurableMethod>
     */
    public function configurableMethods() : array
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class DoubledMethodSet
{
    public function addMethods(\PHPUnit\Framework\MockObject\Generator\DoubledMethod ...$methods) : void
    {
    }
    /**
     * @return list<DoubledMethod>
     */
    public function asArray() : array
    {
    }
    public function hasMethod(string $methodName) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class DoubledMethod
{
    use \PHPUnit\Framework\MockObject\Generator\TemplateLoader;
    /**
     * @throws ReflectionException
     * @throws RuntimeException
     */
    public static function fromReflection(\ReflectionMethod $method) : self
    {
    }
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public static function fromName(string $className, string $methodName) : self
    {
    }
    /**
     * @return non-empty-string
     */
    public function methodName() : string
    {
    }
    /**
     * @throws RuntimeException
     */
    public function generateCode() : string
    {
    }
    public function returnType() : \SebastianBergmann\Type\Type
    {
    }
    /**
     * @return array<int, mixed>
     */
    public function defaultParameterValues() : array
    {
    }
    /**
     * @return non-negative-int
     */
    public function numberOfParameters() : int
    {
    }
}
namespace PHPUnit\Framework\Constraint;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ExceptionMessageIsOrContains extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(string $expectedMessage)
    {
    }
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ExceptionCode extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(int|string $expected)
    {
    }
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Exception extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(string $className)
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ExceptionMessageMatchesRegularExpression extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(string $regularExpression)
    {
    }
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsAnything extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Evaluates the constraint for parameter $other.
     *
     * If $returnResult is set to false (the default), an exception is thrown
     * in case of a failure. null is returned otherwise.
     *
     * If $returnResult is true, the result of the evaluation is returned as
     * a boolean value instead: true in case of success, false in case of a
     * failure.
     *
     * @throws ExpectationFailedException
     */
    public function evaluate(mixed $other, string $description = '', bool $returnResult = false) : ?bool
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Counts the number of constraint elements.
     */
    public function count() : int
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsType extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var string
     */
    public const TYPE_ARRAY = 'array';
    /**
     * @var string
     */
    public const TYPE_BOOL = 'bool';
    /**
     * @var string
     */
    public const TYPE_FLOAT = 'float';
    /**
     * @var string
     */
    public const TYPE_INT = 'int';
    /**
     * @var string
     */
    public const TYPE_NULL = 'null';
    /**
     * @var string
     */
    public const TYPE_NUMERIC = 'numeric';
    /**
     * @var string
     */
    public const TYPE_OBJECT = 'object';
    /**
     * @var string
     */
    public const TYPE_RESOURCE = 'resource';
    /**
     * @var string
     */
    public const TYPE_CLOSED_RESOURCE = 'resource (closed)';
    /**
     * @var string
     */
    public const TYPE_STRING = 'string';
    /**
     * @var string
     */
    public const TYPE_SCALAR = 'scalar';
    /**
     * @var string
     */
    public const TYPE_CALLABLE = 'callable';
    /**
     * @var string
     */
    public const TYPE_ITERABLE = 'iterable';
    /**
     * @param 'array'|'bool'|'boolean'|'callable'|'double'|'float'|'int'|'integer'|'iterable'|'null'|'numeric'|'object'|'real'|'resource (closed)'|'resource'|'scalar'|'string' $type
     *
     * @throws UnknownTypeException
     */
    public function __construct(string $type)
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsNull extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsInstanceOf extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @throws UnknownClassOrInterfaceException
     */
    public function __construct(string $name)
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsFalse extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsTrue extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class ArrayHasKey extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(int|string $key)
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsList extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract class TraversableContains extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(mixed $value)
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     */
    protected function failureDescription(mixed $other) : string
    {
    }
    protected function value() : mixed
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class TraversableContainsEqual extends \PHPUnit\Framework\Constraint\TraversableContains
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class TraversableContainsOnly extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @param 'array'|'bool'|'boolean'|'callable'|'double'|'float'|'int'|'integer'|'iterable'|'null'|'numeric'|'object'|'real'|'resource (closed)'|'resource'|'scalar'|'string'|class-string $type
     *
     * @throws Exception
     */
    public function __construct(string $type, bool $isNativeType = true)
    {
    }
    /**
     * Evaluates the constraint for parameter $other.
     *
     * If $returnResult is set to false (the default), an exception is thrown
     * in case of a failure. null is returned otherwise.
     *
     * If $returnResult is true, the result of the evaluation is returned as
     * a boolean value instead: true in case of success, false in case of a
     * failure.
     *
     * @throws ExpectationFailedException
     */
    public function evaluate(mixed $other, string $description = '', bool $returnResult = false) : bool
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class TraversableContainsIdentical extends \PHPUnit\Framework\Constraint\TraversableContains
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class StringEndsWith extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @throws EmptyStringException
     */
    public function __construct(string $suffix)
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsJson extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class StringContains extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(string $needle, bool $ignoreCase = false, bool $ignoreLineEndings = false)
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    public function failureDescription(mixed $other) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class StringMatchesFormatDescription extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(string $formatDescription)
    {
    }
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class StringEqualsStringIgnoringLineEndings extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(string $string)
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class StringStartsWith extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @throws EmptyStringException
     */
    public function __construct(string $prefix)
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class RegularExpression extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(string $pattern)
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract class Operator extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns the name of this operator.
     */
    public abstract function operator() : string;
    /**
     * Returns this operator's precedence.
     *
     * @see https://www.php.net/manual/en/language.operators.precedence.php
     */
    public abstract function precedence() : int;
    /**
     * Returns the number of operands.
     */
    public abstract function arity() : int;
    /**
     * Validates $constraint argument.
     */
    protected function checkConstraint(mixed $constraint) : \PHPUnit\Framework\Constraint\Constraint
    {
    }
    /**
     * Returns true if the $constraint needs to be wrapped with braces.
     */
    protected function constraintNeedsParentheses(\PHPUnit\Framework\Constraint\Constraint $constraint) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract class BinaryOperator extends \PHPUnit\Framework\Constraint\Operator
{
    protected function __construct(mixed ...$constraints)
    {
    }
    /**
     * Returns the number of operands (constraints).
     */
    public final function arity() : int
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Counts the number of constraint elements.
     */
    public function count() : int
    {
    }
    /**
     * @return list<Constraint>
     */
    protected final function constraints() : array
    {
    }
    /**
     * Returns true if the $constraint needs to be wrapped with braces.
     */
    protected final function constraintNeedsParentheses(\PHPUnit\Framework\Constraint\Constraint $constraint) : bool
    {
    }
    /**
     * Reduces the sub-expression starting at $this by skipping degenerate
     * sub-expression and returns first descendant constraint that starts
     * a non-reducible sub-expression.
     *
     * See Constraint::reduce() for more.
     */
    protected function reduce() : \PHPUnit\Framework\Constraint\Constraint
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class LogicalAnd extends \PHPUnit\Framework\Constraint\BinaryOperator
{
    public static function fromConstraints(mixed ...$constraints) : self
    {
    }
    /**
     * Returns the name of this operator.
     */
    public function operator() : string
    {
    }
    /**
     * Returns this operator's precedence.
     *
     * @see https://www.php.net/manual/en/language.operators.precedence.php
     */
    public function precedence() : int
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract class UnaryOperator extends \PHPUnit\Framework\Constraint\Operator
{
    public function __construct(mixed $constraint)
    {
    }
    /**
     * Returns the number of operands (constraints).
     */
    public function arity() : int
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Counts the number of constraint elements.
     */
    public function count() : int
    {
    }
    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     */
    protected function failureDescription(mixed $other) : string
    {
    }
    /**
     * Transforms string returned by the member constraint's toString() or
     * failureDescription() such that it reflects constraint's participation in
     * this expression.
     *
     * The method may be overwritten in a subclass to apply default
     * transformation in case the operand constraint does not provide its own
     * custom strings via toStringInContext() or failureDescriptionInContext().
     */
    protected function transformString(string $string) : string
    {
    }
    /**
     * Provides access to $this->constraint for subclasses.
     */
    protected final function constraint() : \PHPUnit\Framework\Constraint\Constraint
    {
    }
    /**
     * Returns true if the $constraint needs to be wrapped with parentheses.
     */
    protected function constraintNeedsParentheses(\PHPUnit\Framework\Constraint\Constraint $constraint) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class LogicalNot extends \PHPUnit\Framework\Constraint\UnaryOperator
{
    public static function negate(string $string) : string
    {
    }
    /**
     * Returns the name of this operator.
     */
    public function operator() : string
    {
    }
    /**
     * Returns this operator's precedence.
     *
     * @see https://www.php.net/manual/en/language.operators.precedence.php
     */
    public function precedence() : int
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class LogicalOr extends \PHPUnit\Framework\Constraint\BinaryOperator
{
    public static function fromConstraints(mixed ...$constraints) : self
    {
    }
    /**
     * Returns the name of this operator.
     */
    public function operator() : string
    {
    }
    /**
     * Returns this operator's precedence.
     *
     * @see https://www.php.net/manual/en/language.operators.precedence.php
     */
    public function precedence() : int
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     */
    public function matches(mixed $other) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class LogicalXor extends \PHPUnit\Framework\Constraint\BinaryOperator
{
    public static function fromConstraints(mixed ...$constraints) : self
    {
    }
    /**
     * Returns the name of this operator.
     */
    public function operator() : string
    {
    }
    /**
     * Returns this operator's precedence.
     *
     * @see https://www.php.net/manual/en/language.operators.precedence.php.
     */
    public function precedence() : int
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @throws ExpectationFailedException
     */
    public function matches(mixed $other) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsFinite extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsInfinite extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsNan extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsEqualCanonicalizing extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(mixed $value)
    {
    }
    /**
     * Evaluates the constraint for parameter $other.
     *
     * If $returnResult is set to false (the default), an exception is thrown
     * in case of a failure. null is returned otherwise.
     *
     * If $returnResult is true, the result of the evaluation is returned as
     * a boolean value instead: true in case of success, false in case of a
     * failure.
     *
     * @throws ExpectationFailedException
     */
    public function evaluate(mixed $other, string $description = '', bool $returnResult = false) : ?bool
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsEqualWithDelta extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(mixed $value, float $delta)
    {
    }
    /**
     * Evaluates the constraint for parameter $other.
     *
     * If $returnResult is set to false (the default), an exception is thrown
     * in case of a failure. null is returned otherwise.
     *
     * If $returnResult is true, the result of the evaluation is returned as
     * a boolean value instead: true in case of success, false in case of a
     * failure.
     *
     * @throws ExpectationFailedException
     */
    public function evaluate(mixed $other, string $description = '', bool $returnResult = false) : ?bool
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsEqualIgnoringCase extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(mixed $value)
    {
    }
    /**
     * Evaluates the constraint for parameter $other.
     *
     * If $returnResult is set to false (the default), an exception is thrown
     * in case of a failure. null is returned otherwise.
     *
     * If $returnResult is true, the result of the evaluation is returned as
     * a boolean value instead: true in case of success, false in case of a
     * failure.
     *
     * @throws ExpectationFailedException
     */
    public function evaluate(mixed $other, string $description = '', bool $returnResult = false) : ?bool
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsEqual extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(mixed $value)
    {
    }
    /**
     * Evaluates the constraint for parameter $other.
     *
     * If $returnResult is set to false (the default), an exception is thrown
     * in case of a failure. null is returned otherwise.
     *
     * If $returnResult is true, the result of the evaluation is returned as
     * a boolean value instead: true in case of success, false in case of a
     * failure.
     *
     * @throws ExpectationFailedException
     */
    public function evaluate(mixed $other, string $description = '', bool $returnResult = false) : ?bool
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class ObjectEquals extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(object $object, string $method = 'equals')
    {
    }
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class ObjectHasProperty extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(string $propertyName)
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class JsonMatches extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(string $value)
    {
    }
    /**
     * Returns a string representation of the object.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsIdentical extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(mixed $value)
    {
    }
    /**
     * Evaluates the constraint for parameter $other.
     *
     * If $returnResult is set to false (the default), an exception is thrown
     * in case of a failure. null is returned otherwise.
     *
     * If $returnResult is true, the result of the evaluation is returned as
     * a boolean value instead: true in case of success, false in case of a
     * failure.
     *
     * @throws ExpectationFailedException
     */
    public function evaluate(mixed $other, string $description = '', bool $returnResult = false) : ?bool
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsEmpty extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
class Count extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(int $expected)
    {
    }
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @throws Exception
     */
    protected function matches(mixed $other) : bool
    {
    }
    /**
     * @throws Exception
     */
    protected function getCountOf(mixed $other) : ?int
    {
    }
    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * @throws Exception
     */
    protected function failureDescription(mixed $other) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class SameSize extends \PHPUnit\Framework\Constraint\Count
{
    /**
     * @param Countable|iterable<mixed> $expected
     *
     * @throws Exception
     */
    public function __construct(\Countable|iterable $expected)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class GreaterThan extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(mixed $value)
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class LessThan extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(mixed $value)
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @template CallbackInput of mixed
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class Callback extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @param callable(CallbackInput $input): bool $callback
     */
    public function __construct(callable $callback)
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    public function isVariadic() : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class FileExists extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsWritable extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsReadable extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class DirectoryExists extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
namespace PHPUnit\Framework\TestStatus;

/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract readonly class TestStatus
{
    public static function from(int $status) : self
    {
    }
    public static function unknown() : self
    {
    }
    public static function success() : self
    {
    }
    public static function skipped(string $message = '') : self
    {
    }
    public static function incomplete(string $message = '') : self
    {
    }
    public static function notice(string $message = '') : self
    {
    }
    public static function deprecation(string $message = '') : self
    {
    }
    public static function failure(string $message = '') : self
    {
    }
    public static function error(string $message = '') : self
    {
    }
    public static function warning(string $message = '') : self
    {
    }
    public static function risky(string $message = '') : self
    {
    }
    /**
     * @phpstan-assert-if-true Known $this
     */
    public function isKnown() : bool
    {
    }
    /**
     * @phpstan-assert-if-true Unknown $this
     */
    public function isUnknown() : bool
    {
    }
    /**
     * @phpstan-assert-if-true Success $this
     */
    public function isSuccess() : bool
    {
    }
    /**
     * @phpstan-assert-if-true Skipped $this
     */
    public function isSkipped() : bool
    {
    }
    /**
     * @phpstan-assert-if-true Incomplete $this
     */
    public function isIncomplete() : bool
    {
    }
    /**
     * @phpstan-assert-if-true Notice $this
     */
    public function isNotice() : bool
    {
    }
    /**
     * @phpstan-assert-if-true Deprecation $this
     */
    public function isDeprecation() : bool
    {
    }
    /**
     * @phpstan-assert-if-true Failure $this
     */
    public function isFailure() : bool
    {
    }
    /**
     * @phpstan-assert-if-true Error $this
     */
    public function isError() : bool
    {
    }
    /**
     * @phpstan-assert-if-true Warning $this
     */
    public function isWarning() : bool
    {
    }
    /**
     * @phpstan-assert-if-true Risky $this
     */
    public function isRisky() : bool
    {
    }
    public function message() : string
    {
    }
    public function isMoreImportantThan(self $other) : bool
    {
    }
    public abstract function asInt() : int;
    public abstract function asString() : string;
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract readonly class Known extends \PHPUnit\Framework\TestStatus\TestStatus
{
    public function isKnown() : true
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Failure extends \PHPUnit\Framework\TestStatus\Known
{
    public function isFailure() : true
    {
    }
    public function asInt() : int
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Incomplete extends \PHPUnit\Framework\TestStatus\Known
{
    public function isIncomplete() : true
    {
    }
    public function asInt() : int
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Error extends \PHPUnit\Framework\TestStatus\Known
{
    public function isError() : true
    {
    }
    public function asInt() : int
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Notice extends \PHPUnit\Framework\TestStatus\Known
{
    public function isNotice() : true
    {
    }
    public function asInt() : int
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Unknown extends \PHPUnit\Framework\TestStatus\TestStatus
{
    public function isUnknown() : true
    {
    }
    public function asInt() : int
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Risky extends \PHPUnit\Framework\TestStatus\Known
{
    public function isRisky() : true
    {
    }
    public function asInt() : int
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Warning extends \PHPUnit\Framework\TestStatus\Known
{
    public function isWarning() : true
    {
    }
    public function asInt() : int
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Skipped extends \PHPUnit\Framework\TestStatus\Known
{
    public function isSkipped() : true
    {
    }
    public function asInt() : int
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Deprecation extends \PHPUnit\Framework\TestStatus\Known
{
    public function isDeprecation() : true
    {
    }
    public function asInt() : int
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Success extends \PHPUnit\Framework\TestStatus\Known
{
    public function isSuccess() : true
    {
    }
    public function asInt() : int
    {
    }
    public function asString() : string
    {
    }
}
namespace PHPUnit\Framework;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface IncompleteTest extends \Throwable
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
class AssertionFailedError extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\SelfDescribing
{
    /**
     * Wrapper for getMessage() which is declared as final.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class IncompleteTestError extends \PHPUnit\Framework\AssertionFailedError implements \PHPUnit\Framework\IncompleteTest
{
}
/**
 * Exception for expectations which failed their check.
 *
 * The exception contains the error message and optionally a
 * SebastianBergmann\Comparator\ComparisonFailure which is used to
 * generate diff output of the failed expectations.
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ExpectationFailedException extends \PHPUnit\Framework\AssertionFailedError
{
    public function __construct(string $message, ?\SebastianBergmann\Comparator\ComparisonFailure $comparisonFailure = null, ?\Exception $previous = null)
    {
    }
    public function getComparisonFailure() : ?\SebastianBergmann\Comparator\ComparisonFailure
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ActualValueIsNotAnObjectException extends \PHPUnit\Framework\Exception
{
    public function __construct()
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ComparisonMethodDoesNotDeclareParameterTypeException extends \PHPUnit\Framework\Exception
{
    public function __construct(string $className, string $methodName)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ComparisonMethodDoesNotAcceptParameterTypeException extends \PHPUnit\Framework\Exception
{
    public function __construct(string $className, string $methodName, string $type)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ComparisonMethodDoesNotDeclareBoolReturnTypeException extends \PHPUnit\Framework\Exception
{
    public function __construct(string $className, string $methodName)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ComparisonMethodDoesNotExistException extends \PHPUnit\Framework\Exception
{
    public function __construct(string $className, string $methodName)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ComparisonMethodDoesNotDeclareExactlyOneParameterException extends \PHPUnit\Framework\Exception
{
    public function __construct(string $className, string $methodName)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract class InvalidArgumentException extends \PHPUnit\Framework\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class UnknownTypeException extends \PHPUnit\Framework\InvalidArgumentException
{
    public function __construct(string $name)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvalidDataProviderException extends \PHPUnit\Framework\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class NoChildTestSuiteException extends \PHPUnit\Framework\Exception
{
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class PhptAssertionFailedError extends \PHPUnit\Framework\AssertionFailedError
{
    /**
     * @param list<array{file: string, line: int, function: string, type: string}> $trace
     */
    public function __construct(string $message, int $code, string $file, int $line, array $trace, string $diff)
    {
    }
    public function syntheticFile() : string
    {
    }
    public function syntheticLine() : int
    {
    }
    /**
     * @return list<array{file: string, line: int, function: string, type: string}>
     */
    public function syntheticTrace() : array
    {
    }
    public function diff() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class GeneratorNotSupportedException extends \PHPUnit\Framework\InvalidArgumentException
{
    public static function fromParameterName(string $parameterName) : self
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface SkippedTest extends \Throwable
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class SkippedWithMessageException extends \PHPUnit\Framework\AssertionFailedError implements \PHPUnit\Framework\SkippedTest
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class SkippedTestSuiteError extends \PHPUnit\Framework\AssertionFailedError implements \PHPUnit\Framework\SkippedTest
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
class CodeCoverageException extends \PHPUnit\Framework\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvalidCoversTargetException extends \PHPUnit\Framework\CodeCoverageException
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class UnknownClassOrInterfaceException extends \PHPUnit\Framework\InvalidArgumentException
{
    public function __construct(string $name)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class EmptyStringException extends \PHPUnit\Framework\InvalidArgumentException
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvalidDependencyException extends \PHPUnit\Framework\AssertionFailedError implements \PHPUnit\Framework\SkippedTest
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ProcessIsolationException extends \PHPUnit\Framework\Exception
{
}
/**
 * @template-implements IteratorAggregate<int, Test>
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
class TestSuite implements \IteratorAggregate, \PHPUnit\Framework\Reorderable, \PHPUnit\Framework\Test
{
    /**
     * @param non-empty-string $name
     */
    public static function empty(string $name) : static
    {
    }
    /**
     * @param ReflectionClass<TestCase> $class
     * @param list<non-empty-string>    $groups
     */
    public static function fromClassReflector(\ReflectionClass $class, array $groups = []) : static
    {
    }
    /**
     * Adds a test to the suite.
     *
     * @param list<non-empty-string> $groups
     */
    public function addTest(\PHPUnit\Framework\Test $test, array $groups = []) : void
    {
    }
    /**
     * Adds the tests from the given class to the suite.
     *
     * @param ReflectionClass<TestCase> $testClass
     * @param list<non-empty-string>    $groups
     *
     * @throws Exception
     */
    public function addTestSuite(\ReflectionClass $testClass, array $groups = []) : void
    {
    }
    /**
     * Wraps both <code>addTest()</code> and <code>addTestSuite</code>
     * as well as the separate import statements for the user's convenience.
     *
     * If the named file cannot be read or there are no new tests that can be
     * added, a <code>PHPUnit\Framework\WarningTestCase</code> will be created instead,
     * leaving the current test run untouched.
     *
     * @param list<non-empty-string> $groups
     *
     * @throws Exception
     */
    public function addTestFile(string $filename, array $groups = []) : void
    {
    }
    /**
     * Wrapper for addTestFile() that adds multiple test files.
     *
     * @param iterable<string> $fileNames
     *
     * @throws Exception
     */
    public function addTestFiles(iterable $fileNames) : void
    {
    }
    /**
     * Counts the number of test cases that will be run by this test.
     */
    public function count() : int
    {
    }
    public function isEmpty() : bool
    {
    }
    /**
     * @return non-empty-string
     */
    public function name() : string
    {
    }
    /**
     * @return array<non-empty-string, list<non-empty-string>>
     */
    public function groups() : array
    {
    }
    /**
     * @return list<PhptTestCase|TestCase>
     */
    public function collect() : array
    {
    }
    /**
     * @throws CodeCoverageException
     * @throws Event\RuntimeException
     * @throws Exception
     * @throws InvalidArgumentException
     * @throws NoPreviousThrowableException
     * @throws UnintentionallyCoveredCodeException
     */
    public function run() : void
    {
    }
    /**
     * Returns the tests as an enumeration.
     *
     * @return list<Test>
     */
    public function tests() : array
    {
    }
    /**
     * Set tests of the test suite.
     *
     * @param list<Test> $tests
     */
    public function setTests(array $tests) : void
    {
    }
    /**
     * Mark the test suite as skipped.
     *
     * @throws SkippedTestSuiteError
     */
    public function markTestSuiteSkipped(string $message = '') : never
    {
    }
    /**
     * Returns an iterator for this test suite.
     */
    public function getIterator() : \Iterator
    {
    }
    public function injectFilter(\PHPUnit\Runner\Filter\Factory $filter) : void
    {
    }
    /**
     * @return list<ExecutionOrderDependency>
     */
    public function provides() : array
    {
    }
    /**
     * @return list<ExecutionOrderDependency>
     */
    public function requires() : array
    {
    }
    public function sortId() : string
    {
    }
    /**
     * @phpstan-assert-if-true class-string<TestCase> $this->name
     */
    public function isForTestClass() : bool
    {
    }
    /**
     * @param ReflectionClass<TestCase> $class
     * @param list<non-empty-string>    $groups
     *
     * @throws Exception
     */
    protected function addTestMethod(\ReflectionClass $class, \ReflectionMethod $method, array $groups) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class DataProviderTestSuite extends \PHPUnit\Framework\TestSuite
{
    /**
     * @param list<ExecutionOrderDependency> $dependencies
     */
    public function setDependencies(array $dependencies) : void
    {
    }
    /**
     * @return non-empty-list<ExecutionOrderDependency>
     */
    public function provides() : array
    {
    }
    /**
     * @return list<ExecutionOrderDependency>
     */
    public function requires() : array
    {
    }
    /**
     * Returns the size of each test created using the data provider(s).
     */
    public function size() : \PHPUnit\Framework\TestSize\TestSize
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract class Assert
{
    /**
     * Asserts that two arrays are equal while only considering a list of keys.
     *
     * @param array<mixed>              $expected
     * @param array<mixed>              $actual
     * @param non-empty-list<array-key> $keysToBeConsidered
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */
    public static final function assertArrayIsEqualToArrayOnlyConsideringListOfKeys(array $expected, array $actual, array $keysToBeConsidered, string $message = '') : void
    {
    }
    /**
     * Asserts that two arrays are equal while ignoring a list of keys.
     *
     * @param array<mixed>              $expected
     * @param array<mixed>              $actual
     * @param non-empty-list<array-key> $keysToBeIgnored
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */
    public static final function assertArrayIsEqualToArrayIgnoringListOfKeys(array $expected, array $actual, array $keysToBeIgnored, string $message = '') : void
    {
    }
    /**
     * Asserts that two arrays are identical while only considering a list of keys.
     *
     * @param array<mixed>              $expected
     * @param array<mixed>              $actual
     * @param non-empty-list<array-key> $keysToBeConsidered
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */
    public static final function assertArrayIsIdenticalToArrayOnlyConsideringListOfKeys(array $expected, array $actual, array $keysToBeConsidered, string $message = '') : void
    {
    }
    /**
     * Asserts that two arrays are equal while ignoring a list of keys.
     *
     * @param array<mixed>              $expected
     * @param array<mixed>              $actual
     * @param non-empty-list<array-key> $keysToBeIgnored
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */
    public static final function assertArrayIsIdenticalToArrayIgnoringListOfKeys(array $expected, array $actual, array $keysToBeIgnored, string $message = '') : void
    {
    }
    /**
     * Asserts that an array has a specified key.
     *
     * @param array<mixed>|ArrayAccess<array-key, mixed> $array
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */
    public static final function assertArrayHasKey(int|string $key, array|\ArrayAccess $array, string $message = '') : void
    {
    }
    /**
     * Asserts that an array does not have a specified key.
     *
     * @param array<mixed>|ArrayAccess<array-key, mixed> $array
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */
    public static final function assertArrayNotHasKey(int|string $key, array|\ArrayAccess $array, string $message = '') : void
    {
    }
    /**
     * @throws ExpectationFailedException
     */
    public static final function assertIsList(mixed $array, string $message = '') : void
    {
    }
    /**
     * Asserts that a haystack contains a needle.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */
    public static final function assertContains(mixed $needle, iterable $haystack, string $message = '') : void
    {
    }
    /**
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    public static final function assertContainsEquals(mixed $needle, iterable $haystack, string $message = '') : void
    {
    }
    /**
     * Asserts that a haystack does not contain a needle.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */
    public static final function assertNotContains(mixed $needle, iterable $haystack, string $message = '') : void
    {
    }
    /**
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    public static final function assertNotContainsEquals(mixed $needle, iterable $haystack, string $message = '') : void
    {
    }
    /**
     * Asserts that a haystack contains only values of a given type.
     *
     * @param 'array'|'bool'|'boolean'|'callable'|'double'|'float'|'int'|'integer'|'iterable'|'null'|'numeric'|'object'|'real'|'resource (closed)'|'resource'|'scalar'|'string' $type
     * @param iterable<mixed>                                                                                                                                                   $haystack
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */
    public static final function assertContainsOnly(string $type, iterable $haystack, ?bool $isNativeType = null, string $message = '') : void
    {
    }
    /**
     * Asserts that a haystack contains only instances of a given class name.
     *
     * @param class-string    $className
     * @param iterable<mixed> $haystack
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */
    public static final function assertContainsOnlyInstancesOf(string $className, iterable $haystack, string $message = '') : void
    {
    }
    /**
     * Asserts that a haystack does not contain only values of a given type.
     *
     * @param 'array'|'bool'|'boolean'|'callable'|'double'|'float'|'int'|'integer'|'iterable'|'null'|'numeric'|'object'|'real'|'resource (closed)'|'resource'|'scalar'|'string' $type
     * @param iterable<mixed>                                                                                                                                                   $haystack
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */
    public static final function assertNotContainsOnly(string $type, iterable $haystack, ?bool $isNativeType = null, string $message = '') : void
    {
    }
    /**
     * Asserts the number of elements of an array, Countable or Traversable.
     *
     * @param Countable|iterable<mixed> $haystack
     *
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws GeneratorNotSupportedException
     */
    public static final function assertCount(int $expectedCount, \Countable|iterable $haystack, string $message = '') : void
    {
    }
    /**
     * Asserts the number of elements of an array, Countable or Traversable.
     *
     * @param Countable|iterable<mixed> $haystack
     *
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws GeneratorNotSupportedException
     */
    public static final function assertNotCount(int $expectedCount, \Countable|iterable $haystack, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables are equal.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertEquals(mixed $expected, mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables are equal (canonicalizing).
     *
     * @throws ExpectationFailedException
     */
    public static final function assertEqualsCanonicalizing(mixed $expected, mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables are equal (ignoring case).
     *
     * @throws ExpectationFailedException
     */
    public static final function assertEqualsIgnoringCase(mixed $expected, mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables are equal (with delta).
     *
     * @throws ExpectationFailedException
     */
    public static final function assertEqualsWithDelta(mixed $expected, mixed $actual, float $delta, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables are not equal.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertNotEquals(mixed $expected, mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables are not equal (canonicalizing).
     *
     * @throws ExpectationFailedException
     */
    public static final function assertNotEqualsCanonicalizing(mixed $expected, mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables are not equal (ignoring case).
     *
     * @throws ExpectationFailedException
     */
    public static final function assertNotEqualsIgnoringCase(mixed $expected, mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables are not equal (with delta).
     *
     * @throws ExpectationFailedException
     */
    public static final function assertNotEqualsWithDelta(mixed $expected, mixed $actual, float $delta, string $message = '') : void
    {
    }
    /**
     * @throws ExpectationFailedException
     */
    public static final function assertObjectEquals(object $expected, object $actual, string $method = 'equals', string $message = '') : void
    {
    }
    /**
     * @throws ExpectationFailedException
     */
    public static final function assertObjectNotEquals(object $expected, object $actual, string $method = 'equals', string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is empty.
     *
     * @throws ExpectationFailedException
     * @throws GeneratorNotSupportedException
     *
     * @phpstan-assert empty $actual
     */
    public static final function assertEmpty(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not empty.
     *
     * @throws ExpectationFailedException
     * @throws GeneratorNotSupportedException
     *
     * @phpstan-assert !empty $actual
     */
    public static final function assertNotEmpty(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a value is greater than another value.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertGreaterThan(mixed $expected, mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a value is greater than or equal to another value.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertGreaterThanOrEqual(mixed $expected, mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a value is smaller than another value.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertLessThan(mixed $expected, mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a value is smaller than or equal to another value.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertLessThanOrEqual(mixed $expected, mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of one file is equal to the contents of another
     * file.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertFileEquals(string $expected, string $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of one file is equal to the contents of another
     * file (canonicalizing).
     *
     * @throws ExpectationFailedException
     */
    public static final function assertFileEqualsCanonicalizing(string $expected, string $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of one file is equal to the contents of another
     * file (ignoring case).
     *
     * @throws ExpectationFailedException
     */
    public static final function assertFileEqualsIgnoringCase(string $expected, string $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of one file is not equal to the contents of
     * another file.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertFileNotEquals(string $expected, string $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of one file is not equal to the contents of another
     * file (canonicalizing).
     *
     * @throws ExpectationFailedException
     */
    public static final function assertFileNotEqualsCanonicalizing(string $expected, string $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of one file is not equal to the contents of another
     * file (ignoring case).
     *
     * @throws ExpectationFailedException
     */
    public static final function assertFileNotEqualsIgnoringCase(string $expected, string $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of a string is equal
     * to the contents of a file.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertStringEqualsFile(string $expectedFile, string $actualString, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of a string is equal
     * to the contents of a file (canonicalizing).
     *
     * @throws ExpectationFailedException
     */
    public static final function assertStringEqualsFileCanonicalizing(string $expectedFile, string $actualString, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of a string is equal
     * to the contents of a file (ignoring case).
     *
     * @throws ExpectationFailedException
     */
    public static final function assertStringEqualsFileIgnoringCase(string $expectedFile, string $actualString, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of a string is not equal
     * to the contents of a file.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertStringNotEqualsFile(string $expectedFile, string $actualString, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of a string is not equal
     * to the contents of a file (canonicalizing).
     *
     * @throws ExpectationFailedException
     */
    public static final function assertStringNotEqualsFileCanonicalizing(string $expectedFile, string $actualString, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of a string is not equal
     * to the contents of a file (ignoring case).
     *
     * @throws ExpectationFailedException
     */
    public static final function assertStringNotEqualsFileIgnoringCase(string $expectedFile, string $actualString, string $message = '') : void
    {
    }
    /**
     * Asserts that a file/dir is readable.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertIsReadable(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a file/dir exists and is not readable.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertIsNotReadable(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a file/dir exists and is writable.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertIsWritable(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a file/dir exists and is not writable.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertIsNotWritable(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory exists.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertDirectoryExists(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory does not exist.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertDirectoryDoesNotExist(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory exists and is readable.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertDirectoryIsReadable(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory exists and is not readable.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertDirectoryIsNotReadable(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory exists and is writable.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertDirectoryIsWritable(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory exists and is not writable.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertDirectoryIsNotWritable(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a file exists.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertFileExists(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a file does not exist.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertFileDoesNotExist(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a file exists and is readable.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertFileIsReadable(string $file, string $message = '') : void
    {
    }
    /**
     * Asserts that a file exists and is not readable.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertFileIsNotReadable(string $file, string $message = '') : void
    {
    }
    /**
     * Asserts that a file exists and is writable.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertFileIsWritable(string $file, string $message = '') : void
    {
    }
    /**
     * Asserts that a file exists and is not writable.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertFileIsNotWritable(string $file, string $message = '') : void
    {
    }
    /**
     * Asserts that a condition is true.
     *
     * @throws ExpectationFailedException
     *
     * @phpstan-assert true $condition
     */
    public static final function assertTrue(mixed $condition, string $message = '') : void
    {
    }
    /**
     * Asserts that a condition is not true.
     *
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !true $condition
     */
    public static final function assertNotTrue(mixed $condition, string $message = '') : void
    {
    }
    /**
     * Asserts that a condition is false.
     *
     * @throws ExpectationFailedException
     *
     * @phpstan-assert false $condition
     */
    public static final function assertFalse(mixed $condition, string $message = '') : void
    {
    }
    /**
     * Asserts that a condition is not false.
     *
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !false $condition
     */
    public static final function assertNotFalse(mixed $condition, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is null.
     *
     * @throws ExpectationFailedException
     *
     * @phpstan-assert null $actual
     */
    public static final function assertNull(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not null.
     *
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !null $actual
     */
    public static final function assertNotNull(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is finite.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertFinite(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is infinite.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertInfinite(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is nan.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertNan(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that an object has a specified property.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertObjectHasProperty(string $propertyName, object $object, string $message = '') : void
    {
    }
    /**
     * Asserts that an object does not have a specified property.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertObjectNotHasProperty(string $propertyName, object $object, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables have the same type and value.
     * Used on objects, it asserts that two variables reference
     * the same object.
     *
     * @template ExpectedType
     *
     * @param ExpectedType $expected
     *
     * @throws ExpectationFailedException
     *
     * @phpstan-assert =ExpectedType $actual
     */
    public static final function assertSame(mixed $expected, mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables do not have the same type and value.
     * Used on objects, it asserts that two variables do not reference
     * the same object.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertNotSame(mixed $expected, mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of a given type.
     *
     * @template ExpectedType of object
     *
     * @param class-string<ExpectedType> $expected
     *
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws UnknownClassOrInterfaceException
     *
     * @phpstan-assert =ExpectedType $actual
     */
    public static final function assertInstanceOf(string $expected, mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of a given type.
     *
     * @template ExpectedType of object
     *
     * @param class-string<ExpectedType> $expected
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !ExpectedType $actual
     */
    public static final function assertNotInstanceOf(string $expected, mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type array.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert array $actual
     */
    public static final function assertIsArray(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type bool.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert bool $actual
     */
    public static final function assertIsBool(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type float.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert float $actual
     */
    public static final function assertIsFloat(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type int.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert int $actual
     */
    public static final function assertIsInt(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type numeric.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert numeric $actual
     */
    public static final function assertIsNumeric(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type object.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert object $actual
     */
    public static final function assertIsObject(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type resource.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert resource $actual
     */
    public static final function assertIsResource(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type resource and is closed.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert resource $actual
     */
    public static final function assertIsClosedResource(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type string.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert string $actual
     */
    public static final function assertIsString(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type scalar.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert scalar $actual
     */
    public static final function assertIsScalar(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type callable.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert callable $actual
     */
    public static final function assertIsCallable(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type iterable.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert iterable $actual
     */
    public static final function assertIsIterable(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type array.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !array $actual
     */
    public static final function assertIsNotArray(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type bool.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !bool $actual
     */
    public static final function assertIsNotBool(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type float.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !float $actual
     */
    public static final function assertIsNotFloat(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type int.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !int $actual
     */
    public static final function assertIsNotInt(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type numeric.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !numeric $actual
     */
    public static final function assertIsNotNumeric(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type object.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !object $actual
     */
    public static final function assertIsNotObject(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type resource.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !resource $actual
     */
    public static final function assertIsNotResource(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type resource.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !resource $actual
     */
    public static final function assertIsNotClosedResource(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type string.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !string $actual
     */
    public static final function assertIsNotString(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type scalar.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !scalar $actual
     */
    public static final function assertIsNotScalar(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type callable.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !callable $actual
     */
    public static final function assertIsNotCallable(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type iterable.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !iterable $actual
     */
    public static final function assertIsNotIterable(mixed $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a string matches a given regular expression.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertMatchesRegularExpression(string $pattern, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string does not match a given regular expression.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertDoesNotMatchRegularExpression(string $pattern, string $string, string $message = '') : void
    {
    }
    /**
     * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
     * is the same.
     *
     * @param Countable|iterable<mixed> $expected
     * @param Countable|iterable<mixed> $actual
     *
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws GeneratorNotSupportedException
     */
    public static final function assertSameSize(\Countable|iterable $expected, \Countable|iterable $actual, string $message = '') : void
    {
    }
    /**
     * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
     * is not the same.
     *
     * @param Countable|iterable<mixed> $expected
     * @param Countable|iterable<mixed> $actual
     *
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws GeneratorNotSupportedException
     */
    public static final function assertNotSameSize(\Countable|iterable $expected, \Countable|iterable $actual, string $message = '') : void
    {
    }
    /**
     * @throws ExpectationFailedException
     */
    public static final function assertStringContainsStringIgnoringLineEndings(string $needle, string $haystack, string $message = '') : void
    {
    }
    /**
     * Asserts that two strings are equal except for line endings.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertStringEqualsStringIgnoringLineEndings(string $expected, string $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a string matches a given format string.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertFileMatchesFormat(string $format, string $actualFile, string $message = '') : void
    {
    }
    /**
     * Asserts that a string matches a given format string.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertFileMatchesFormatFile(string $formatFile, string $actualFile, string $message = '') : void
    {
    }
    /**
     * Asserts that a string matches a given format string.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertStringMatchesFormat(string $format, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string matches a given format file.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertStringMatchesFormatFile(string $formatFile, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string starts with a given prefix.
     *
     * @param non-empty-string $prefix
     *
     * @throws ExpectationFailedException
     * @throws InvalidArgumentException
     */
    public static final function assertStringStartsWith(string $prefix, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string starts not with a given prefix.
     *
     * @param non-empty-string $prefix
     *
     * @throws ExpectationFailedException
     * @throws InvalidArgumentException
     */
    public static final function assertStringStartsNotWith(string $prefix, string $string, string $message = '') : void
    {
    }
    /**
     * @throws ExpectationFailedException
     */
    public static final function assertStringContainsString(string $needle, string $haystack, string $message = '') : void
    {
    }
    /**
     * @throws ExpectationFailedException
     */
    public static final function assertStringContainsStringIgnoringCase(string $needle, string $haystack, string $message = '') : void
    {
    }
    /**
     * @throws ExpectationFailedException
     */
    public static final function assertStringNotContainsString(string $needle, string $haystack, string $message = '') : void
    {
    }
    /**
     * @throws ExpectationFailedException
     */
    public static final function assertStringNotContainsStringIgnoringCase(string $needle, string $haystack, string $message = '') : void
    {
    }
    /**
     * Asserts that a string ends with a given suffix.
     *
     * @param non-empty-string $suffix
     *
     * @throws ExpectationFailedException
     * @throws InvalidArgumentException
     */
    public static final function assertStringEndsWith(string $suffix, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string ends not with a given suffix.
     *
     * @param non-empty-string $suffix
     *
     * @throws ExpectationFailedException
     * @throws InvalidArgumentException
     */
    public static final function assertStringEndsNotWith(string $suffix, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that two XML files are equal.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws XmlException
     */
    public static final function assertXmlFileEqualsXmlFile(string $expectedFile, string $actualFile, string $message = '') : void
    {
    }
    /**
     * Asserts that two XML files are not equal.
     *
     * @throws \PHPUnit\Util\Exception
     * @throws ExpectationFailedException
     */
    public static final function assertXmlFileNotEqualsXmlFile(string $expectedFile, string $actualFile, string $message = '') : void
    {
    }
    /**
     * Asserts that two XML documents are equal.
     *
     * @throws ExpectationFailedException
     * @throws XmlException
     */
    public static final function assertXmlStringEqualsXmlFile(string $expectedFile, string $actualXml, string $message = '') : void
    {
    }
    /**
     * Asserts that two XML documents are not equal.
     *
     * @throws ExpectationFailedException
     * @throws XmlException
     */
    public static final function assertXmlStringNotEqualsXmlFile(string $expectedFile, string $actualXml, string $message = '') : void
    {
    }
    /**
     * Asserts that two XML documents are equal.
     *
     * @throws ExpectationFailedException
     * @throws XmlException
     */
    public static final function assertXmlStringEqualsXmlString(string $expectedXml, string $actualXml, string $message = '') : void
    {
    }
    /**
     * Asserts that two XML documents are not equal.
     *
     * @throws ExpectationFailedException
     * @throws XmlException
     */
    public static final function assertXmlStringNotEqualsXmlString(string $expectedXml, string $actualXml, string $message = '') : void
    {
    }
    /**
     * Evaluates a PHPUnit\Framework\Constraint matcher object.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertThat(mixed $value, \PHPUnit\Framework\Constraint\Constraint $constraint, string $message = '') : void
    {
    }
    /**
     * Asserts that a string is a valid JSON string.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertJson(string $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that two given JSON encoded objects or arrays are equal.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertJsonStringEqualsJsonString(string $expectedJson, string $actualJson, string $message = '') : void
    {
    }
    /**
     * Asserts that two given JSON encoded objects or arrays are not equal.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertJsonStringNotEqualsJsonString(string $expectedJson, string $actualJson, string $message = '') : void
    {
    }
    /**
     * Asserts that the generated JSON encoded object and the content of the given file are equal.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertJsonStringEqualsJsonFile(string $expectedFile, string $actualJson, string $message = '') : void
    {
    }
    /**
     * Asserts that the generated JSON encoded object and the content of the given file are not equal.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertJsonStringNotEqualsJsonFile(string $expectedFile, string $actualJson, string $message = '') : void
    {
    }
    /**
     * Asserts that two JSON files are equal.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertJsonFileEqualsJsonFile(string $expectedFile, string $actualFile, string $message = '') : void
    {
    }
    /**
     * Asserts that two JSON files are not equal.
     *
     * @throws ExpectationFailedException
     */
    public static final function assertJsonFileNotEqualsJsonFile(string $expectedFile, string $actualFile, string $message = '') : void
    {
    }
    /**
     * @throws Exception
     */
    public static final function logicalAnd(mixed ...$constraints) : \PHPUnit\Framework\Constraint\LogicalAnd
    {
    }
    public static final function logicalOr(mixed ...$constraints) : \PHPUnit\Framework\Constraint\LogicalOr
    {
    }
    public static final function logicalNot(\PHPUnit\Framework\Constraint\Constraint $constraint) : \PHPUnit\Framework\Constraint\LogicalNot
    {
    }
    public static final function logicalXor(mixed ...$constraints) : \PHPUnit\Framework\Constraint\LogicalXor
    {
    }
    public static final function anything() : \PHPUnit\Framework\Constraint\IsAnything
    {
    }
    public static final function isTrue() : \PHPUnit\Framework\Constraint\IsTrue
    {
    }
    /**
     * @template CallbackInput of mixed
     *
     * @param callable(CallbackInput $callback): bool $callback
     *
     * @return Callback<CallbackInput>
     */
    public static final function callback(callable $callback) : \PHPUnit\Framework\Constraint\Callback
    {
    }
    public static final function isFalse() : \PHPUnit\Framework\Constraint\IsFalse
    {
    }
    public static final function isJson() : \PHPUnit\Framework\Constraint\IsJson
    {
    }
    public static final function isNull() : \PHPUnit\Framework\Constraint\IsNull
    {
    }
    public static final function isFinite() : \PHPUnit\Framework\Constraint\IsFinite
    {
    }
    public static final function isInfinite() : \PHPUnit\Framework\Constraint\IsInfinite
    {
    }
    public static final function isNan() : \PHPUnit\Framework\Constraint\IsNan
    {
    }
    public static final function containsEqual(mixed $value) : \PHPUnit\Framework\Constraint\TraversableContainsEqual
    {
    }
    public static final function containsIdentical(mixed $value) : \PHPUnit\Framework\Constraint\TraversableContainsIdentical
    {
    }
    /**
     * @param 'array'|'bool'|'boolean'|'callable'|'double'|'float'|'int'|'integer'|'iterable'|'null'|'numeric'|'object'|'real'|'resource (closed)'|'resource'|'scalar'|'string' $type
     *
     * @throws Exception
     */
    public static final function containsOnly(string $type) : \PHPUnit\Framework\Constraint\TraversableContainsOnly
    {
    }
    /**
     * @param class-string $className
     *
     * @throws Exception
     */
    public static final function containsOnlyInstancesOf(string $className) : \PHPUnit\Framework\Constraint\TraversableContainsOnly
    {
    }
    public static final function arrayHasKey(int|string $key) : \PHPUnit\Framework\Constraint\ArrayHasKey
    {
    }
    public static final function isList() : \PHPUnit\Framework\Constraint\IsList
    {
    }
    public static final function equalTo(mixed $value) : \PHPUnit\Framework\Constraint\IsEqual
    {
    }
    public static final function equalToCanonicalizing(mixed $value) : \PHPUnit\Framework\Constraint\IsEqualCanonicalizing
    {
    }
    public static final function equalToIgnoringCase(mixed $value) : \PHPUnit\Framework\Constraint\IsEqualIgnoringCase
    {
    }
    public static final function equalToWithDelta(mixed $value, float $delta) : \PHPUnit\Framework\Constraint\IsEqualWithDelta
    {
    }
    public static final function isEmpty() : \PHPUnit\Framework\Constraint\IsEmpty
    {
    }
    public static final function isWritable() : \PHPUnit\Framework\Constraint\IsWritable
    {
    }
    public static final function isReadable() : \PHPUnit\Framework\Constraint\IsReadable
    {
    }
    public static final function directoryExists() : \PHPUnit\Framework\Constraint\DirectoryExists
    {
    }
    public static final function fileExists() : \PHPUnit\Framework\Constraint\FileExists
    {
    }
    public static final function greaterThan(mixed $value) : \PHPUnit\Framework\Constraint\GreaterThan
    {
    }
    public static final function greaterThanOrEqual(mixed $value) : \PHPUnit\Framework\Constraint\LogicalOr
    {
    }
    public static final function identicalTo(mixed $value) : \PHPUnit\Framework\Constraint\IsIdentical
    {
    }
    /**
     * @throws UnknownClassOrInterfaceException
     */
    public static final function isInstanceOf(string $className) : \PHPUnit\Framework\Constraint\IsInstanceOf
    {
    }
    /**
     * @param 'array'|'bool'|'boolean'|'callable'|'double'|'float'|'int'|'integer'|'iterable'|'null'|'numeric'|'object'|'real'|'resource (closed)'|'resource'|'scalar'|'string' $type
     *
     * @throws Exception
     */
    public static final function isType(string $type) : \PHPUnit\Framework\Constraint\IsType
    {
    }
    public static final function lessThan(mixed $value) : \PHPUnit\Framework\Constraint\LessThan
    {
    }
    public static final function lessThanOrEqual(mixed $value) : \PHPUnit\Framework\Constraint\LogicalOr
    {
    }
    public static final function matchesRegularExpression(string $pattern) : \PHPUnit\Framework\Constraint\RegularExpression
    {
    }
    public static final function matches(string $string) : \PHPUnit\Framework\Constraint\StringMatchesFormatDescription
    {
    }
    /**
     * @param non-empty-string $prefix
     *
     * @throws InvalidArgumentException
     */
    public static final function stringStartsWith(string $prefix) : \PHPUnit\Framework\Constraint\StringStartsWith
    {
    }
    public static final function stringContains(string $string, bool $case = true) : \PHPUnit\Framework\Constraint\StringContains
    {
    }
    /**
     * @param non-empty-string $suffix
     *
     * @throws InvalidArgumentException
     */
    public static final function stringEndsWith(string $suffix) : \PHPUnit\Framework\Constraint\StringEndsWith
    {
    }
    public static final function stringEqualsStringIgnoringLineEndings(string $string) : \PHPUnit\Framework\Constraint\StringEqualsStringIgnoringLineEndings
    {
    }
    public static final function countOf(int $count) : \PHPUnit\Framework\Constraint\Count
    {
    }
    public static final function objectEquals(object $object, string $method = 'equals') : \PHPUnit\Framework\Constraint\ObjectEquals
    {
    }
    /**
     * Fails a test with the given message.
     *
     * @throws AssertionFailedError
     */
    public static final function fail(string $message = '') : never
    {
    }
    /**
     * Mark the test as incomplete.
     *
     * @throws IncompleteTestError
     */
    public static final function markTestIncomplete(string $message = '') : never
    {
    }
    /**
     * Mark the test as skipped.
     *
     * @throws SkippedWithMessageException
     */
    public static final function markTestSkipped(string $message = '') : never
    {
    }
    /**
     * Return the current assertion count.
     */
    public static final function getCount() : int
    {
    }
    /**
     * Reset the assertion counter.
     */
    public static final function resetCount() : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestBuilder
{
    /**
     * @param ReflectionClass<TestCase> $theClass
     * @param non-empty-string          $methodName
     * @param list<non-empty-string>    $groups
     *
     * @throws InvalidDataProviderException
     */
    public function build(\ReflectionClass $theClass, string $methodName, array $groups = []) : \PHPUnit\Framework\Test
    {
    }
}
/**
 * @template-implements RecursiveIterator<int, Test>
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestSuiteIterator implements \RecursiveIterator
{
    public function __construct(\PHPUnit\Framework\TestSuite $testSuite)
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\Framework\Test
    {
    }
    public function next() : void
    {
    }
    /**
     * @throws NoChildTestSuiteException
     */
    public function getChildren() : self
    {
    }
    public function hasChildren() : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestRunner
{
    public function __construct()
    {
    }
    /**
     * @throws CodeCoverageException
     * @throws Exception
     * @throws InvalidArgumentException
     * @throws UnintentionallyCoveredCodeException
     */
    public function run(\PHPUnit\Framework\TestCase $test) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class IsolatedTestRunnerRegistry
{
    public static function run(\PHPUnit\Framework\TestCase $test, bool $runEntireClass, bool $preserveGlobalState) : void
    {
    }
    public static function set(\PHPUnit\Framework\IsolatedTestRunner $runner) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This interface is not covered by the backward compatibility promise for PHPUnit
 */
interface IsolatedTestRunner
{
    public function run(\PHPUnit\Framework\TestCase $test, bool $runEntireClass, bool $preserveGlobalState) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class SeparateProcessTestRunner implements \PHPUnit\Framework\IsolatedTestRunner
{
    /**
     * @throws \PHPUnit\Runner\Exception
     * @throws \PHPUnit\Util\Exception
     * @throws Exception
     * @throws InvalidArgumentException
     * @throws NoPreviousThrowableException
     * @throws ProcessIsolationException
     * @throws StaticAnalysisCacheNotConfiguredException
     */
    public function run(\PHPUnit\Framework\TestCase $test, bool $runEntireClass, bool $preserveGlobalState) : void
    {
    }
}
namespace PHPUnit\Framework\TestSize;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
abstract readonly class TestSize
{
    public static function unknown() : self
    {
    }
    public static function small() : self
    {
    }
    public static function medium() : self
    {
    }
    public static function large() : self
    {
    }
    /**
     * @phpstan-assert-if-true Known $this
     */
    public function isKnown() : bool
    {
    }
    /**
     * @phpstan-assert-if-true Unknown $this
     */
    public function isUnknown() : bool
    {
    }
    /**
     * @phpstan-assert-if-true Small $this
     */
    public function isSmall() : bool
    {
    }
    /**
     * @phpstan-assert-if-true Medium $this
     */
    public function isMedium() : bool
    {
    }
    /**
     * @phpstan-assert-if-true Large $this
     */
    public function isLarge() : bool
    {
    }
    public abstract function asString() : string;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
abstract readonly class Known extends \PHPUnit\Framework\TestSize\TestSize
{
    public function isKnown() : true
    {
    }
    public abstract function isGreaterThan(self $other) : bool;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class Medium extends \PHPUnit\Framework\TestSize\Known
{
    public function isMedium() : true
    {
    }
    public function isGreaterThan(\PHPUnit\Framework\TestSize\TestSize $other) : bool
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class Unknown extends \PHPUnit\Framework\TestSize\TestSize
{
    public function isUnknown() : true
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class Large extends \PHPUnit\Framework\TestSize\Known
{
    public function isLarge() : true
    {
    }
    public function isGreaterThan(\PHPUnit\Framework\TestSize\TestSize $other) : bool
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class Small extends \PHPUnit\Framework\TestSize\Known
{
    public function isSmall() : true
    {
    }
    public function isGreaterThan(\PHPUnit\Framework\TestSize\TestSize $other) : bool
    {
    }
    public function asString() : string
    {
    }
}
namespace PHPUnit\Framework\Attributes;

/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
final readonly class RunTestsInSeparateProcesses
{
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_METHOD)]
final readonly class AfterClass
{
    /**
     * @param non-negative-int $priority
     */
    public function __construct(int $priority = 0)
    {
    }
    /**
     * @return non-negative-int
     */
    public function priority() : int
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
final readonly class RequiresSetting
{
    /**
     * @param non-empty-string $setting
     * @param non-empty-string $value
     */
    public function __construct(string $setting, string $value)
    {
    }
    /**
     * @return non-empty-string
     */
    public function setting() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function value() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
final readonly class RunClassInSeparateProcess
{
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
final readonly class DoesNotPerformAssertions
{
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
final readonly class CoversMethod
{
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public function __construct(string $className, $methodName)
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function methodName() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
final readonly class UsesFunction
{
    /**
     * @param non-empty-string $functionName
     */
    public function __construct(string $functionName)
    {
    }
    /**
     * @return non-empty-string
     */
    public function functionName() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
final readonly class CoversClass
{
    /**
     * @param class-string $className
     */
    public function __construct(string $className)
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_METHOD)]
final readonly class Test
{
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
final readonly class DataProvider
{
    /**
     * @param non-empty-string $methodName
     */
    public function __construct(string $methodName)
    {
    }
    /**
     * @return non-empty-string
     */
    public function methodName() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_METHOD)]
final readonly class PostCondition
{
    /**
     * @param non-negative-int $priority
     */
    public function __construct(int $priority = 0)
    {
    }
    /**
     * @return non-negative-int
     */
    public function priority() : int
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
final readonly class PreserveGlobalState
{
    public function __construct(bool $enabled)
    {
    }
    public function enabled() : bool
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
final readonly class UsesMethod
{
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public function __construct(string $className, $methodName)
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function methodName() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
final readonly class DisableReturnValueGenerationForTestDoubles
{
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
final readonly class RequiresMethod
{
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public function __construct(string $className, string $methodName)
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function methodName() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
final readonly class UsesClass
{
    /**
     * @param class-string $className
     */
    public function __construct(string $className)
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
final readonly class Depends
{
    /**
     * @param non-empty-string $methodName
     */
    public function __construct(string $methodName)
    {
    }
    /**
     * @return non-empty-string
     */
    public function methodName() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
final readonly class DependsOnClassUsingDeepClone
{
    /**
     * @param class-string $className
     */
    public function __construct(string $className)
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
final readonly class DependsOnClass
{
    /**
     * @param class-string $className
     */
    public function __construct(string $className)
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
final readonly class RequiresPhpExtension
{
    /**
     * @param non-empty-string      $extension
     * @param null|non-empty-string $versionRequirement
     */
    public function __construct(string $extension, ?string $versionRequirement = null)
    {
    }
    /**
     * @return non-empty-string
     */
    public function extension() : string
    {
    }
    /**
     * @return null|non-empty-string
     */
    public function versionRequirement() : ?string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
final readonly class DependsOnClassUsingShallowClone
{
    /**
     * @param class-string $className
     */
    public function __construct(string $className)
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
final readonly class BackupGlobals
{
    public function __construct(bool $enabled)
    {
    }
    public function enabled() : bool
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
final readonly class RequiresPhp
{
    /**
     * @param non-empty-string $versionRequirement
     */
    public function __construct(string $versionRequirement)
    {
    }
    /**
     * @return non-empty-string
     */
    public function versionRequirement() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
final readonly class Medium
{
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
final readonly class DependsUsingShallowClone
{
    /**
     * @param non-empty-string $methodName
     */
    public function __construct(string $methodName)
    {
    }
    /**
     * @return non-empty-string
     */
    public function methodName() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
final readonly class Ticket
{
    /**
     * @param non-empty-string $text
     */
    public function __construct(string $text)
    {
    }
    /**
     * @return non-empty-string
     */
    public function text() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
final readonly class RequiresPhpunit
{
    /**
     * @param non-empty-string $versionRequirement
     */
    public function __construct(string $versionRequirement)
    {
    }
    /**
     * @return non-empty-string
     */
    public function versionRequirement() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
final readonly class TestWithJson
{
    /**
     * @param non-empty-string  $json
     * @param ?non-empty-string $name
     */
    public function __construct(string $json, ?string $name = null)
    {
    }
    /**
     * @return non-empty-string
     */
    public function json() : string
    {
    }
    /**
     * @return ?non-empty-string
     */
    public function name() : ?string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_METHOD)]
final readonly class RunInSeparateProcess
{
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
final readonly class DependsExternalUsingShallowClone
{
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public function __construct(string $className, string $methodName)
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function methodName() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
final readonly class Group
{
    /**
     * @param non-empty-string $name
     */
    public function __construct(string $name)
    {
    }
    /**
     * @return non-empty-string
     */
    public function name() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_METHOD)]
final readonly class After
{
    /**
     * @param non-negative-int $priority
     */
    public function __construct(int $priority = 0)
    {
    }
    /**
     * @return non-negative-int
     */
    public function priority() : int
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
final readonly class DependsExternal
{
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public function __construct(string $className, string $methodName)
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function methodName() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
final readonly class RequiresOperatingSystem
{
    /**
     * @param non-empty-string $regularExpression
     */
    public function __construct(string $regularExpression)
    {
    }
    /**
     * @return non-empty-string
     */
    public function regularExpression() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
final readonly class RequiresPhpunitExtension
{
    /**
     * @param class-string<Extension> $extensionClass
     */
    public function __construct(string $extensionClass)
    {
    }
    /**
     * @return class-string<Extension>
     */
    public function extensionClass() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
final readonly class TestDox
{
    /**
     * @param non-empty-string $text
     */
    public function __construct(string $text)
    {
    }
    /**
     * @return non-empty-string
     */
    public function text() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
final readonly class RequiresFunction
{
    /**
     * @param non-empty-string $functionName
     */
    public function __construct(string $functionName)
    {
    }
    /**
     * @return non-empty-string
     */
    public function functionName() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_METHOD)]
final readonly class BeforeClass
{
    /**
     * @param non-negative-int $priority
     */
    public function __construct(int $priority = 0)
    {
    }
    /**
     * @return non-negative-int
     */
    public function priority() : int
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
final readonly class CoversNothing
{
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_METHOD)]
final readonly class Before
{
    /**
     * @param non-negative-int $priority
     */
    public function __construct(int $priority = 0)
    {
    }
    /**
     * @return non-negative-int
     */
    public function priority() : int
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
final readonly class DependsUsingDeepClone
{
    /**
     * @param non-empty-string $methodName
     */
    public function __construct(string $methodName)
    {
    }
    /**
     * @return non-empty-string
     */
    public function methodName() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
final readonly class CoversFunction
{
    /**
     * @param non-empty-string $functionName
     */
    public function __construct(string $functionName)
    {
    }
    /**
     * @return non-empty-string
     */
    public function functionName() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
final readonly class DataProviderExternal
{
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public function __construct(string $className, string $methodName)
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function methodName() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
final readonly class Large
{
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
final readonly class Small
{
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
final readonly class RequiresOperatingSystemFamily
{
    /**
     * @param non-empty-string $operatingSystemFamily
     */
    public function __construct(string $operatingSystemFamily)
    {
    }
    /**
     * @return non-empty-string
     */
    public function operatingSystemFamily() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
final readonly class BackupStaticProperties
{
    public function __construct(bool $enabled)
    {
    }
    public function enabled() : bool
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
final readonly class IgnoreDeprecations
{
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
final readonly class ExcludeGlobalVariableFromBackup
{
    /**
     * @param non-empty-string $globalVariableName
     */
    public function __construct(string $globalVariableName)
    {
    }
    /**
     * @return non-empty-string
     */
    public function globalVariableName() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
final readonly class DependsExternalUsingDeepClone
{
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public function __construct(string $className, string $methodName)
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function methodName() : string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
final readonly class IgnorePhpunitDeprecations
{
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_METHOD)]
final readonly class PreCondition
{
    /**
     * @param non-negative-int $priority
     */
    public function __construct(int $priority = 0)
    {
    }
    /**
     * @return non-negative-int
     */
    public function priority() : int
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
final readonly class TestWith
{
    /**
     * @param array<mixed>      $data
     * @param ?non-empty-string $name
     */
    public function __construct(array $data, ?string $name = null)
    {
    }
    /**
     * @return array<mixed>
     */
    public function data() : array
    {
    }
    /**
     * @return ?non-empty-string
     */
    public function name() : ?string
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_METHOD)]
final readonly class WithoutErrorHandler
{
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
final readonly class ExcludeStaticPropertyFromBackup
{
    /**
     * @param class-string     $className
     * @param non-empty-string $propertyName
     */
    public function __construct(string $className, string $propertyName)
    {
    }
    /**
     * @return class-string
     */
    public function className() : string
    {
    }
    /**
     * @return non-empty-string
     */
    public function propertyName() : string
    {
    }
}
namespace PHPUnit\Framework;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ExecutionOrderDependency implements \Stringable
{
    public static function invalid() : self
    {
    }
    public static function forClass(\PHPUnit\Metadata\DependsOnClass $metadata) : self
    {
    }
    public static function forMethod(\PHPUnit\Metadata\DependsOnMethod $metadata) : self
    {
    }
    /**
     * @param list<ExecutionOrderDependency> $dependencies
     *
     * @return list<ExecutionOrderDependency>
     */
    public static function filterInvalid(array $dependencies) : array
    {
    }
    /**
     * @param list<ExecutionOrderDependency> $existing
     * @param list<ExecutionOrderDependency> $additional
     *
     * @return list<ExecutionOrderDependency>
     */
    public static function mergeUnique(array $existing, array $additional) : array
    {
    }
    /**
     * @param list<ExecutionOrderDependency> $left
     * @param list<ExecutionOrderDependency> $right
     *
     * @return list<ExecutionOrderDependency>
     */
    public static function diff(array $left, array $right) : array
    {
    }
    public function __construct(string $classOrCallableName, ?string $methodName = null, bool $deepClone = false, bool $shallowClone = false)
    {
    }
    public function __toString() : string
    {
    }
    public function isValid() : bool
    {
    }
    public function shallowClone() : bool
    {
    }
    public function deepClone() : bool
    {
    }
    public function targetIsClass() : bool
    {
    }
    public function getTarget() : string
    {
    }
    public function getTargetClassName() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract class TestCase extends \PHPUnit\Framework\Assert implements \PHPUnit\Framework\Reorderable, \PHPUnit\Framework\SelfDescribing, \PHPUnit\Framework\Test
{
    /**
     * @param non-empty-string $name
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     *
     * @final
     */
    public function __construct(string $name)
    {
    }
    /**
     * This method is called before the first test of this test class is run.
     *
     * @codeCoverageIgnore
     */
    public static function setUpBeforeClass() : void
    {
    }
    /**
     * This method is called after the last test of this test class is run.
     *
     * @codeCoverageIgnore
     */
    public static function tearDownAfterClass() : void
    {
    }
    /**
     * This method is called before each test.
     *
     * @codeCoverageIgnore
     */
    protected function setUp() : void
    {
    }
    /**
     * Performs assertions shared by all tests of a test case.
     *
     * This method is called between setUp() and test.
     *
     * @codeCoverageIgnore
     */
    protected function assertPreConditions() : void
    {
    }
    /**
     * Performs assertions shared by all tests of a test case.
     *
     * This method is called between test and tearDown().
     *
     * @codeCoverageIgnore
     */
    protected function assertPostConditions() : void
    {
    }
    /**
     * This method is called after each test.
     *
     * @codeCoverageIgnore
     */
    protected function tearDown() : void
    {
    }
    /**
     * Returns a string representation of the test case.
     *
     * @throws Exception
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function toString() : string
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function count() : int
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function status() : \PHPUnit\Framework\TestStatus\TestStatus
    {
    }
    /**
     * @throws \PHPUnit\Runner\Exception
     * @throws \PHPUnit\Util\Exception
     * @throws \SebastianBergmann\CodeCoverage\InvalidArgumentException
     * @throws \SebastianBergmann\Template\InvalidArgumentException
     * @throws CodeCoverageException
     * @throws Exception
     * @throws NoPreviousThrowableException
     * @throws ProcessIsolationException
     * @throws StaticAnalysisCacheNotConfiguredException
     * @throws UnintentionallyCoveredCodeException
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function run() : void
    {
    }
    /**
     * @return list<string>
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function groups() : array
    {
    }
    /**
     * @param list<string> $groups
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function setGroups(array $groups) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function nameWithDataSet() : string
    {
    }
    /**
     * @return non-empty-string
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function name() : string
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function size() : \PHPUnit\Framework\TestSize\TestSize
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function hasUnexpectedOutput() : bool
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function output() : string
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function doesNotPerformAssertions() : bool
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function expectsOutput() : bool
    {
    }
    /**
     * @throws Throwable
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function runBare() : void
    {
    }
    /**
     * @param list<ExecutionOrderDependency> $dependencies
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function setDependencies(array $dependencies) : void
    {
    }
    /**
     * @param array<non-empty-string, array<mixed>> $dependencyInput
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     *
     * @codeCoverageIgnore
     */
    public final function setDependencyInput(array $dependencyInput) : void
    {
    }
    /**
     * @return array<non-empty-string, array<mixed>>
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function dependencyInput() : array
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function hasDependencyInput() : bool
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function setBackupGlobals(bool $backupGlobals) : void
    {
    }
    /**
     * @param list<string> $backupGlobalsExcludeList
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function setBackupGlobalsExcludeList(array $backupGlobalsExcludeList) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function setBackupStaticProperties(bool $backupStaticProperties) : void
    {
    }
    /**
     * @param array<string,list<class-string>> $backupStaticPropertiesExcludeList
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function setBackupStaticPropertiesExcludeList(array $backupStaticPropertiesExcludeList) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function setRunTestInSeparateProcess(bool $runTestInSeparateProcess) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function setRunClassInSeparateProcess(bool $runClassInSeparateProcess) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function setPreserveGlobalState(bool $preserveGlobalState) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     *
     * @codeCoverageIgnore
     */
    public final function setInIsolation(bool $inIsolation) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     *
     * @codeCoverageIgnore
     */
    public final function result() : mixed
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function setResult(mixed $result) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function registerMockObject(\PHPUnit\Framework\MockObject\MockObject $mockObject) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function addToAssertionCount(int $count) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function numberOfAssertionsPerformed() : int
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function usesDataProvider() : bool
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function dataName() : int|string
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function dataSetAsString() : string
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function dataSetAsStringWithData() : string
    {
    }
    /**
     * @return array<mixed>
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function providedData() : array
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function sortId() : string
    {
    }
    /**
     * @return list<ExecutionOrderDependency>
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function provides() : array
    {
    }
    /**
     * @return list<ExecutionOrderDependency>
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function requires() : array
    {
    }
    /**
     * @param array<mixed> $data
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function setData(int|string $dataName, array $data) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function valueObjectForEvents() : \PHPUnit\Event\Code\TestMethod
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public final function wasPrepared() : bool
    {
    }
    /**
     * Returns a matcher that matches when the method is executed
     * zero or more times.
     */
    protected final function any() : \PHPUnit\Framework\MockObject\Rule\AnyInvokedCount
    {
    }
    /**
     * Returns a matcher that matches when the method is never executed.
     */
    protected final function never() : \PHPUnit\Framework\MockObject\Rule\InvokedCount
    {
    }
    /**
     * Returns a matcher that matches when the method is executed
     * at least N times.
     */
    protected final function atLeast(int $requiredInvocations) : \PHPUnit\Framework\MockObject\Rule\InvokedAtLeastCount
    {
    }
    /**
     * Returns a matcher that matches when the method is executed at least once.
     */
    protected final function atLeastOnce() : \PHPUnit\Framework\MockObject\Rule\InvokedAtLeastOnce
    {
    }
    /**
     * Returns a matcher that matches when the method is executed exactly once.
     */
    protected final function once() : \PHPUnit\Framework\MockObject\Rule\InvokedCount
    {
    }
    /**
     * Returns a matcher that matches when the method is executed
     * exactly $count times.
     */
    protected final function exactly(int $count) : \PHPUnit\Framework\MockObject\Rule\InvokedCount
    {
    }
    /**
     * Returns a matcher that matches when the method is executed
     * at most N times.
     */
    protected final function atMost(int $allowedInvocations) : \PHPUnit\Framework\MockObject\Rule\InvokedAtMostCount
    {
    }
    protected final function throwException(\Throwable $exception) : \PHPUnit\Framework\MockObject\Stub\Exception
    {
    }
    protected final function getActualOutputForAssertion() : string
    {
    }
    protected final function expectOutputRegex(string $expectedRegex) : void
    {
    }
    protected final function expectOutputString(string $expectedString) : void
    {
    }
    /**
     * @param class-string<Throwable> $exception
     */
    protected final function expectException(string $exception) : void
    {
    }
    protected final function expectExceptionCode(int|string $code) : void
    {
    }
    protected final function expectExceptionMessage(string $message) : void
    {
    }
    protected final function expectExceptionMessageMatches(string $regularExpression) : void
    {
    }
    /**
     * Sets up an expectation for an exception to be raised by the code under test.
     * Information for expected exception class, expected exception message, and
     * expected exception code are retrieved from a given Exception object.
     */
    protected final function expectExceptionObject(\Exception $exception) : void
    {
    }
    protected final function expectNotToPerformAssertions() : void
    {
    }
    /**
     * @param non-empty-string $expectedUserDeprecationMessage
     */
    protected final function expectUserDeprecationMessage(string $expectedUserDeprecationMessage) : void
    {
    }
    /**
     * @param non-empty-string $expectedUserDeprecationMessageRegularExpression
     */
    protected final function expectUserDeprecationMessageMatches(string $expectedUserDeprecationMessageRegularExpression) : void
    {
    }
    /**
     * Returns a builder object to create mock objects using a fluent interface.
     *
     * @template RealInstanceType of object
     *
     * @param class-string<RealInstanceType> $className
     *
     * @return MockBuilder<RealInstanceType>
     */
    protected final function getMockBuilder(string $className) : \PHPUnit\Framework\MockObject\MockBuilder
    {
    }
    protected final function registerComparator(\SebastianBergmann\Comparator\Comparator $comparator) : void
    {
    }
    /**
     * @param class-string $classOrInterface
     */
    protected final function registerFailureType(string $classOrInterface) : void
    {
    }
    /**
     * @throws AssertionFailedError
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws Throwable
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    protected final function runTest() : mixed
    {
    }
    /**
     * Creates a mock object for the specified interface or class.
     *
     * @template RealInstanceType of object
     *
     * @param class-string<RealInstanceType> $originalClassName
     *
     * @throws InvalidArgumentException
     * @throws MockObjectException
     * @throws NoPreviousThrowableException
     *
     * @return MockObject&RealInstanceType
     */
    protected final function createMock(string $originalClassName) : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * @param list<class-string> $interfaces
     *
     * @throws MockObjectException
     */
    protected final function createMockForIntersectionOfInterfaces(array $interfaces) : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Creates (and configures) a mock object for the specified interface or class.
     *
     * @template RealInstanceType of object
     *
     * @param class-string<RealInstanceType> $originalClassName
     * @param array<non-empty-string, mixed> $configuration
     *
     * @throws InvalidArgumentException
     * @throws MockObjectException
     * @throws NoPreviousThrowableException
     *
     * @return MockObject&RealInstanceType
     */
    protected final function createConfiguredMock(string $originalClassName, array $configuration) : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Creates a partial mock object for the specified interface or class.
     *
     * @param class-string<RealInstanceType> $originalClassName
     * @param list<non-empty-string>         $methods
     *
     * @template RealInstanceType of object
     *
     * @throws InvalidArgumentException
     * @throws MockObjectException
     *
     * @return MockObject&RealInstanceType
     */
    protected final function createPartialMock(string $originalClassName, array $methods) : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    protected function transformException(\Throwable $t) : \Throwable
    {
    }
    /**
     * This method is called when a test method did not execute successfully.
     *
     * @throws Throwable
     */
    protected function onNotSuccessfulTest(\Throwable $t) : never
    {
    }
    /**
     * Creates a test stub for the specified interface or class.
     *
     * @template RealInstanceType of object
     *
     * @param class-string<RealInstanceType> $originalClassName
     *
     * @throws InvalidArgumentException
     * @throws MockObjectException
     * @throws NoPreviousThrowableException
     *
     * @return RealInstanceType&Stub
     */
    protected static final function createStub(string $originalClassName) : \PHPUnit\Framework\MockObject\Stub
    {
    }
    /**
     * @param list<class-string> $interfaces
     *
     * @throws MockObjectException
     */
    protected static final function createStubForIntersectionOfInterfaces(array $interfaces) : \PHPUnit\Framework\MockObject\Stub
    {
    }
    /**
     * Creates (and configures) a test stub for the specified interface or class.
     *
     * @template RealInstanceType of object
     *
     * @param class-string<RealInstanceType> $originalClassName
     * @param array<non-empty-string, mixed> $configuration
     *
     * @throws InvalidArgumentException
     * @throws MockObjectException
     * @throws NoPreviousThrowableException
     *
     * @return RealInstanceType&Stub
     */
    protected static final function createConfiguredStub(string $originalClassName, array $configuration) : \PHPUnit\Framework\MockObject\Stub
    {
    }
}
namespace PHPUnit\TextUI;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestRunner
{
    /**
     * @throws RuntimeException
     */
    public function run(\PHPUnit\TextUI\Configuration\Configuration $configuration, \PHPUnit\Runner\ResultCache\ResultCache $resultCache, \PHPUnit\Framework\TestSuite $suite) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This interface is not covered by the backward compatibility promise for PHPUnit
 */
interface Exception extends \Throwable
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class RuntimeException extends \RuntimeException implements \PHPUnit\TextUI\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ExtensionsNotConfiguredException extends \RuntimeException implements \PHPUnit\TextUI\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CannotOpenSocketException extends \RuntimeException implements \PHPUnit\TextUI\Exception
{
    public function __construct(string $hostname, int $port)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvalidSocketException extends \RuntimeException implements \PHPUnit\TextUI\Exception
{
    public function __construct(string $socket)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestDirectoryNotFoundException extends \RuntimeException implements \PHPUnit\TextUI\Exception
{
    public function __construct(string $path)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestFileNotFoundException extends \RuntimeException implements \PHPUnit\TextUI\Exception
{
    public function __construct(string $path)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ReflectionException extends \RuntimeException implements \PHPUnit\TextUI\Exception
{
}
namespace PHPUnit\TextUI\Output;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class SummaryPrinter
{
    public function __construct(\PHPUnit\TextUI\Output\Printer $printer, bool $colors)
    {
    }
    public function print(\PHPUnit\TestRunner\TestResult\TestResult $result) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This interface is not covered by the backward compatibility promise for PHPUnit
 */
interface Printer
{
    public function print(string $buffer) : void;
    public function flush() : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class DefaultPrinter implements \PHPUnit\TextUI\Output\Printer
{
    /**
     * @throws CannotOpenSocketException
     * @throws DirectoryDoesNotExistException
     * @throws InvalidSocketException
     */
    public static function from(string $out) : self
    {
    }
    /**
     * @throws CannotOpenSocketException
     * @throws DirectoryDoesNotExistException
     * @throws InvalidSocketException
     */
    public static function standardOutput() : self
    {
    }
    /**
     * @throws CannotOpenSocketException
     * @throws DirectoryDoesNotExistException
     * @throws InvalidSocketException
     */
    public static function standardError() : self
    {
    }
    public function print(string $buffer) : void
    {
    }
    public function flush() : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class NullPrinter implements \PHPUnit\TextUI\Output\Printer
{
    public function print(string $buffer) : void
    {
    }
    public function flush() : void
    {
    }
}
namespace PHPUnit\TextUI\Output\Default\ProgressPrinter;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ProgressPrinter
{
    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public function __construct(\PHPUnit\TextUI\Output\Printer $printer, \PHPUnit\Event\Facade $facade, bool $colors, int $numberOfColumns, \PHPUnit\TextUI\Configuration\Source $source)
    {
    }
    public function testRunnerExecutionStarted(\PHPUnit\Event\TestRunner\ExecutionStarted $event) : void
    {
    }
    public function beforeTestClassMethodErrored() : void
    {
    }
    public function testPrepared() : void
    {
    }
    public function testSkipped() : void
    {
    }
    public function testMarkedIncomplete() : void
    {
    }
    public function testTriggeredNotice(\PHPUnit\Event\Test\NoticeTriggered $event) : void
    {
    }
    public function testTriggeredPhpNotice(\PHPUnit\Event\Test\PhpNoticeTriggered $event) : void
    {
    }
    public function testTriggeredDeprecation(\PHPUnit\Event\Test\DeprecationTriggered $event) : void
    {
    }
    public function testTriggeredPhpDeprecation(\PHPUnit\Event\Test\PhpDeprecationTriggered $event) : void
    {
    }
    public function testTriggeredPhpunitDeprecation() : void
    {
    }
    public function testConsideredRisky() : void
    {
    }
    public function testTriggeredWarning(\PHPUnit\Event\Test\WarningTriggered $event) : void
    {
    }
    public function testTriggeredPhpWarning(\PHPUnit\Event\Test\PhpWarningTriggered $event) : void
    {
    }
    public function testTriggeredPhpunitWarning() : void
    {
    }
    public function testTriggeredError(\PHPUnit\Event\Test\ErrorTriggered $event) : void
    {
    }
    public function testFailed() : void
    {
    }
    public function testErrored(\PHPUnit\Event\Test\Errored $event) : void
    {
    }
    public function testFinished() : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract readonly class Subscriber
{
    public function __construct(\PHPUnit\TextUI\Output\Default\ProgressPrinter\ProgressPrinter $printer)
    {
    }
    protected function printer() : \PHPUnit\TextUI\Output\Default\ProgressPrinter\ProgressPrinter
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestMarkedIncompleteSubscriber extends \PHPUnit\TextUI\Output\Default\ProgressPrinter\Subscriber implements \PHPUnit\Event\Test\MarkedIncompleteSubscriber
{
    public function notify(\PHPUnit\Event\Test\MarkedIncomplete $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredWarningSubscriber extends \PHPUnit\TextUI\Output\Default\ProgressPrinter\Subscriber implements \PHPUnit\Event\Test\WarningTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\WarningTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestErroredSubscriber extends \PHPUnit\TextUI\Output\Default\ProgressPrinter\Subscriber implements \PHPUnit\Event\Test\ErroredSubscriber
{
    public function notify(\PHPUnit\Event\Test\Errored $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredNoticeSubscriber extends \PHPUnit\TextUI\Output\Default\ProgressPrinter\Subscriber implements \PHPUnit\Event\Test\NoticeTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\NoticeTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredPhpWarningSubscriber extends \PHPUnit\TextUI\Output\Default\ProgressPrinter\Subscriber implements \PHPUnit\Event\Test\PhpWarningTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\PhpWarningTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredPhpNoticeSubscriber extends \PHPUnit\TextUI\Output\Default\ProgressPrinter\Subscriber implements \PHPUnit\Event\Test\PhpNoticeTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\PhpNoticeTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class BeforeTestClassMethodErroredSubscriber extends \PHPUnit\TextUI\Output\Default\ProgressPrinter\Subscriber implements \PHPUnit\Event\Test\BeforeFirstTestMethodErroredSubscriber
{
    public function notify(\PHPUnit\Event\Test\BeforeFirstTestMethodErrored $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredPhpunitWarningSubscriber extends \PHPUnit\TextUI\Output\Default\ProgressPrinter\Subscriber implements \PHPUnit\Event\Test\PhpunitWarningTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\PhpunitWarningTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredDeprecationSubscriber extends \PHPUnit\TextUI\Output\Default\ProgressPrinter\Subscriber implements \PHPUnit\Event\Test\DeprecationTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\DeprecationTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestRunnerExecutionStartedSubscriber extends \PHPUnit\TextUI\Output\Default\ProgressPrinter\Subscriber implements \PHPUnit\Event\TestRunner\ExecutionStartedSubscriber
{
    public function notify(\PHPUnit\Event\TestRunner\ExecutionStarted $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredErrorSubscriber extends \PHPUnit\TextUI\Output\Default\ProgressPrinter\Subscriber implements \PHPUnit\Event\Test\ErrorTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\ErrorTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredPhpDeprecationSubscriber extends \PHPUnit\TextUI\Output\Default\ProgressPrinter\Subscriber implements \PHPUnit\Event\Test\PhpDeprecationTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\PhpDeprecationTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestSkippedSubscriber extends \PHPUnit\TextUI\Output\Default\ProgressPrinter\Subscriber implements \PHPUnit\Event\Test\SkippedSubscriber
{
    public function notify(\PHPUnit\Event\Test\Skipped $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestFailedSubscriber extends \PHPUnit\TextUI\Output\Default\ProgressPrinter\Subscriber implements \PHPUnit\Event\Test\FailedSubscriber
{
    public function notify(\PHPUnit\Event\Test\Failed $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredPhpunitDeprecationSubscriber extends \PHPUnit\TextUI\Output\Default\ProgressPrinter\Subscriber implements \PHPUnit\Event\Test\PhpunitDeprecationTriggeredSubscriber
{
    public function notify(\PHPUnit\Event\Test\PhpunitDeprecationTriggered $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestConsideredRiskySubscriber extends \PHPUnit\TextUI\Output\Default\ProgressPrinter\Subscriber implements \PHPUnit\Event\Test\ConsideredRiskySubscriber
{
    public function notify(\PHPUnit\Event\Test\ConsideredRisky $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestPreparedSubscriber extends \PHPUnit\TextUI\Output\Default\ProgressPrinter\Subscriber implements \PHPUnit\Event\Test\PreparedSubscriber
{
    public function notify(\PHPUnit\Event\Test\Prepared $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestFinishedSubscriber extends \PHPUnit\TextUI\Output\Default\ProgressPrinter\Subscriber implements \PHPUnit\Event\Test\FinishedSubscriber
{
    public function notify(\PHPUnit\Event\Test\Finished $event) : void
    {
    }
}
namespace PHPUnit\TextUI\Output\Default;

final readonly class UnexpectedOutputPrinter implements \PHPUnit\Event\Test\PrintedUnexpectedOutputSubscriber
{
    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public function __construct(\PHPUnit\TextUI\Output\Printer $printer, \PHPUnit\Event\Facade $facade)
    {
    }
    public function notify(\PHPUnit\Event\Test\PrintedUnexpectedOutput $event) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ResultPrinter
{
    public function __construct(\PHPUnit\TextUI\Output\Printer $printer, bool $displayPhpunitErrors, bool $displayPhpunitWarnings, bool $displayPhpunitDeprecations, bool $displayTestsWithErrors, bool $displayTestsWithFailedAssertions, bool $displayRiskyTests, bool $displayDetailsOnIncompleteTests, bool $displayDetailsOnSkippedTests, bool $displayDetailsOnTestsThatTriggerDeprecations, bool $displayDetailsOnTestsThatTriggerErrors, bool $displayDetailsOnTestsThatTriggerNotices, bool $displayDetailsOnTestsThatTriggerWarnings, bool $displayDefectsInReverseOrder)
    {
    }
    public function print(\PHPUnit\TestRunner\TestResult\TestResult $result) : void
    {
    }
    public function flush() : void
    {
    }
}
namespace PHPUnit\TextUI\Output;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Facade
{
    /**
     * @throws EventFacadeIsSealedException
     * @throws UnknownSubscriberTypeException
     */
    public static function init(\PHPUnit\TextUI\Configuration\Configuration $configuration, bool $extensionReplacesProgressOutput, bool $extensionReplacesResultOutput) : \PHPUnit\TextUI\Output\Printer
    {
    }
    /**
     * @param ?array<string, TestResultCollection> $testDoxResult
     */
    public static function printResult(\PHPUnit\TestRunner\TestResult\TestResult $result, ?array $testDoxResult, \SebastianBergmann\Timer\Duration $duration) : void
    {
    }
    /**
     * @throws CannotOpenSocketException
     * @throws DirectoryDoesNotExistException
     * @throws InvalidSocketException
     */
    public static function printerFor(string $target) : \PHPUnit\TextUI\Output\Printer
    {
    }
}
namespace PHPUnit\TextUI\Output\TestDox;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ResultPrinter
{
    public function __construct(\PHPUnit\TextUI\Output\Printer $printer, bool $colors, int $columns, bool $printSummary)
    {
    }
    /**
     * @param array<string, TestResultCollection> $tests
     */
    public function print(array $tests) : void
    {
    }
    public function flush() : void
    {
    }
}
namespace PHPUnit\TextUI\Configuration;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This interface is not covered by the backward compatibility promise for PHPUnit
 */
interface Exception extends \PHPUnit\TextUI\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class NoCoverageCacheDirectoryException extends \RuntimeException implements \PHPUnit\TextUI\Configuration\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class NoCliArgumentException extends \RuntimeException implements \PHPUnit\TextUI\Configuration\Exception
{
}
namespace PHPUnit\TextUI\XmlConfiguration;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CannotFindSchemaException extends \RuntimeException implements \PHPUnit\TextUI\Configuration\Exception
{
}
namespace PHPUnit\TextUI\Configuration;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class IncludePathNotConfiguredException extends \RuntimeException implements \PHPUnit\TextUI\Configuration\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class NoPharExtensionDirectoryException extends \RuntimeException implements \PHPUnit\TextUI\Configuration\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class NoBaselineException extends \RuntimeException implements \PHPUnit\TextUI\Configuration\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CodeCoverageReportNotConfiguredException extends \RuntimeException implements \PHPUnit\TextUI\Configuration\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class NoCacheDirectoryException extends \RuntimeException implements \PHPUnit\TextUI\Configuration\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ConfigurationCannotBeBuiltException extends \RuntimeException implements \PHPUnit\TextUI\Configuration\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class NoBootstrapException extends \RuntimeException implements \PHPUnit\TextUI\Configuration\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class NoCustomCssFileException extends \RuntimeException implements \PHPUnit\TextUI\Configuration\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class LoggingNotConfiguredException extends \RuntimeException implements \PHPUnit\TextUI\Configuration\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class NoConfigurationFileException extends \RuntimeException implements \PHPUnit\TextUI\Configuration\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class FilterNotConfiguredException extends \RuntimeException implements \PHPUnit\TextUI\Configuration\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class NoDefaultTestSuiteException extends \RuntimeException implements \PHPUnit\TextUI\Configuration\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class SourceMapper
{
    /**
     * @return array<non-empty-string, true>
     */
    public function map(\PHPUnit\TextUI\Configuration\Source $source) : array
    {
    }
}
namespace PHPUnit\TextUI\XmlConfiguration;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class PHPUnit
{
    /**
     * @param ?non-empty-string $extensionsDirectory
     * @param non-negative-int  $shortenArraysForExportThreshold
     */
    public function __construct(?string $cacheDirectory, bool $cacheResult, int|string $columns, string $colors, bool $stderr, bool $displayDetailsOnIncompleteTests, bool $displayDetailsOnSkippedTests, bool $displayDetailsOnTestsThatTriggerDeprecations, bool $displayDetailsOnPhpunitDeprecations, bool $displayDetailsOnTestsThatTriggerErrors, bool $displayDetailsOnTestsThatTriggerNotices, bool $displayDetailsOnTestsThatTriggerWarnings, bool $reverseDefectList, bool $requireCoverageMetadata, ?string $bootstrap, bool $processIsolation, bool $failOnDeprecation, bool $failOnPhpunitDeprecation, bool $failOnEmptyTestSuite, bool $failOnIncomplete, bool $failOnNotice, bool $failOnRisky, bool $failOnSkipped, bool $failOnWarning, bool $stopOnDefect, bool $stopOnDeprecation, bool $stopOnError, bool $stopOnFailure, bool $stopOnIncomplete, bool $stopOnNotice, bool $stopOnRisky, bool $stopOnSkipped, bool $stopOnWarning, ?string $extensionsDirectory, bool $beStrictAboutChangesToGlobalState, bool $beStrictAboutOutputDuringTests, bool $beStrictAboutTestsThatDoNotTestAnything, bool $beStrictAboutCoverageMetadata, bool $enforceTimeLimit, int $defaultTimeLimit, int $timeoutForSmallTests, int $timeoutForMediumTests, int $timeoutForLargeTests, ?string $defaultTestSuite, int $executionOrder, bool $resolveDependencies, bool $defectsFirst, bool $backupGlobals, bool $backupStaticProperties, bool $testdoxPrinter, bool $testdoxPrinterSummary, bool $controlGarbageCollector, int $numberOfTestsBeforeGarbageCollection, int $shortenArraysForExportThreshold)
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->cacheDirectory
     */
    public function hasCacheDirectory() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function cacheDirectory() : string
    {
    }
    public function cacheResult() : bool
    {
    }
    public function columns() : int|string
    {
    }
    public function colors() : string
    {
    }
    public function stderr() : bool
    {
    }
    public function displayDetailsOnIncompleteTests() : bool
    {
    }
    public function displayDetailsOnSkippedTests() : bool
    {
    }
    public function displayDetailsOnTestsThatTriggerDeprecations() : bool
    {
    }
    public function displayDetailsOnPhpunitDeprecations() : bool
    {
    }
    public function displayDetailsOnTestsThatTriggerErrors() : bool
    {
    }
    public function displayDetailsOnTestsThatTriggerNotices() : bool
    {
    }
    public function displayDetailsOnTestsThatTriggerWarnings() : bool
    {
    }
    public function reverseDefectList() : bool
    {
    }
    public function requireCoverageMetadata() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->bootstrap
     */
    public function hasBootstrap() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function bootstrap() : string
    {
    }
    public function processIsolation() : bool
    {
    }
    public function failOnDeprecation() : bool
    {
    }
    public function failOnPhpunitDeprecation() : bool
    {
    }
    public function failOnEmptyTestSuite() : bool
    {
    }
    public function failOnIncomplete() : bool
    {
    }
    public function failOnNotice() : bool
    {
    }
    public function failOnRisky() : bool
    {
    }
    public function failOnSkipped() : bool
    {
    }
    public function failOnWarning() : bool
    {
    }
    public function stopOnDefect() : bool
    {
    }
    public function stopOnDeprecation() : bool
    {
    }
    public function stopOnError() : bool
    {
    }
    public function stopOnFailure() : bool
    {
    }
    public function stopOnIncomplete() : bool
    {
    }
    public function stopOnNotice() : bool
    {
    }
    public function stopOnRisky() : bool
    {
    }
    public function stopOnSkipped() : bool
    {
    }
    public function stopOnWarning() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->extensionsDirectory
     */
    public function hasExtensionsDirectory() : bool
    {
    }
    /**
     * @throws Exception
     *
     * @return non-empty-string
     */
    public function extensionsDirectory() : string
    {
    }
    public function beStrictAboutChangesToGlobalState() : bool
    {
    }
    public function beStrictAboutOutputDuringTests() : bool
    {
    }
    public function beStrictAboutTestsThatDoNotTestAnything() : bool
    {
    }
    public function beStrictAboutCoverageMetadata() : bool
    {
    }
    public function enforceTimeLimit() : bool
    {
    }
    public function defaultTimeLimit() : int
    {
    }
    public function timeoutForSmallTests() : int
    {
    }
    public function timeoutForMediumTests() : int
    {
    }
    public function timeoutForLargeTests() : int
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->defaultTestSuite
     */
    public function hasDefaultTestSuite() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function defaultTestSuite() : string
    {
    }
    public function executionOrder() : int
    {
    }
    public function resolveDependencies() : bool
    {
    }
    public function defectsFirst() : bool
    {
    }
    public function backupGlobals() : bool
    {
    }
    public function backupStaticProperties() : bool
    {
    }
    public function testdoxPrinter() : bool
    {
    }
    public function testdoxPrinterSummary() : bool
    {
    }
    public function controlGarbageCollector() : bool
    {
    }
    public function numberOfTestsBeforeGarbageCollection() : int
    {
    }
    /**
     * @return non-negative-int
     */
    public function shortenArraysForExportThreshold() : int
    {
    }
}
namespace PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class Clover
{
    public function __construct(\PHPUnit\TextUI\Configuration\File $target)
    {
    }
    public function target() : \PHPUnit\TextUI\Configuration\File
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class Xml
{
    public function __construct(\PHPUnit\TextUI\Configuration\Directory $target)
    {
    }
    public function target() : \PHPUnit\TextUI\Configuration\Directory
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class Crap4j
{
    public function __construct(\PHPUnit\TextUI\Configuration\File $target, int $threshold)
    {
    }
    public function target() : \PHPUnit\TextUI\Configuration\File
    {
    }
    public function threshold() : int
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class Php
{
    public function __construct(\PHPUnit\TextUI\Configuration\File $target)
    {
    }
    public function target() : \PHPUnit\TextUI\Configuration\File
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class Cobertura
{
    public function __construct(\PHPUnit\TextUI\Configuration\File $target)
    {
    }
    public function target() : \PHPUnit\TextUI\Configuration\File
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class Html
{
    public function __construct(\PHPUnit\TextUI\Configuration\Directory $target, int $lowUpperBound, int $highLowerBound, string $colorSuccessLow, string $colorSuccessMedium, string $colorSuccessHigh, string $colorWarning, string $colorDanger, ?string $customCssFile)
    {
    }
    public function target() : \PHPUnit\TextUI\Configuration\Directory
    {
    }
    public function lowUpperBound() : int
    {
    }
    public function highLowerBound() : int
    {
    }
    public function colorSuccessLow() : string
    {
    }
    public function colorSuccessMedium() : string
    {
    }
    public function colorSuccessHigh() : string
    {
    }
    public function colorWarning() : string
    {
    }
    public function colorDanger() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->customCssFile
     */
    public function hasCustomCssFile() : bool
    {
    }
    /**
     * @throws NoCustomCssFileException
     */
    public function customCssFile() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class Text
{
    public function __construct(\PHPUnit\TextUI\Configuration\File $target, bool $showUncoveredFiles, bool $showOnlySummary)
    {
    }
    public function target() : \PHPUnit\TextUI\Configuration\File
    {
    }
    public function showUncoveredFiles() : bool
    {
    }
    public function showOnlySummary() : bool
    {
    }
}
namespace PHPUnit\TextUI\XmlConfiguration\CodeCoverage;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class CodeCoverage
{
    public function __construct(bool $pathCoverage, bool $ignoreDeprecatedCodeUnits, bool $disableCodeCoverageIgnore, ?\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Clover $clover, ?\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Cobertura $cobertura, ?\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Crap4j $crap4j, ?\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Html $html, ?\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php $php, ?\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Text $text, ?\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Xml $xml)
    {
    }
    public function pathCoverage() : bool
    {
    }
    public function ignoreDeprecatedCodeUnits() : bool
    {
    }
    public function disableCodeCoverageIgnore() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->clover
     */
    public function hasClover() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function clover() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Clover
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->cobertura
     */
    public function hasCobertura() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function cobertura() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Cobertura
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->crap4j
     */
    public function hasCrap4j() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function crap4j() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Crap4j
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->html
     */
    public function hasHtml() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function html() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Html
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->php
     */
    public function hasPhp() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function php() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->text
     */
    public function hasText() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function text() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Text
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->xml
     */
    public function hasXml() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function xml() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Xml
    {
    }
}
namespace PHPUnit\TextUI\XmlConfiguration;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class Groups
{
    public function __construct(\PHPUnit\TextUI\Configuration\GroupCollection $include, \PHPUnit\TextUI\Configuration\GroupCollection $exclude)
    {
    }
    public function hasInclude() : bool
    {
    }
    public function include() : \PHPUnit\TextUI\Configuration\GroupCollection
    {
    }
    public function hasExclude() : bool
    {
    }
    public function exclude() : \PHPUnit\TextUI\Configuration\GroupCollection
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Generator
{
    public function generateDefaultConfiguration(string $schemaLocation, string $bootstrapScript, string $testsDirectory, string $srcDirectory, string $cacheDirectory) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Migrator
{
    /**
     * @throws Exception
     * @throws MigrationBuilderException
     * @throws MigrationException
     * @throws XmlException
     */
    public function migrate(string $filename) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MigrationException extends \RuntimeException implements \PHPUnit\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MigrationBuilderException extends \RuntimeException implements \PHPUnit\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @template-implements IteratorAggregate<int, DOMNode>
 */
final class SnapshotNodeList implements \Countable, \IteratorAggregate
{
    /**
     * @param DOMNodeList<DOMNode> $list
     */
    public static function fromNodeList(\DOMNodeList $list) : self
    {
    }
    public function count() : int
    {
    }
    /**
     * @return ArrayIterator<int, DOMNode>
     */
    public function getIterator() : \ArrayIterator
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class MigrationBuilder
{
    /**
     * @throws MigrationBuilderException
     *
     * @return non-empty-list<Migration>
     */
    public function build(string $fromVersion) : array
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface Migration
{
    public function migrate(\DOMDocument $document) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RemoveEmptyFilter implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    /**
     * @throws MigrationException
     */
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class MoveAttributesFromFilterWhitelistToCoverage implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    /**
     * @throws MigrationException
     */
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RenameBackupStaticAttributesAttribute implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class MoveWhitelistExcludesToCoverage implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    /**
     * @throws MigrationException
     */
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract readonly class LogToReportMigration implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    /**
     * @throws MigrationException
     */
    public function migrate(\DOMDocument $document) : void
    {
    }
    /**
     * @param list<non-empty-string> $attributes
     */
    protected function migrateAttributes(\DOMElement $src, \DOMElement $dest, array $attributes) : void
    {
    }
    protected abstract function forType() : string;
    protected abstract function toReportFormat(\DOMElement $logNode) : \DOMElement;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RemoveTestSuiteLoaderAttributes implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RemoveVerboseAttribute implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RemoveBeStrictAboutResourceUsageDuringSmallTestsAttribute implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RemoveListeners implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class CoverageXmlToReport extends \PHPUnit\TextUI\XmlConfiguration\LogToReportMigration
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RemoveBeStrictAboutTodoAnnotatedTestsAttribute implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class IntroduceCacheDirectoryAttribute implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RemoveLoggingElements implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class IntroduceCoverageElement implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RemoveNoInteractionAttribute implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RemoveCoverageElementCacheDirectoryAttribute implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RenameBeStrictAboutCoversAnnotationAttribute implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class CoverageHtmlToReport extends \PHPUnit\TextUI\XmlConfiguration\LogToReportMigration
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class CoverageCloverToReport extends \PHPUnit\TextUI\XmlConfiguration\LogToReportMigration
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class CoverageTextToReport extends \PHPUnit\TextUI\XmlConfiguration\LogToReportMigration
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class CoveragePhpToReport extends \PHPUnit\TextUI\XmlConfiguration\LogToReportMigration
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class CoverageCrap4jToReport extends \PHPUnit\TextUI\XmlConfiguration\LogToReportMigration
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class MoveAttributesFromRootToCoverage implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    /**
     * @throws MigrationException
     */
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class MoveWhitelistIncludesToCoverage implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    /**
     * @throws MigrationException
     */
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RenameForceCoversAnnotationAttribute implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RemoveConversionToExceptionsAttributes implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ConvertLogTypes implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class MoveCoverageDirectoriesToSource implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    /**
     * @throws MigrationException
     */
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RemoveCoverageElementIncludeUncoveredFilesAttribute implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RemoveCacheTokensAttribute implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RemovePrinterAttributes implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RemoveRegisterMockObjectsFromTestArgumentsRecursivelyAttribute implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class UpdateSchemaLocation implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RemoveTestDoxGroupsElement implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ReplaceRestrictDeprecationsWithIgnoreDeprecations implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    /**
     * @throws MigrationException
     */
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RemoveCacheResultFileAttribute implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RemoveLogTypes implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RemoveCoverageElementProcessUncoveredFilesAttribute implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Validator
{
    public function validate(\DOMDocument $document, string $xsdFilename) : \PHPUnit\TextUI\XmlConfiguration\ValidationResult
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class ValidationResult
{
    /**
     * @param array<int, LibXMLError> $errors
     */
    public static function fromArray(array $errors) : self
    {
    }
    public function hasValidationErrors() : bool
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class SchemaFinder
{
    /**
     * @return non-empty-list<non-empty-string>
     */
    public function available() : array
    {
    }
    /**
     * @throws CannotFindSchemaException
     */
    public function find(string $version) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestSuiteMapper
{
    /**
     * @param non-empty-string $xmlConfigurationFile,
     *
     * @throws RuntimeException
     * @throws TestDirectoryNotFoundException
     * @throws TestFileNotFoundException
     */
    public function map(string $xmlConfigurationFile, \PHPUnit\TextUI\Configuration\TestSuiteCollection $configuredTestSuites, string $namesOfIncludedTestSuites, string $namesOfExcludedTestSuites) : \PHPUnit\Framework\TestSuite
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
abstract readonly class Configuration
{
    public function __construct(\PHPUnit\TextUI\Configuration\ExtensionBootstrapCollection $extensions, \PHPUnit\TextUI\Configuration\Source $source, \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\CodeCoverage $codeCoverage, \PHPUnit\TextUI\XmlConfiguration\Groups $groups, \PHPUnit\TextUI\XmlConfiguration\Logging\Logging $logging, \PHPUnit\TextUI\Configuration\Php $php, \PHPUnit\TextUI\XmlConfiguration\PHPUnit $phpunit, \PHPUnit\TextUI\Configuration\TestSuiteCollection $testSuite)
    {
    }
    public function extensions() : \PHPUnit\TextUI\Configuration\ExtensionBootstrapCollection
    {
    }
    public function source() : \PHPUnit\TextUI\Configuration\Source
    {
    }
    public function codeCoverage() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\CodeCoverage
    {
    }
    public function groups() : \PHPUnit\TextUI\XmlConfiguration\Groups
    {
    }
    public function logging() : \PHPUnit\TextUI\XmlConfiguration\Logging\Logging
    {
    }
    public function php() : \PHPUnit\TextUI\Configuration\Php
    {
    }
    public function phpunit() : \PHPUnit\TextUI\XmlConfiguration\PHPUnit
    {
    }
    public function testSuite() : \PHPUnit\TextUI\Configuration\TestSuiteCollection
    {
    }
    /**
     * @phpstan-assert-if-true DefaultConfiguration $this
     */
    public function isDefault() : bool
    {
    }
    /**
     * @phpstan-assert-if-true LoadedFromFileConfiguration $this
     */
    public function wasLoadedFromFile() : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class LoadedFromFileConfiguration extends \PHPUnit\TextUI\XmlConfiguration\Configuration
{
    /**
     * @param non-empty-string $filename
     */
    public function __construct(string $filename, \PHPUnit\TextUI\XmlConfiguration\ValidationResult $validationResult, \PHPUnit\TextUI\Configuration\ExtensionBootstrapCollection $extensions, \PHPUnit\TextUI\Configuration\Source $source, \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\CodeCoverage $codeCoverage, \PHPUnit\TextUI\XmlConfiguration\Groups $groups, \PHPUnit\TextUI\XmlConfiguration\Logging\Logging $logging, \PHPUnit\TextUI\Configuration\Php $php, \PHPUnit\TextUI\XmlConfiguration\PHPUnit $phpunit, \PHPUnit\TextUI\Configuration\TestSuiteCollection $testSuite)
    {
    }
    /**
     * @return non-empty-string
     */
    public function filename() : string
    {
    }
    public function hasValidationErrors() : bool
    {
    }
    public function validationErrors() : string
    {
    }
    public function wasLoadedFromFile() : bool
    {
    }
}
namespace PHPUnit\TextUI\XmlConfiguration\Logging;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class Junit
{
    public function __construct(\PHPUnit\TextUI\Configuration\File $target)
    {
    }
    public function target() : \PHPUnit\TextUI\Configuration\File
    {
    }
}
namespace PHPUnit\TextUI\XmlConfiguration\Logging\TestDox;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class Html
{
    public function __construct(\PHPUnit\TextUI\Configuration\File $target)
    {
    }
    public function target() : \PHPUnit\TextUI\Configuration\File
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class Text
{
    public function __construct(\PHPUnit\TextUI\Configuration\File $target)
    {
    }
    public function target() : \PHPUnit\TextUI\Configuration\File
    {
    }
}
namespace PHPUnit\TextUI\XmlConfiguration\Logging;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class TeamCity
{
    public function __construct(\PHPUnit\TextUI\Configuration\File $target)
    {
    }
    public function target() : \PHPUnit\TextUI\Configuration\File
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class Logging
{
    public function __construct(?\PHPUnit\TextUI\XmlConfiguration\Logging\Junit $junit, ?\PHPUnit\TextUI\XmlConfiguration\Logging\TeamCity $teamCity, ?\PHPUnit\TextUI\XmlConfiguration\Logging\TestDox\Html $testDoxHtml, ?\PHPUnit\TextUI\XmlConfiguration\Logging\TestDox\Text $testDoxText)
    {
    }
    public function hasJunit() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function junit() : \PHPUnit\TextUI\XmlConfiguration\Logging\Junit
    {
    }
    public function hasTeamCity() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function teamCity() : \PHPUnit\TextUI\XmlConfiguration\Logging\TeamCity
    {
    }
    public function hasTestDoxHtml() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function testDoxHtml() : \PHPUnit\TextUI\XmlConfiguration\Logging\TestDox\Html
    {
    }
    public function hasTestDoxText() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function testDoxText() : \PHPUnit\TextUI\XmlConfiguration\Logging\TestDox\Text
    {
    }
}
namespace PHPUnit\TextUI\XmlConfiguration;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class DefaultConfiguration extends \PHPUnit\TextUI\XmlConfiguration\Configuration
{
    public static function create() : self
    {
    }
    public function isDefault() : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Loader
{
    /**
     * @throws Exception
     */
    public function load(string $filename) : \PHPUnit\TextUI\XmlConfiguration\LoadedFromFileConfiguration
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Exception extends \RuntimeException implements \PHPUnit\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
abstract readonly class SchemaDetectionResult
{
    /**
     * @phpstan-assert-if-true SuccessfulSchemaDetectionResult $this
     */
    public function detected() : bool
    {
    }
    /**
     * @throws XmlException
     */
    public function version() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class FailedSchemaDetectionResult extends \PHPUnit\TextUI\XmlConfiguration\SchemaDetectionResult
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class SchemaDetector
{
    /**
     * @throws XmlException
     */
    public function detect(string $filename) : \PHPUnit\TextUI\XmlConfiguration\SchemaDetectionResult
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class SuccessfulSchemaDetectionResult extends \PHPUnit\TextUI\XmlConfiguration\SchemaDetectionResult
{
    /**
     * @param non-empty-string $version
     */
    public function __construct(string $version)
    {
    }
    public function detected() : bool
    {
    }
    /**
     * @return non-empty-string
     */
    public function version() : string
    {
    }
}
namespace PHPUnit\TextUI\Configuration;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestSuiteBuilder
{
    /**
     * @throws \PHPUnit\Framework\Exception
     * @throws RuntimeException
     * @throws TestDirectoryNotFoundException
     * @throws TestFileNotFoundException
     */
    public function build(\PHPUnit\TextUI\Configuration\Configuration $configuration) : \PHPUnit\Framework\TestSuite
    {
    }
}
/**
 * CLI options and XML configuration are static within a single PHPUnit process.
 * It is therefore okay to use a Singleton registry here.
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Registry
{
    public static function saveTo(string $path) : bool
    {
    }
    /**
     * This method is used by the "run test(s) in separate process" templates.
     *
     * @noinspection PhpUnused
     *
     * @codeCoverageIgnore
     */
    public static function loadFrom(string $path) : void
    {
    }
    public static function get() : \PHPUnit\TextUI\Configuration\Configuration
    {
    }
    /**
     * @throws \PHPUnit\TextUI\XmlConfiguration\Exception
     * @throws Exception
     * @throws NoCustomCssFileException
     */
    public static function init(\PHPUnit\TextUI\CliArguments\Configuration $cliConfiguration, \PHPUnit\TextUI\XmlConfiguration\Configuration $xmlConfiguration) : \PHPUnit\TextUI\Configuration\Configuration
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @template-implements Iterator<int, Constant>
 */
final class ConstantCollectionIterator implements \Iterator
{
    public function __construct(\PHPUnit\TextUI\Configuration\ConstantCollection $constants)
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\TextUI\Configuration\Constant
    {
    }
    public function next() : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 *
 * @template-implements IteratorAggregate<int, TestDirectory>
 */
final readonly class TestDirectoryCollection implements \Countable, \IteratorAggregate
{
    /**
     * @param list<TestDirectory> $directories
     */
    public static function fromArray(array $directories) : self
    {
    }
    /**
     * @return list<TestDirectory>
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \PHPUnit\TextUI\Configuration\TestDirectoryCollectionIterator
    {
    }
    public function isEmpty() : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @template-implements Iterator<int, Group>
 */
final class GroupCollectionIterator implements \Iterator
{
    public function __construct(\PHPUnit\TextUI\Configuration\GroupCollection $groups)
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\TextUI\Configuration\Group
    {
    }
    public function next() : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @template-implements Iterator<int, IniSetting>
 */
final class IniSettingCollectionIterator implements \Iterator
{
    public function __construct(\PHPUnit\TextUI\Configuration\IniSettingCollection $iniSettings)
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\TextUI\Configuration\IniSetting
    {
    }
    public function next() : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class Source
{
    /**
     * @param non-empty-string                                                          $baseline
     * @param array{functions: list<non-empty-string>, methods: list<non-empty-string>} $deprecationTriggers
     */
    public function __construct(?string $baseline, bool $ignoreBaseline, \PHPUnit\TextUI\Configuration\FilterDirectoryCollection $includeDirectories, \PHPUnit\TextUI\Configuration\FileCollection $includeFiles, \PHPUnit\TextUI\Configuration\FilterDirectoryCollection $excludeDirectories, \PHPUnit\TextUI\Configuration\FileCollection $excludeFiles, bool $restrictNotices, bool $restrictWarnings, bool $ignoreSuppressionOfDeprecations, bool $ignoreSuppressionOfPhpDeprecations, bool $ignoreSuppressionOfErrors, bool $ignoreSuppressionOfNotices, bool $ignoreSuppressionOfPhpNotices, bool $ignoreSuppressionOfWarnings, bool $ignoreSuppressionOfPhpWarnings, array $deprecationTriggers, bool $ignoreSelfDeprecations, bool $ignoreDirectDeprecations, bool $ignoreIndirectDeprecations)
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->baseline
     */
    public function useBaseline() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->baseline
     */
    public function hasBaseline() : bool
    {
    }
    /**
     * @throws NoBaselineException
     *
     * @return non-empty-string
     */
    public function baseline() : string
    {
    }
    public function includeDirectories() : \PHPUnit\TextUI\Configuration\FilterDirectoryCollection
    {
    }
    public function includeFiles() : \PHPUnit\TextUI\Configuration\FileCollection
    {
    }
    public function excludeDirectories() : \PHPUnit\TextUI\Configuration\FilterDirectoryCollection
    {
    }
    public function excludeFiles() : \PHPUnit\TextUI\Configuration\FileCollection
    {
    }
    public function notEmpty() : bool
    {
    }
    public function restrictNotices() : bool
    {
    }
    public function restrictWarnings() : bool
    {
    }
    public function ignoreSuppressionOfDeprecations() : bool
    {
    }
    public function ignoreSuppressionOfPhpDeprecations() : bool
    {
    }
    public function ignoreSuppressionOfErrors() : bool
    {
    }
    public function ignoreSuppressionOfNotices() : bool
    {
    }
    public function ignoreSuppressionOfPhpNotices() : bool
    {
    }
    public function ignoreSuppressionOfWarnings() : bool
    {
    }
    public function ignoreSuppressionOfPhpWarnings() : bool
    {
    }
    /**
     * @return array{functions: list<non-empty-string>, methods: list<non-empty-string>}
     */
    public function deprecationTriggers() : array
    {
    }
    public function ignoreSelfDeprecations() : bool
    {
    }
    public function ignoreDirectDeprecations() : bool
    {
    }
    public function ignoreIndirectDeprecations() : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class IniSetting
{
    public function __construct(string $name, string $value)
    {
    }
    public function name() : string
    {
    }
    public function value() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @template-implements Iterator<int, TestDirectory>
 */
final class TestDirectoryCollectionIterator implements \Iterator
{
    public function __construct(\PHPUnit\TextUI\Configuration\TestDirectoryCollection $directories)
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\TextUI\Configuration\TestDirectory
    {
    }
    public function next() : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 *
 * @template-implements IteratorAggregate<int, Group>
 */
final readonly class GroupCollection implements \IteratorAggregate
{
    /**
     * @param list<Group> $groups
     */
    public static function fromArray(array $groups) : self
    {
    }
    /**
     * @return list<Group>
     */
    public function asArray() : array
    {
    }
    /**
     * @return list<string>
     */
    public function asArrayOfStrings() : array
    {
    }
    public function isEmpty() : bool
    {
    }
    public function getIterator() : \PHPUnit\TextUI\Configuration\GroupCollectionIterator
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 *
 * @template-implements IteratorAggregate<int, IniSetting>
 */
final readonly class IniSettingCollection implements \Countable, \IteratorAggregate
{
    /**
     * @param list<IniSetting> $iniSettings
     */
    public static function fromArray(array $iniSettings) : self
    {
    }
    /**
     * @return list<IniSetting>
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \PHPUnit\TextUI\Configuration\IniSettingCollectionIterator
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 *
 * @template-implements IteratorAggregate<int, Variable>
 */
final readonly class VariableCollection implements \Countable, \IteratorAggregate
{
    /**
     * @param list<Variable> $variables
     */
    public static function fromArray(array $variables) : self
    {
    }
    /**
     * @return list<Variable>
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \PHPUnit\TextUI\Configuration\VariableCollectionIterator
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class FilterDirectory
{
    /**
     * @param non-empty-string $path
     */
    public function __construct(string $path, string $prefix, string $suffix)
    {
    }
    /**
     * @return non-empty-string
     */
    public function path() : string
    {
    }
    public function prefix() : string
    {
    }
    public function suffix() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @template-implements Iterator<int, ExtensionBootstrap>
 */
final class ExtensionBootstrapCollectionIterator implements \Iterator
{
    public function __construct(\PHPUnit\TextUI\Configuration\ExtensionBootstrapCollection $extensionBootstraps)
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\TextUI\Configuration\ExtensionBootstrap
    {
    }
    public function next() : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @template-implements Iterator<int, File>
 */
final class FileCollectionIterator implements \Iterator
{
    public function __construct(\PHPUnit\TextUI\Configuration\FileCollection $files)
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\TextUI\Configuration\File
    {
    }
    public function next() : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class Variable
{
    public function __construct(string $name, mixed $value, bool $force)
    {
    }
    public function name() : string
    {
    }
    public function value() : mixed
    {
    }
    public function force() : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class TestDirectory
{
    /**
     * @param non-empty-string       $path
     * @param list<non-empty-string> $groups
     */
    public function __construct(string $path, string $prefix, string $suffix, string $phpVersion, \PHPUnit\Util\VersionComparisonOperator $phpVersionOperator, array $groups)
    {
    }
    /**
     * @return non-empty-string
     */
    public function path() : string
    {
    }
    public function prefix() : string
    {
    }
    public function suffix() : string
    {
    }
    public function phpVersion() : string
    {
    }
    public function phpVersionOperator() : \PHPUnit\Util\VersionComparisonOperator
    {
    }
    /**
     * @return list<non-empty-string>
     */
    public function groups() : array
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @template-implements Iterator<int, Variable>
 */
final class VariableCollectionIterator implements \Iterator
{
    public function __construct(\PHPUnit\TextUI\Configuration\VariableCollection $variables)
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\TextUI\Configuration\Variable
    {
    }
    public function next() : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class TestSuite
{
    /**
     * @param non-empty-string $name
     */
    public function __construct(string $name, \PHPUnit\TextUI\Configuration\TestDirectoryCollection $directories, \PHPUnit\TextUI\Configuration\TestFileCollection $files, \PHPUnit\TextUI\Configuration\FileCollection $exclude)
    {
    }
    /**
     * @return non-empty-string
     */
    public function name() : string
    {
    }
    public function directories() : \PHPUnit\TextUI\Configuration\TestDirectoryCollection
    {
    }
    public function files() : \PHPUnit\TextUI\Configuration\TestFileCollection
    {
    }
    public function exclude() : \PHPUnit\TextUI\Configuration\FileCollection
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class Group
{
    public function __construct(string $name)
    {
    }
    public function name() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @template-implements Iterator<int, Directory>
 */
final class DirectoryCollectionIterator implements \Iterator
{
    public function __construct(\PHPUnit\TextUI\Configuration\DirectoryCollection $directories)
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\TextUI\Configuration\Directory
    {
    }
    public function next() : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 *
 * @template-implements IteratorAggregate<int, File>
 */
final readonly class FileCollection implements \Countable, \IteratorAggregate
{
    /**
     * @param list<File> $files
     */
    public static function fromArray(array $files) : self
    {
    }
    /**
     * @return list<File>
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function notEmpty() : bool
    {
    }
    public function getIterator() : \PHPUnit\TextUI\Configuration\FileCollectionIterator
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class Directory
{
    public function __construct(string $path)
    {
    }
    public function path() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @template-implements Iterator<int, TestFile>
 */
final class TestFileCollectionIterator implements \Iterator
{
    public function __construct(\PHPUnit\TextUI\Configuration\TestFileCollection $files)
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\TextUI\Configuration\TestFile
    {
    }
    public function next() : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class TestFile
{
    /**
     * @param non-empty-string       $path
     * @param list<non-empty-string> $groups
     */
    public function __construct(string $path, string $phpVersion, \PHPUnit\Util\VersionComparisonOperator $phpVersionOperator, array $groups)
    {
    }
    /**
     * @return non-empty-string
     */
    public function path() : string
    {
    }
    public function phpVersion() : string
    {
    }
    public function phpVersionOperator() : \PHPUnit\Util\VersionComparisonOperator
    {
    }
    /**
     * @return list<non-empty-string>
     */
    public function groups() : array
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class Constant
{
    public function __construct(string $name, bool|string $value)
    {
    }
    public function name() : string
    {
    }
    public function value() : bool|string
    {
    }
}
/**
 * @template-implements IteratorAggregate<int, ExtensionBootstrap>
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class ExtensionBootstrapCollection implements \IteratorAggregate
{
    /**
     * @param list<ExtensionBootstrap> $extensionBootstraps
     */
    public static function fromArray(array $extensionBootstraps) : self
    {
    }
    /**
     * @return list<ExtensionBootstrap>
     */
    public function asArray() : array
    {
    }
    public function getIterator() : \PHPUnit\TextUI\Configuration\ExtensionBootstrapCollectionIterator
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @template-implements Iterator<int, FilterDirectory>
 */
final class FilterDirectoryCollectionIterator implements \Iterator
{
    public function __construct(\PHPUnit\TextUI\Configuration\FilterDirectoryCollection $directories)
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\TextUI\Configuration\FilterDirectory
    {
    }
    public function next() : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class Php
{
    public function __construct(\PHPUnit\TextUI\Configuration\DirectoryCollection $includePaths, \PHPUnit\TextUI\Configuration\IniSettingCollection $iniSettings, \PHPUnit\TextUI\Configuration\ConstantCollection $constants, \PHPUnit\TextUI\Configuration\VariableCollection $globalVariables, \PHPUnit\TextUI\Configuration\VariableCollection $envVariables, \PHPUnit\TextUI\Configuration\VariableCollection $postVariables, \PHPUnit\TextUI\Configuration\VariableCollection $getVariables, \PHPUnit\TextUI\Configuration\VariableCollection $cookieVariables, \PHPUnit\TextUI\Configuration\VariableCollection $serverVariables, \PHPUnit\TextUI\Configuration\VariableCollection $filesVariables, \PHPUnit\TextUI\Configuration\VariableCollection $requestVariables)
    {
    }
    public function includePaths() : \PHPUnit\TextUI\Configuration\DirectoryCollection
    {
    }
    public function iniSettings() : \PHPUnit\TextUI\Configuration\IniSettingCollection
    {
    }
    public function constants() : \PHPUnit\TextUI\Configuration\ConstantCollection
    {
    }
    public function globalVariables() : \PHPUnit\TextUI\Configuration\VariableCollection
    {
    }
    public function envVariables() : \PHPUnit\TextUI\Configuration\VariableCollection
    {
    }
    public function postVariables() : \PHPUnit\TextUI\Configuration\VariableCollection
    {
    }
    public function getVariables() : \PHPUnit\TextUI\Configuration\VariableCollection
    {
    }
    public function cookieVariables() : \PHPUnit\TextUI\Configuration\VariableCollection
    {
    }
    public function serverVariables() : \PHPUnit\TextUI\Configuration\VariableCollection
    {
    }
    public function filesVariables() : \PHPUnit\TextUI\Configuration\VariableCollection
    {
    }
    public function requestVariables() : \PHPUnit\TextUI\Configuration\VariableCollection
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 *
 * @template-implements IteratorAggregate<int, Constant>
 */
final readonly class ConstantCollection implements \Countable, \IteratorAggregate
{
    /**
     * @param list<Constant> $constants
     */
    public static function fromArray(array $constants) : self
    {
    }
    /**
     * @return list<Constant>
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \PHPUnit\TextUI\Configuration\ConstantCollectionIterator
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 *
 * @template-implements IteratorAggregate<int, FilterDirectory>
 */
final readonly class FilterDirectoryCollection implements \Countable, \IteratorAggregate
{
    /**
     * @param list<FilterDirectory> $directories
     */
    public static function fromArray(array $directories) : self
    {
    }
    /**
     * @return list<FilterDirectory>
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function notEmpty() : bool
    {
    }
    public function getIterator() : \PHPUnit\TextUI\Configuration\FilterDirectoryCollectionIterator
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 *
 * @template-implements IteratorAggregate<int, TestFile>
 */
final readonly class TestFileCollection implements \Countable, \IteratorAggregate
{
    /**
     * @param list<TestFile> $files
     */
    public static function fromArray(array $files) : self
    {
    }
    /**
     * @return list<TestFile>
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \PHPUnit\TextUI\Configuration\TestFileCollectionIterator
    {
    }
    public function isEmpty() : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class File
{
    /**
     * @param non-empty-string $path
     */
    public function __construct(string $path)
    {
    }
    /**
     * @return non-empty-string
     */
    public function path() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class ExtensionBootstrap
{
    /**
     * @param non-empty-string     $className
     * @param array<string,string> $parameters
     */
    public function __construct(string $className, array $parameters)
    {
    }
    /**
     * @return non-empty-string
     */
    public function className() : string
    {
    }
    /**
     * @return array<string,string>
     */
    public function parameters() : array
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 *
 * @template-implements IteratorAggregate<int, TestSuite>
 */
final readonly class TestSuiteCollection implements \Countable, \IteratorAggregate
{
    /**
     * @param list<TestSuite> $testSuites
     */
    public static function fromArray(array $testSuites) : self
    {
    }
    /**
     * @return list<TestSuite>
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \PHPUnit\TextUI\Configuration\TestSuiteCollectionIterator
    {
    }
    public function isEmpty() : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @template-implements Iterator<int, TestSuite>
 */
final class TestSuiteCollectionIterator implements \Iterator
{
    public function __construct(\PHPUnit\TextUI\Configuration\TestSuiteCollection $testSuites)
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\TextUI\Configuration\TestSuite
    {
    }
    public function next() : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 *
 * @template-implements IteratorAggregate<int, Directory>
 */
final readonly class DirectoryCollection implements \Countable, \IteratorAggregate
{
    /**
     * @param list<Directory> $directories
     */
    public static function fromArray(array $directories) : self
    {
    }
    /**
     * @return list<Directory>
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \PHPUnit\TextUI\Configuration\DirectoryCollectionIterator
    {
    }
    public function isEmpty() : bool
    {
    }
}
namespace PHPUnit\TextUI\CliArguments;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Builder
{
    /**
     * @param list<string> $parameters
     *
     * @throws Exception
     */
    public function fromParameters(array $parameters) : \PHPUnit\TextUI\CliArguments\Configuration
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class XmlConfigurationFileFinder
{
    public function find(\PHPUnit\TextUI\CliArguments\Configuration $configuration) : false|string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class Configuration
{
    /**
     * @param list<non-empty-string>                               $arguments
     * @param ?non-empty-list<non-empty-string>                    $excludeGroups
     * @param ?non-empty-list<non-empty-string>                    $groups
     * @param ?non-empty-list<non-empty-string>                    $testsCovering
     * @param ?non-empty-list<non-empty-string>                    $testsUsing
     * @param ?non-empty-list<non-empty-string>                    $testsRequiringPhpExtension
     * @param ?non-empty-array<non-empty-string, non-empty-string> $iniSettings
     * @param ?non-empty-list<non-empty-string>                    $testSuffixes
     * @param ?non-empty-list<non-empty-string>                    $coverageFilter
     * @param ?non-empty-list<non-empty-string>                    $extensions
     */
    public function __construct(array $arguments, ?string $atLeastVersion, ?bool $backupGlobals, ?bool $backupStaticProperties, ?bool $beStrictAboutChangesToGlobalState, ?string $bootstrap, ?string $cacheDirectory, ?bool $cacheResult, bool $checkVersion, ?string $colors, null|int|string $columns, ?string $configurationFile, ?string $coverageClover, ?string $coverageCobertura, ?string $coverageCrap4J, ?string $coverageHtml, ?string $coveragePhp, ?string $coverageText, ?bool $coverageTextShowUncoveredFiles, ?bool $coverageTextShowOnlySummary, ?string $coverageXml, ?bool $pathCoverage, bool $warmCoverageCache, ?int $defaultTimeLimit, ?bool $disableCodeCoverageIgnore, ?bool $disallowTestOutput, ?bool $enforceTimeLimit, ?array $excludeGroups, ?int $executionOrder, ?int $executionOrderDefects, ?bool $failOnDeprecation, ?bool $failOnPhpunitDeprecation, ?bool $failOnEmptyTestSuite, ?bool $failOnIncomplete, ?bool $failOnNotice, ?bool $failOnRisky, ?bool $failOnSkipped, ?bool $failOnWarning, ?bool $stopOnDefect, ?bool $stopOnDeprecation, ?bool $stopOnError, ?bool $stopOnFailure, ?bool $stopOnIncomplete, ?bool $stopOnNotice, ?bool $stopOnRisky, ?bool $stopOnSkipped, ?bool $stopOnWarning, ?string $filter, ?string $excludeFilter, ?string $generateBaseline, ?string $useBaseline, bool $ignoreBaseline, bool $generateConfiguration, bool $migrateConfiguration, ?array $groups, ?array $testsCovering, ?array $testsUsing, ?array $testsRequiringPhpExtension, bool $help, ?string $includePath, ?array $iniSettings, ?string $junitLogfile, bool $listGroups, bool $listSuites, bool $listTestFiles, bool $listTests, ?string $listTestsXml, ?bool $noCoverage, ?bool $noExtensions, ?bool $noOutput, ?bool $noProgress, ?bool $noResults, ?bool $noLogging, ?bool $processIsolation, ?int $randomOrderSeed, ?bool $reportUselessTests, ?bool $resolveDependencies, ?bool $reverseList, ?bool $stderr, ?bool $strictCoverage, ?string $teamcityLogfile, ?string $testdoxHtmlFile, ?string $testdoxTextFile, ?array $testSuffixes, ?string $testSuite, ?string $excludeTestSuite, bool $useDefaultConfiguration, ?bool $displayDetailsOnIncompleteTests, ?bool $displayDetailsOnSkippedTests, ?bool $displayDetailsOnTestsThatTriggerDeprecations, ?bool $displayDetailsOnPhpunitDeprecations, ?bool $displayDetailsOnTestsThatTriggerErrors, ?bool $displayDetailsOnTestsThatTriggerNotices, ?bool $displayDetailsOnTestsThatTriggerWarnings, bool $version, ?array $coverageFilter, ?string $logEventsText, ?string $logEventsVerboseText, ?bool $printerTeamCity, ?bool $testdoxPrinter, ?bool $testdoxPrinterSummary, bool $debug, ?array $extensions)
    {
    }
    /**
     * @return list<non-empty-string>
     */
    public function arguments() : array
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->atLeastVersion
     */
    public function hasAtLeastVersion() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function atLeastVersion() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->backupGlobals
     */
    public function hasBackupGlobals() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function backupGlobals() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->backupStaticProperties
     */
    public function hasBackupStaticProperties() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function backupStaticProperties() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->beStrictAboutChangesToGlobalState
     */
    public function hasBeStrictAboutChangesToGlobalState() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function beStrictAboutChangesToGlobalState() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->bootstrap
     */
    public function hasBootstrap() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function bootstrap() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->cacheDirectory
     */
    public function hasCacheDirectory() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function cacheDirectory() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->cacheResult
     */
    public function hasCacheResult() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function cacheResult() : bool
    {
    }
    public function checkVersion() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->colors
     */
    public function hasColors() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function colors() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->columns
     */
    public function hasColumns() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function columns() : int|string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->configurationFile
     */
    public function hasConfigurationFile() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function configurationFile() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->coverageFilter
     */
    public function hasCoverageFilter() : bool
    {
    }
    /**
     * @throws Exception
     *
     * @return non-empty-list<non-empty-string>
     */
    public function coverageFilter() : array
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->coverageClover
     */
    public function hasCoverageClover() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function coverageClover() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->coverageCobertura
     */
    public function hasCoverageCobertura() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function coverageCobertura() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->coverageCrap4J
     */
    public function hasCoverageCrap4J() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function coverageCrap4J() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->coverageHtml
     */
    public function hasCoverageHtml() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function coverageHtml() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->coveragePhp
     */
    public function hasCoveragePhp() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function coveragePhp() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->coverageText
     */
    public function hasCoverageText() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function coverageText() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->coverageTextShowUncoveredFiles
     */
    public function hasCoverageTextShowUncoveredFiles() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function coverageTextShowUncoveredFiles() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->coverageTextShowOnlySummary
     */
    public function hasCoverageTextShowOnlySummary() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function coverageTextShowOnlySummary() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->coverageXml
     */
    public function hasCoverageXml() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function coverageXml() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->pathCoverage
     */
    public function hasPathCoverage() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function pathCoverage() : bool
    {
    }
    public function warmCoverageCache() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->defaultTimeLimit
     */
    public function hasDefaultTimeLimit() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function defaultTimeLimit() : int
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->disableCodeCoverageIgnore
     */
    public function hasDisableCodeCoverageIgnore() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function disableCodeCoverageIgnore() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->disallowTestOutput
     */
    public function hasDisallowTestOutput() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function disallowTestOutput() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->enforceTimeLimit
     */
    public function hasEnforceTimeLimit() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function enforceTimeLimit() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->excludeGroups
     */
    public function hasExcludeGroups() : bool
    {
    }
    /**
     * @throws Exception
     *
     * @return non-empty-list<non-empty-string>
     */
    public function excludeGroups() : array
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->executionOrder
     */
    public function hasExecutionOrder() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function executionOrder() : int
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->executionOrderDefects
     */
    public function hasExecutionOrderDefects() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function executionOrderDefects() : int
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->failOnDeprecation
     */
    public function hasFailOnDeprecation() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function failOnDeprecation() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->failOnPhpunitDeprecation
     */
    public function hasFailOnPhpunitDeprecation() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function failOnPhpunitDeprecation() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->failOnEmptyTestSuite
     */
    public function hasFailOnEmptyTestSuite() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function failOnEmptyTestSuite() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->failOnIncomplete
     */
    public function hasFailOnIncomplete() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function failOnIncomplete() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->failOnNotice
     */
    public function hasFailOnNotice() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function failOnNotice() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->failOnRisky
     */
    public function hasFailOnRisky() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function failOnRisky() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->failOnSkipped
     */
    public function hasFailOnSkipped() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function failOnSkipped() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->failOnWarning
     */
    public function hasFailOnWarning() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function failOnWarning() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->stopOnDefect
     */
    public function hasStopOnDefect() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function stopOnDefect() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->stopOnDeprecation
     */
    public function hasStopOnDeprecation() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function stopOnDeprecation() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->stopOnError
     */
    public function hasStopOnError() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function stopOnError() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->stopOnFailure
     */
    public function hasStopOnFailure() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function stopOnFailure() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->stopOnIncomplete
     */
    public function hasStopOnIncomplete() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function stopOnIncomplete() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->stopOnNotice
     */
    public function hasStopOnNotice() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function stopOnNotice() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->stopOnRisky
     */
    public function hasStopOnRisky() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function stopOnRisky() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->stopOnSkipped
     */
    public function hasStopOnSkipped() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function stopOnSkipped() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->stopOnWarning
     */
    public function hasStopOnWarning() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function stopOnWarning() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->excludeFilter
     */
    public function hasExcludeFilter() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function excludeFilter() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->filter
     */
    public function hasFilter() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function filter() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->generateBaseline
     */
    public function hasGenerateBaseline() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function generateBaseline() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->useBaseline
     */
    public function hasUseBaseline() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function useBaseline() : string
    {
    }
    public function ignoreBaseline() : bool
    {
    }
    public function generateConfiguration() : bool
    {
    }
    public function migrateConfiguration() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->groups
     */
    public function hasGroups() : bool
    {
    }
    /**
     * @throws Exception
     *
     * @return non-empty-list<non-empty-string>
     */
    public function groups() : array
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->testsCovering
     */
    public function hasTestsCovering() : bool
    {
    }
    /**
     * @throws Exception
     *
     * @return non-empty-list<non-empty-string>
     */
    public function testsCovering() : array
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->testsUsing
     */
    public function hasTestsUsing() : bool
    {
    }
    /**
     * @throws Exception
     *
     * @return non-empty-list<non-empty-string>
     */
    public function testsUsing() : array
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->testsRequiringPhpExtension
     */
    public function hasTestsRequiringPhpExtension() : bool
    {
    }
    /**
     * @throws Exception
     *
     * @return non-empty-list<non-empty-string>
     */
    public function testsRequiringPhpExtension() : array
    {
    }
    public function help() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->includePath
     */
    public function hasIncludePath() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function includePath() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->iniSettings
     */
    public function hasIniSettings() : bool
    {
    }
    /**
     * @throws Exception
     *
     * @return non-empty-array<non-empty-string, non-empty-string>
     */
    public function iniSettings() : array
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->junitLogfile
     */
    public function hasJunitLogfile() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function junitLogfile() : string
    {
    }
    public function listGroups() : bool
    {
    }
    public function listSuites() : bool
    {
    }
    public function listTestFiles() : bool
    {
    }
    public function listTests() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->listTestsXml
     */
    public function hasListTestsXml() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function listTestsXml() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->noCoverage
     */
    public function hasNoCoverage() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function noCoverage() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->noExtensions
     */
    public function hasNoExtensions() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function noExtensions() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->noOutput
     */
    public function hasNoOutput() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function noOutput() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->noProgress
     */
    public function hasNoProgress() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function noProgress() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->noResults
     */
    public function hasNoResults() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function noResults() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->noLogging
     */
    public function hasNoLogging() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function noLogging() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->processIsolation
     */
    public function hasProcessIsolation() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function processIsolation() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->randomOrderSeed
     */
    public function hasRandomOrderSeed() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function randomOrderSeed() : int
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->reportUselessTests
     */
    public function hasReportUselessTests() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function reportUselessTests() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->resolveDependencies
     */
    public function hasResolveDependencies() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function resolveDependencies() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->reverseList
     */
    public function hasReverseList() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function reverseList() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->stderr
     */
    public function hasStderr() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function stderr() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->strictCoverage
     */
    public function hasStrictCoverage() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function strictCoverage() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->teamcityLogfile
     */
    public function hasTeamcityLogfile() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function teamcityLogfile() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->teamcityPrinter
     */
    public function hasTeamCityPrinter() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function teamCityPrinter() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->testdoxHtmlFile
     */
    public function hasTestdoxHtmlFile() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function testdoxHtmlFile() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->testdoxTextFile
     */
    public function hasTestdoxTextFile() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function testdoxTextFile() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->testdoxPrinter
     */
    public function hasTestDoxPrinter() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function testdoxPrinter() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->testdoxPrinterSummary
     */
    public function hasTestDoxPrinterSummary() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function testdoxPrinterSummary() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->testSuffixes
     */
    public function hasTestSuffixes() : bool
    {
    }
    /**
     * @throws Exception
     *
     * @return non-empty-list<non-empty-string>
     */
    public function testSuffixes() : array
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->testSuite
     */
    public function hasTestSuite() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function testSuite() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->excludedTestSuite
     */
    public function hasExcludedTestSuite() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function excludedTestSuite() : string
    {
    }
    public function useDefaultConfiguration() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->displayDetailsOnIncompleteTests
     */
    public function hasDisplayDetailsOnIncompleteTests() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function displayDetailsOnIncompleteTests() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->displayDetailsOnSkippedTests
     */
    public function hasDisplayDetailsOnSkippedTests() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function displayDetailsOnSkippedTests() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->displayDetailsOnTestsThatTriggerDeprecations
     */
    public function hasDisplayDetailsOnTestsThatTriggerDeprecations() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function displayDetailsOnTestsThatTriggerDeprecations() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->displayDetailsOnPhpunitDeprecations
     */
    public function hasDisplayDetailsOnPhpunitDeprecations() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function displayDetailsOnPhpunitDeprecations() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->displayDetailsOnTestsThatTriggerErrors
     */
    public function hasDisplayDetailsOnTestsThatTriggerErrors() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function displayDetailsOnTestsThatTriggerErrors() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->displayDetailsOnTestsThatTriggerNotices
     */
    public function hasDisplayDetailsOnTestsThatTriggerNotices() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function displayDetailsOnTestsThatTriggerNotices() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->displayDetailsOnTestsThatTriggerWarnings
     */
    public function hasDisplayDetailsOnTestsThatTriggerWarnings() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function displayDetailsOnTestsThatTriggerWarnings() : bool
    {
    }
    public function version() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->logEventsText
     */
    public function hasLogEventsText() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function logEventsText() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->logEventsVerboseText
     */
    public function hasLogEventsVerboseText() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function logEventsVerboseText() : string
    {
    }
    public function debug() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->extensions
     */
    public function hasExtensions() : bool
    {
    }
    /**
     * @throws Exception
     *
     * @return non-empty-list<non-empty-string>
     */
    public function extensions() : array
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Exception extends \RuntimeException implements \PHPUnit\Exception
{
}
namespace PHPUnit\TextUI\Configuration;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @codeCoverageIgnore
 */
final readonly class Builder
{
    /**
     * @param list<string> $argv
     *
     * @throws ConfigurationCannotBeBuiltException
     */
    public function build(array $argv) : \PHPUnit\TextUI\Configuration\Configuration
    {
    }
}
/**
 * CLI options and XML configuration are static within a single PHPUnit process.
 * It is therefore okay to use a Singleton registry here.
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CodeCoverageFilterRegistry
{
    public static function instance() : self
    {
    }
    /**
     * @codeCoverageIgnore
     */
    public function get() : \SebastianBergmann\CodeCoverage\Filter
    {
    }
    /**
     * @codeCoverageIgnore
     */
    public function init(\PHPUnit\TextUI\Configuration\Configuration $configuration, bool $force = false) : void
    {
    }
    /**
     * @codeCoverageIgnore
     */
    public function configured() : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Merger
{
    /**
     * @throws \PHPUnit\TextUI\XmlConfiguration\Exception
     * @throws Exception
     * @throws NoCustomCssFileException
     */
    public function merge(\PHPUnit\TextUI\CliArguments\Configuration $cliConfiguration, \PHPUnit\TextUI\XmlConfiguration\Configuration $xmlConfiguration) : \PHPUnit\TextUI\Configuration\Configuration
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class PhpHandler
{
    public function handle(\PHPUnit\TextUI\Configuration\Php $configuration) : void
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Configuration
{
    public const COLOR_NEVER = 'never';
    public const COLOR_AUTO = 'auto';
    public const COLOR_ALWAYS = 'always';
    public const COLOR_DEFAULT = self::COLOR_NEVER;
    /**
     * @param list<non-empty-string>                                                      $cliArguments
     * @param ?non-empty-string                                                           $pharExtensionDirectory
     * @param list<array{className: non-empty-string, parameters: array<string, string>}> $extensionBootstrappers
     * @param ?non-empty-list<non-empty-string>                                           $testsCovering
     * @param ?non-empty-list<non-empty-string>                                           $testsUsing
     * @param ?non-empty-list<non-empty-string>                                           $testsRequiringPhpExtension
     * @param list<non-empty-string>                                                      $groups
     * @param list<non-empty-string>                                                      $excludeGroups
     * @param non-empty-list<non-empty-string>                                            $testSuffixes
     * @param non-negative-int                                                            $shortenArraysForExportThreshold
     */
    public function __construct(array $cliArguments, ?string $configurationFile, ?string $bootstrap, bool $cacheResult, ?string $cacheDirectory, ?string $coverageCacheDirectory, \PHPUnit\TextUI\Configuration\Source $source, string $testResultCacheFile, ?string $coverageClover, ?string $coverageCobertura, ?string $coverageCrap4j, int $coverageCrap4jThreshold, ?string $coverageHtml, int $coverageHtmlLowUpperBound, int $coverageHtmlHighLowerBound, string $coverageHtmlColorSuccessLow, string $coverageHtmlColorSuccessMedium, string $coverageHtmlColorSuccessHigh, string $coverageHtmlColorWarning, string $coverageHtmlColorDanger, ?string $coverageHtmlCustomCssFile, ?string $coveragePhp, ?string $coverageText, bool $coverageTextShowUncoveredFiles, bool $coverageTextShowOnlySummary, ?string $coverageXml, bool $pathCoverage, bool $ignoreDeprecatedCodeUnitsFromCodeCoverage, bool $disableCodeCoverageIgnore, bool $failOnDeprecation, bool $failOnPhpunitDeprecation, bool $failOnEmptyTestSuite, bool $failOnIncomplete, bool $failOnNotice, bool $failOnRisky, bool $failOnSkipped, bool $failOnWarning, bool $stopOnDefect, bool $stopOnDeprecation, bool $stopOnError, bool $stopOnFailure, bool $stopOnIncomplete, bool $stopOnNotice, bool $stopOnRisky, bool $stopOnSkipped, bool $stopOnWarning, bool $outputToStandardErrorStream, int|string $columns, bool $noExtensions, ?string $pharExtensionDirectory, array $extensionBootstrappers, bool $backupGlobals, bool $backupStaticProperties, bool $beStrictAboutChangesToGlobalState, bool $colors, bool $processIsolation, bool $enforceTimeLimit, int $defaultTimeLimit, int $timeoutForSmallTests, int $timeoutForMediumTests, int $timeoutForLargeTests, bool $reportUselessTests, bool $strictCoverage, bool $disallowTestOutput, bool $displayDetailsOnIncompleteTests, bool $displayDetailsOnSkippedTests, bool $displayDetailsOnTestsThatTriggerDeprecations, bool $displayDetailsOnPhpunitDeprecations, bool $displayDetailsOnTestsThatTriggerErrors, bool $displayDetailsOnTestsThatTriggerNotices, bool $displayDetailsOnTestsThatTriggerWarnings, bool $reverseDefectList, bool $requireCoverageMetadata, bool $noProgress, bool $noResults, bool $noOutput, int $executionOrder, int $executionOrderDefects, bool $resolveDependencies, ?string $logfileTeamcity, ?string $logfileJunit, ?string $logfileTestdoxHtml, ?string $logfileTestdoxText, ?string $logEventsText, ?string $logEventsVerboseText, bool $teamCityOutput, bool $testDoxOutput, bool $testDoxOutputSummary, ?array $testsCovering, ?array $testsUsing, ?array $testsRequiringPhpExtension, ?string $filter, ?string $excludeFilter, array $groups, array $excludeGroups, int $randomOrderSeed, \PHPUnit\TextUI\Configuration\TestSuiteCollection $testSuite, string $includeTestSuite, string $excludeTestSuite, ?string $defaultTestSuite, array $testSuffixes, \PHPUnit\TextUI\Configuration\Php $php, bool $controlGarbageCollector, int $numberOfTestsBeforeGarbageCollection, ?string $generateBaseline, bool $debug, int $shortenArraysForExportThreshold)
    {
    }
    /**
     * @phpstan-assert-if-true !empty $this->cliArguments
     */
    public function hasCliArguments() : bool
    {
    }
    /**
     * @return list<non-empty-string>
     */
    public function cliArguments() : array
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->configurationFile
     */
    public function hasConfigurationFile() : bool
    {
    }
    /**
     * @throws NoConfigurationFileException
     */
    public function configurationFile() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->bootstrap
     */
    public function hasBootstrap() : bool
    {
    }
    /**
     * @throws NoBootstrapException
     */
    public function bootstrap() : string
    {
    }
    public function cacheResult() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->cacheDirectory
     */
    public function hasCacheDirectory() : bool
    {
    }
    /**
     * @throws NoCacheDirectoryException
     */
    public function cacheDirectory() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->coverageCacheDirectory
     */
    public function hasCoverageCacheDirectory() : bool
    {
    }
    /**
     * @throws NoCoverageCacheDirectoryException
     */
    public function coverageCacheDirectory() : string
    {
    }
    public function source() : \PHPUnit\TextUI\Configuration\Source
    {
    }
    public function testResultCacheFile() : string
    {
    }
    public function ignoreDeprecatedCodeUnitsFromCodeCoverage() : bool
    {
    }
    public function disableCodeCoverageIgnore() : bool
    {
    }
    public function pathCoverage() : bool
    {
    }
    public function hasCoverageReport() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->coverageClover
     */
    public function hasCoverageClover() : bool
    {
    }
    /**
     * @throws CodeCoverageReportNotConfiguredException
     */
    public function coverageClover() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->coverageCobertura
     */
    public function hasCoverageCobertura() : bool
    {
    }
    /**
     * @throws CodeCoverageReportNotConfiguredException
     */
    public function coverageCobertura() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->coverageCrap4j
     */
    public function hasCoverageCrap4j() : bool
    {
    }
    /**
     * @throws CodeCoverageReportNotConfiguredException
     */
    public function coverageCrap4j() : string
    {
    }
    public function coverageCrap4jThreshold() : int
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->coverageHtml
     */
    public function hasCoverageHtml() : bool
    {
    }
    /**
     * @throws CodeCoverageReportNotConfiguredException
     */
    public function coverageHtml() : string
    {
    }
    public function coverageHtmlLowUpperBound() : int
    {
    }
    public function coverageHtmlHighLowerBound() : int
    {
    }
    public function coverageHtmlColorSuccessLow() : string
    {
    }
    public function coverageHtmlColorSuccessMedium() : string
    {
    }
    public function coverageHtmlColorSuccessHigh() : string
    {
    }
    public function coverageHtmlColorWarning() : string
    {
    }
    public function coverageHtmlColorDanger() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->coverageHtmlCustomCssFile
     */
    public function hasCoverageHtmlCustomCssFile() : bool
    {
    }
    /**
     * @throws NoCustomCssFileException
     */
    public function coverageHtmlCustomCssFile() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->coveragePhp
     */
    public function hasCoveragePhp() : bool
    {
    }
    /**
     * @throws CodeCoverageReportNotConfiguredException
     */
    public function coveragePhp() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->coverageText
     */
    public function hasCoverageText() : bool
    {
    }
    /**
     * @throws CodeCoverageReportNotConfiguredException
     */
    public function coverageText() : string
    {
    }
    public function coverageTextShowUncoveredFiles() : bool
    {
    }
    public function coverageTextShowOnlySummary() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->coverageXml
     */
    public function hasCoverageXml() : bool
    {
    }
    /**
     * @throws CodeCoverageReportNotConfiguredException
     */
    public function coverageXml() : string
    {
    }
    public function failOnDeprecation() : bool
    {
    }
    public function failOnPhpunitDeprecation() : bool
    {
    }
    public function failOnEmptyTestSuite() : bool
    {
    }
    public function failOnIncomplete() : bool
    {
    }
    public function failOnNotice() : bool
    {
    }
    public function failOnRisky() : bool
    {
    }
    public function failOnSkipped() : bool
    {
    }
    public function failOnWarning() : bool
    {
    }
    public function stopOnDefect() : bool
    {
    }
    public function stopOnDeprecation() : bool
    {
    }
    public function stopOnError() : bool
    {
    }
    public function stopOnFailure() : bool
    {
    }
    public function stopOnIncomplete() : bool
    {
    }
    public function stopOnNotice() : bool
    {
    }
    public function stopOnRisky() : bool
    {
    }
    public function stopOnSkipped() : bool
    {
    }
    public function stopOnWarning() : bool
    {
    }
    public function outputToStandardErrorStream() : bool
    {
    }
    public function columns() : int
    {
    }
    public function noExtensions() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->pharExtensionDirectory
     */
    public function hasPharExtensionDirectory() : bool
    {
    }
    /**
     * @throws NoPharExtensionDirectoryException
     *
     * @return non-empty-string
     */
    public function pharExtensionDirectory() : string
    {
    }
    /**
     * @return list<array{className: non-empty-string, parameters: array<string, string>}>
     */
    public function extensionBootstrappers() : array
    {
    }
    public function backupGlobals() : bool
    {
    }
    public function backupStaticProperties() : bool
    {
    }
    public function beStrictAboutChangesToGlobalState() : bool
    {
    }
    public function colors() : bool
    {
    }
    public function processIsolation() : bool
    {
    }
    public function enforceTimeLimit() : bool
    {
    }
    public function defaultTimeLimit() : int
    {
    }
    public function timeoutForSmallTests() : int
    {
    }
    public function timeoutForMediumTests() : int
    {
    }
    public function timeoutForLargeTests() : int
    {
    }
    public function reportUselessTests() : bool
    {
    }
    public function strictCoverage() : bool
    {
    }
    public function disallowTestOutput() : bool
    {
    }
    public function displayDetailsOnIncompleteTests() : bool
    {
    }
    public function displayDetailsOnSkippedTests() : bool
    {
    }
    public function displayDetailsOnTestsThatTriggerDeprecations() : bool
    {
    }
    public function displayDetailsOnPhpunitDeprecations() : bool
    {
    }
    public function displayDetailsOnTestsThatTriggerErrors() : bool
    {
    }
    public function displayDetailsOnTestsThatTriggerNotices() : bool
    {
    }
    public function displayDetailsOnTestsThatTriggerWarnings() : bool
    {
    }
    public function reverseDefectList() : bool
    {
    }
    public function requireCoverageMetadata() : bool
    {
    }
    public function noProgress() : bool
    {
    }
    public function noResults() : bool
    {
    }
    public function noOutput() : bool
    {
    }
    public function executionOrder() : int
    {
    }
    public function executionOrderDefects() : int
    {
    }
    public function resolveDependencies() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->logfileTeamcity
     */
    public function hasLogfileTeamcity() : bool
    {
    }
    /**
     * @throws LoggingNotConfiguredException
     */
    public function logfileTeamcity() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->logfileJunit
     */
    public function hasLogfileJunit() : bool
    {
    }
    /**
     * @throws LoggingNotConfiguredException
     */
    public function logfileJunit() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->logfileTestdoxHtml
     */
    public function hasLogfileTestdoxHtml() : bool
    {
    }
    /**
     * @throws LoggingNotConfiguredException
     */
    public function logfileTestdoxHtml() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->logfileTestdoxText
     */
    public function hasLogfileTestdoxText() : bool
    {
    }
    /**
     * @throws LoggingNotConfiguredException
     */
    public function logfileTestdoxText() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->logEventsText
     */
    public function hasLogEventsText() : bool
    {
    }
    /**
     * @throws LoggingNotConfiguredException
     */
    public function logEventsText() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->logEventsVerboseText
     */
    public function hasLogEventsVerboseText() : bool
    {
    }
    /**
     * @throws LoggingNotConfiguredException
     */
    public function logEventsVerboseText() : string
    {
    }
    public function outputIsTeamCity() : bool
    {
    }
    public function outputIsTestDox() : bool
    {
    }
    public function testDoxOutputWithSummary() : bool
    {
    }
    /**
     * @phpstan-assert-if-true !empty $this->testsCovering
     */
    public function hasTestsCovering() : bool
    {
    }
    /**
     * @throws FilterNotConfiguredException
     *
     * @return list<string>
     */
    public function testsCovering() : array
    {
    }
    /**
     * @phpstan-assert-if-true !empty $this->testsUsing
     */
    public function hasTestsUsing() : bool
    {
    }
    /**
     * @throws FilterNotConfiguredException
     *
     * @return list<string>
     */
    public function testsUsing() : array
    {
    }
    /**
     * @phpstan-assert-if-true !empty $this->testsRequiringPhpExtension
     */
    public function hasTestsRequiringPhpExtension() : bool
    {
    }
    /**
     * @throws FilterNotConfiguredException
     *
     * @return non-empty-list<non-empty-string>
     */
    public function testsRequiringPhpExtension() : array
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->filter
     */
    public function hasFilter() : bool
    {
    }
    /**
     * @throws FilterNotConfiguredException
     */
    public function filter() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->excludeFilter
     */
    public function hasExcludeFilter() : bool
    {
    }
    /**
     * @throws FilterNotConfiguredException
     */
    public function excludeFilter() : string
    {
    }
    /**
     * @phpstan-assert-if-true !empty $this->groups
     */
    public function hasGroups() : bool
    {
    }
    /**
     * @throws FilterNotConfiguredException
     *
     * @return non-empty-list<non-empty-string>
     */
    public function groups() : array
    {
    }
    /**
     * @phpstan-assert-if-true !empty $this->excludeGroups
     */
    public function hasExcludeGroups() : bool
    {
    }
    /**
     * @throws FilterNotConfiguredException
     *
     * @return non-empty-list<non-empty-string>
     */
    public function excludeGroups() : array
    {
    }
    public function randomOrderSeed() : int
    {
    }
    public function testSuite() : \PHPUnit\TextUI\Configuration\TestSuiteCollection
    {
    }
    public function includeTestSuite() : string
    {
    }
    public function excludeTestSuite() : string
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->defaultTestSuite
     */
    public function hasDefaultTestSuite() : bool
    {
    }
    /**
     * @throws NoDefaultTestSuiteException
     */
    public function defaultTestSuite() : string
    {
    }
    /**
     * @return non-empty-list<non-empty-string>
     */
    public function testSuffixes() : array
    {
    }
    public function php() : \PHPUnit\TextUI\Configuration\Php
    {
    }
    public function controlGarbageCollector() : bool
    {
    }
    public function numberOfTestsBeforeGarbageCollection() : int
    {
    }
    /**
     * @phpstan-assert-if-true !null $this->generateBaseline
     */
    public function hasGenerateBaseline() : bool
    {
    }
    /**
     * @throws NoBaselineException
     */
    public function generateBaseline() : string
    {
    }
    public function debug() : bool
    {
    }
    /**
     * @return non-negative-int
     */
    public function shortenArraysForExportThreshold() : int
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class SourceFilter
{
    public function includes(\PHPUnit\TextUI\Configuration\Source $source, string $path) : bool
    {
    }
}
namespace PHPUnit\TextUI;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ShellExitCodeCalculator
{
    public function calculate(bool $failOnDeprecation, bool $failOnPhpunitDeprecation, bool $failOnEmptyTestSuite, bool $failOnIncomplete, bool $failOnNotice, bool $failOnRisky, bool $failOnSkipped, bool $failOnWarning, \PHPUnit\TestRunner\TestResult\TestResult $result) : int
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Help
{
    public function __construct(?int $width = null, ?bool $withColor = null)
    {
    }
    public function generate() : string
    {
    }
}
namespace PHPUnit\TextUI\Command;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface Command
{
    public function execute() : \PHPUnit\TextUI\Command\Result;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ShowVersionCommand implements \PHPUnit\TextUI\Command\Command
{
    public function execute() : \PHPUnit\TextUI\Command\Result
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ListTestsAsXmlCommand implements \PHPUnit\TextUI\Command\Command
{
    /**
     * @param list<PhptTestCase|TestCase> $tests
     */
    public function __construct(array $tests, string $filename)
    {
    }
    public function execute() : \PHPUnit\TextUI\Command\Result
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ShowHelpCommand implements \PHPUnit\TextUI\Command\Command
{
    public function __construct(int $shellExitCode)
    {
    }
    public function execute() : \PHPUnit\TextUI\Command\Result
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ListGroupsCommand implements \PHPUnit\TextUI\Command\Command
{
    /**
     * @param list<PhptTestCase|TestCase> $tests
     */
    public function __construct(array $tests)
    {
    }
    public function execute() : \PHPUnit\TextUI\Command\Result
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ListTestSuitesCommand implements \PHPUnit\TextUI\Command\Command
{
    public function __construct(\PHPUnit\Framework\TestSuite $testSuite)
    {
    }
    public function execute() : \PHPUnit\TextUI\Command\Result
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class GenerateConfigurationCommand implements \PHPUnit\TextUI\Command\Command
{
    public function execute() : \PHPUnit\TextUI\Command\Result
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ListTestsAsTextCommand implements \PHPUnit\TextUI\Command\Command
{
    /**
     * @param list<PhptTestCase|TestCase> $tests
     */
    public function __construct(array $tests)
    {
    }
    public function execute() : \PHPUnit\TextUI\Command\Result
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @codeCoverageIgnore
 */
final readonly class WarmCodeCoverageCacheCommand implements \PHPUnit\TextUI\Command\Command
{
    public function __construct(\PHPUnit\TextUI\Configuration\Configuration $configuration, \PHPUnit\TextUI\Configuration\CodeCoverageFilterRegistry $codeCoverageFilterRegistry)
    {
    }
    /**
     * @throws NoActiveTimerException
     * @throws NoCoverageCacheDirectoryException
     */
    public function execute() : \PHPUnit\TextUI\Command\Result
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class MigrateConfigurationCommand implements \PHPUnit\TextUI\Command\Command
{
    public function __construct(string $filename)
    {
    }
    public function execute() : \PHPUnit\TextUI\Command\Result
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class AtLeastVersionCommand implements \PHPUnit\TextUI\Command\Command
{
    public function __construct(string $version)
    {
    }
    public function execute() : \PHPUnit\TextUI\Command\Result
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @codeCoverageIgnore
 */
final readonly class VersionCheckCommand implements \PHPUnit\TextUI\Command\Command
{
    public function execute() : \PHPUnit\TextUI\Command\Result
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ListTestFilesCommand implements \PHPUnit\TextUI\Command\Command
{
    /**
     * @param list<PhptTestCase|TestCase> $tests
     */
    public function __construct(array $tests)
    {
    }
    /**
     * @throws ReflectionException
     */
    public function execute() : \PHPUnit\TextUI\Command\Result
    {
    }
}
/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Result
{
    public const SUCCESS = 0;
    public const FAILURE = 1;
    public const EXCEPTION = 2;
    public const CRASH = 255;
    public static function from(string $output = '', int $shellExitCode = self::SUCCESS) : self
    {
    }
    public function output() : string
    {
    }
    public function shellExitCode() : int
    {
    }
}
namespace PHPUnit\TextUI;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Application
{
    /**
     * @param list<string> $argv
     */
    public function run(array $argv) : int
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestSuiteFilterProcessor
{
    /**
     * @throws Event\RuntimeException
     * @throws FilterNotConfiguredException
     */
    public function process(\PHPUnit\TextUI\Configuration\Configuration $configuration, \PHPUnit\Framework\TestSuite $suite) : void
    {
    }
}