<?php

namespace PHPUnit\Runner;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface TestResultCache
{
    public function setState(string $testName, int $state) : void;
    public function getState(string $testName) : int;
    public function setTime(string $testName, float $time) : void;
    public function getTime(string $testName) : float;
    public function load() : void;
    public function persist() : void;
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class NullTestResultCache implements \PHPUnit\Runner\TestResultCache
{
    public function setState(string $testName, int $state) : void
    {
    }
    public function getState(string $testName) : int
    {
    }
    public function setTime(string $testName, float $time) : void
    {
    }
    public function getTime(string $testName) : float
    {
    }
    public function load() : void
    {
    }
    public function persist() : void
    {
    }
}
interface Hook
{
}
interface TestHook extends \PHPUnit\Runner\Hook
{
}
interface AfterIncompleteTestHook extends \PHPUnit\Runner\TestHook
{
    public function executeAfterIncompleteTest(string $test, string $message, float $time) : void;
}
interface AfterLastTestHook extends \PHPUnit\Runner\Hook
{
    public function executeAfterLastTest() : void;
}
interface AfterRiskyTestHook extends \PHPUnit\Runner\TestHook
{
    public function executeAfterRiskyTest(string $test, string $message, float $time) : void;
}
interface AfterSkippedTestHook extends \PHPUnit\Runner\TestHook
{
    public function executeAfterSkippedTest(string $test, string $message, float $time) : void;
}
interface AfterSuccessfulTestHook extends \PHPUnit\Runner\TestHook
{
    public function executeAfterSuccessfulTest(string $test, float $time) : void;
}
interface AfterTestErrorHook extends \PHPUnit\Runner\TestHook
{
    public function executeAfterTestError(string $test, string $message, float $time) : void;
}
interface AfterTestFailureHook extends \PHPUnit\Runner\TestHook
{
    public function executeAfterTestFailure(string $test, string $message, float $time) : void;
}
interface AfterTestWarningHook extends \PHPUnit\Runner\TestHook
{
    public function executeAfterTestWarning(string $test, string $message, float $time) : void;
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ResultCacheExtension implements \PHPUnit\Runner\AfterIncompleteTestHook, \PHPUnit\Runner\AfterLastTestHook, \PHPUnit\Runner\AfterRiskyTestHook, \PHPUnit\Runner\AfterSkippedTestHook, \PHPUnit\Runner\AfterSuccessfulTestHook, \PHPUnit\Runner\AfterTestErrorHook, \PHPUnit\Runner\AfterTestFailureHook, \PHPUnit\Runner\AfterTestWarningHook
{
    public function __construct(\PHPUnit\Runner\TestResultCache $cache)
    {
    }
    public function flush() : void
    {
    }
    public function executeAfterSuccessfulTest(string $test, float $time) : void
    {
    }
    public function executeAfterIncompleteTest(string $test, string $message, float $time) : void
    {
    }
    public function executeAfterRiskyTest(string $test, string $message, float $time) : void
    {
    }
    public function executeAfterSkippedTest(string $test, string $message, float $time) : void
    {
    }
    public function executeAfterTestError(string $test, string $message, float $time) : void
    {
    }
    public function executeAfterTestFailure(string $test, string $message, float $time) : void
    {
    }
    public function executeAfterTestWarning(string $test, string $message, float $time) : void
    {
    }
    public function executeAfterLastTest() : void
    {
    }
}
final class Version
{
    /**
     * Returns the current version of PHPUnit.
     */
    public static function id() : string
    {
    }
    public static function series() : string
    {
    }
    public static function getVersionString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract class BaseTestRunner
{
    /**
     * @var int
     */
    public const STATUS_UNKNOWN = -1;
    /**
     * @var int
     */
    public const STATUS_PASSED = 0;
    /**
     * @var int
     */
    public const STATUS_SKIPPED = 1;
    /**
     * @var int
     */
    public const STATUS_INCOMPLETE = 2;
    /**
     * @var int
     */
    public const STATUS_FAILURE = 3;
    /**
     * @var int
     */
    public const STATUS_ERROR = 4;
    /**
     * @var int
     */
    public const STATUS_RISKY = 5;
    /**
     * @var int
     */
    public const STATUS_WARNING = 6;
    /**
     * @var string
     */
    public const SUITE_METHODNAME = 'suite';
    /**
     * Returns the loader to be used.
     */
    public function getLoader() : \PHPUnit\Runner\TestSuiteLoader
    {
    }
    /**
     * Returns the Test corresponding to the given suite.
     * This is a template method, subclasses override
     * the runFailed() and clearStatus() methods.
     *
     * @param string|string[] $suffixes
     *
     * @throws Exception
     */
    public function getTest(string $suiteClassFile, $suffixes = '') : ?\PHPUnit\Framework\TestSuite
    {
    }
    /**
     * Returns the loaded ReflectionClass for a suite name.
     */
    protected function loadSuiteClass(string $suiteClassFile) : \ReflectionClass
    {
    }
    /**
     * Clears the status message.
     */
    protected function clearStatus() : void
    {
    }
    /**
     * Override to define how to handle a failed loading of
     * a test suite.
     */
    protected abstract function runFailed(string $message) : void;
}
/**
 * An interface to define how a test suite should be loaded.
 *
 * @deprecated see https://github.com/sebastianbergmann/phpunit/issues/4039
 */
interface TestSuiteLoader
{
    public function load(string $suiteClassFile) : \ReflectionClass;
    public function reload(\ReflectionClass $aClass) : \ReflectionClass;
}
namespace PHPUnit\Framework;

/**
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
 * A Test can be run and collect its results.
 */
interface Test extends \Countable
{
    /**
     * Runs a test and collects its result in a TestResult instance.
     */
    public function run(\PHPUnit\Framework\TestResult $result = null) : \PHPUnit\Framework\TestResult;
}
namespace PHPUnit\Runner;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class PhptTestCase implements \PHPUnit\Framework\Reorderable, \PHPUnit\Framework\SelfDescribing, \PHPUnit\Framework\Test
{
    /**
     * Constructs a test case with the given filename.
     *
     * @throws Exception
     */
    public function __construct(string $filename, \PHPUnit\Util\PHP\AbstractPhpProcess $phpUtil = null)
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
     * @throws Exception
     * @throws \SebastianBergmann\CodeCoverage\InvalidArgumentException
     * @throws \SebastianBergmann\CodeCoverage\UnintentionallyCoveredCodeException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function run(\PHPUnit\Framework\TestResult $result = null) : \PHPUnit\Framework\TestResult
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
    public function getNumAssertions() : int
    {
    }
    public function getActualOutput() : string
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
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @deprecated see https://github.com/sebastianbergmann/phpunit/issues/4039
 */
final class StandardTestSuiteLoader implements \PHPUnit\Runner\TestSuiteLoader
{
    /**
     * @throws Exception
     */
    public function load(string $suiteClassFile) : \ReflectionClass
    {
    }
    public function reload(\ReflectionClass $aClass) : \ReflectionClass
    {
    }
}
/**
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
     * Order tests by @size annotation 'small', 'medium', 'large'.
     *
     * @var int
     */
    public const ORDER_SIZE = 5;
    public function __construct(?\PHPUnit\Runner\TestResultCache $cache = null)
    {
    }
    /**
     * @throws Exception
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function reorderTestsInSuite(\PHPUnit\Framework\Test $suite, int $order, bool $resolveDependencies, int $orderDefects, bool $isRootTestSuite = true) : void
    {
    }
    public function getOriginalExecutionOrder() : array
    {
    }
    public function getExecutionOrder() : array
    {
    }
}
namespace PHPUnit\Runner\Filter;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract class GroupFilterIterator extends \RecursiveFilterIterator
{
    /**
     * @var string[]
     */
    protected $groupTests = [];
    public function __construct(\RecursiveIterator $iterator, array $groups, \PHPUnit\Framework\TestSuite $suite)
    {
    }
    public function accept() : bool
    {
    }
    protected abstract function doAccept(string $hash);
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ExcludeGroupFilterIterator extends \PHPUnit\Runner\Filter\GroupFilterIterator
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class IncludeGroupFilterIterator extends \PHPUnit\Runner\Filter\GroupFilterIterator
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class NameFilterIterator extends \RecursiveFilterIterator
{
    /**
     * @throws Exception
     */
    public function __construct(\RecursiveIterator $iterator, string $filter)
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function accept() : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Factory
{
    /**
     * @param array|string $args
     *
     * @throws Exception
     */
    public function addFilter(\ReflectionClass $filter, $args) : void
    {
    }
    public function factory(\Iterator $iterator, \PHPUnit\Framework\TestSuite $suite) : \FilterIterator
    {
    }
}
namespace PHPUnit\Framework;

/**
 * @deprecated Use the `TestHook` interfaces instead
 */
interface TestListener
{
    /**
     * An error occurred.
     *
     * @deprecated Use `AfterTestErrorHook::executeAfterTestError` instead
     */
    public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void;
    /**
     * A warning occurred.
     *
     * @deprecated Use `AfterTestWarningHook::executeAfterTestWarning` instead
     */
    public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void;
    /**
     * A failure occurred.
     *
     * @deprecated Use `AfterTestFailureHook::executeAfterTestFailure` instead
     */
    public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void;
    /**
     * Incomplete test.
     *
     * @deprecated Use `AfterIncompleteTestHook::executeAfterIncompleteTest` instead
     */
    public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void;
    /**
     * Risky test.
     *
     * @deprecated Use `AfterRiskyTestHook::executeAfterRiskyTest` instead
     */
    public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void;
    /**
     * Skipped test.
     *
     * @deprecated Use `AfterSkippedTestHook::executeAfterSkippedTest` instead
     */
    public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void;
    /**
     * A test suite started.
     */
    public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void;
    /**
     * A test suite ended.
     */
    public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void;
    /**
     * A test started.
     *
     * @deprecated Use `BeforeTestHook::executeBeforeTest` instead
     */
    public function startTest(\PHPUnit\Framework\Test $test) : void;
    /**
     * A test ended.
     *
     * @deprecated Use `AfterTestHook::executeAfterTest` instead
     */
    public function endTest(\PHPUnit\Framework\Test $test, float $time) : void;
}
namespace PHPUnit\Runner;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestListenerAdapter implements \PHPUnit\Framework\TestListener
{
    public function add(\PHPUnit\Runner\TestHook $hook) : void
    {
    }
    public function startTest(\PHPUnit\Framework\Test $test) : void
    {
    }
    public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
    {
    }
    public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
    {
    }
    public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
    {
    }
    public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
}
interface AfterTestHook extends \PHPUnit\Runner\TestHook
{
    /**
     * This hook will fire after any test, regardless of the result.
     *
     * For more fine grained control, have a look at the other hooks
     * that extend PHPUnit\Runner\Hook.
     */
    public function executeAfterTest(string $test, float $time) : void;
}
interface BeforeTestHook extends \PHPUnit\Runner\TestHook
{
    public function executeBeforeTest(string $test) : void;
}
interface BeforeFirstTestHook extends \PHPUnit\Runner\Hook
{
    public function executeBeforeFirstTest() : void;
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class DefaultTestResultCache implements \Serializable, \PHPUnit\Runner\TestResultCache
{
    /**
     * @var string
     */
    public const DEFAULT_RESULT_CACHE_FILENAME = '.phpunit.result.cache';
    public function __construct(?string $filepath = null)
    {
    }
    /**
     * @throws Exception
     */
    public function persist() : void
    {
    }
    /**
     * @throws Exception
     */
    public function saveToFile() : void
    {
    }
    public function setState(string $testName, int $state) : void
    {
    }
    public function getState(string $testName) : int
    {
    }
    public function setTime(string $testName, float $time) : void
    {
    }
    public function getTime(string $testName) : float
    {
    }
    public function load() : void
    {
    }
    public function copyStateToCache(self $targetCache) : void
    {
    }
    public function clear() : void
    {
    }
    public function serialize() : string
    {
    }
    /**
     * @param string $serialized
     */
    public function unserialize($serialized) : void
    {
    }
}
namespace PHPUnit;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface Exception extends \Throwable
{
}
namespace PHPUnit\Runner;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Exception extends \RuntimeException implements \PHPUnit\Exception
{
}
namespace PHPUnit\Util;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Getopt
{
    /**
     * @throws Exception
     */
    public static function parse(array $args, string $short_options, array $long_options = null) : array
    {
    }
}
final class ExcludeList
{
    public static function addDirectory(string $directory) : void
    {
    }
    /**
     * @throws Exception
     *
     * @return string[]
     */
    public function getExcludedDirectories() : array
    {
    }
    /**
     * @throws Exception
     */
    public function isExcluded(string $file) : bool
    {
    }
}
namespace PHPUnit\Util\Xml;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Validator
{
    public function validate(\DOMDocument $document, string $xsdFilename) : \PHPUnit\Util\Xml\ValidationResult
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
final class SchemaFinder
{
    /**
     * @throws Exception
     */
    public function find(string $version) : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
final class ValidationResult
{
    /**
     * @psalm-param array<int,\LibXMLError> $errors
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
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Loader
{
    /**
     * @throws Exception
     */
    public function loadFile(string $filename, bool $isHtml = false, bool $xinclude = false, bool $strict = false) : \DOMDocument
    {
    }
    /**
     * @throws Exception
     */
    public function load(string $actual, bool $isHtml = false, string $filename = '', bool $xinclude = false, bool $strict = false) : \DOMDocument
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Exception extends \RuntimeException implements \PHPUnit\Exception
{
}
namespace PHPUnit\Util;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Test
{
    /**
     * @var int
     */
    public const UNKNOWN = -1;
    /**
     * @var int
     */
    public const SMALL = 0;
    /**
     * @var int
     */
    public const MEDIUM = 1;
    /**
     * @var int
     */
    public const LARGE = 2;
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function describe(\PHPUnit\Framework\Test $test) : array
    {
    }
    public static function describeAsString(\PHPUnit\Framework\Test $test) : string
    {
    }
    /**
     * @throws CodeCoverageException
     *
     * @return array|bool
     * @psalm-param class-string $className
     */
    public static function getLinesToBeCovered(string $className, string $methodName)
    {
    }
    /**
     * Returns lines of code specified with the @uses annotation.
     *
     * @throws CodeCoverageException
     * @psalm-param class-string $className
     */
    public static function getLinesToBeUsed(string $className, string $methodName) : array
    {
    }
    public static function requiresCodeCoverageDataCollection(\PHPUnit\Framework\TestCase $test) : bool
    {
    }
    /**
     * @throws Exception
     * @psalm-param class-string $className
     */
    public static function getRequirements(string $className, string $methodName) : array
    {
    }
    /**
     * Returns the missing requirements for a test.
     *
     * @throws Exception
     * @throws Warning
     * @psalm-param class-string $className
     */
    public static function getMissingRequirements(string $className, string $methodName) : array
    {
    }
    /**
     * Returns the provided data for a method.
     *
     * @throws Exception
     * @psalm-param class-string $className
     */
    public static function getProvidedData(string $className, string $methodName) : ?array
    {
    }
    /**
     * @psalm-param class-string $className
     */
    public static function parseTestMethodAnnotations(string $className, ?string $methodName = '') : array
    {
    }
    /**
     * @psalm-param class-string $className
     */
    public static function getInlineAnnotations(string $className, string $methodName) : array
    {
    }
    /** @psalm-param class-string $className */
    public static function getBackupSettings(string $className, string $methodName) : array
    {
    }
    /**
     * @psalm-param class-string $className
     *
     * @return ExecutionOrderDependency[]
     */
    public static function getDependencies(string $className, string $methodName) : array
    {
    }
    /** @psalm-param class-string $className */
    public static function getGroups(string $className, ?string $methodName = '') : array
    {
    }
    /** @psalm-param class-string $className */
    public static function getSize(string $className, ?string $methodName) : int
    {
    }
    /** @psalm-param class-string $className */
    public static function getProcessIsolationSettings(string $className, string $methodName) : bool
    {
    }
    /** @psalm-param class-string $className */
    public static function getClassProcessIsolationSettings(string $className, string $methodName) : bool
    {
    }
    /** @psalm-param class-string $className */
    public static function getPreserveGlobalStateSettings(string $className, string $methodName) : ?bool
    {
    }
    /** @psalm-param class-string $className */
    public static function getHookMethods(string $className) : array
    {
    }
    public static function isTestMethod(\ReflectionMethod $method) : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class XmlTestListRenderer
{
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function render(\PHPUnit\Framework\TestSuite $suite) : string
    {
    }
}
namespace PHPUnit\Util\PHP;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract class AbstractPhpProcess
{
    /**
     * @var Runtime
     */
    protected $runtime;
    /**
     * @var bool
     */
    protected $stderrRedirection = false;
    /**
     * @var string
     */
    protected $stdin = '';
    /**
     * @var string
     */
    protected $args = '';
    /**
     * @var array<string, string>
     */
    protected $env = [];
    /**
     * @var int
     */
    protected $timeout = 0;
    public static function factory() : self
    {
    }
    public function __construct()
    {
    }
    /**
     * Defines if should use STDERR redirection or not.
     *
     * Then $stderrRedirection is TRUE, STDERR is redirected to STDOUT.
     */
    public function setUseStderrRedirection(bool $stderrRedirection) : void
    {
    }
    /**
     * Returns TRUE if uses STDERR redirection or FALSE if not.
     */
    public function useStderrRedirection() : bool
    {
    }
    /**
     * Sets the input string to be sent via STDIN.
     */
    public function setStdin(string $stdin) : void
    {
    }
    /**
     * Returns the input string to be sent via STDIN.
     */
    public function getStdin() : string
    {
    }
    /**
     * Sets the string of arguments to pass to the php job.
     */
    public function setArgs(string $args) : void
    {
    }
    /**
     * Returns the string of arguments to pass to the php job.
     */
    public function getArgs() : string
    {
    }
    /**
     * Sets the array of environment variables to start the child process with.
     *
     * @param array<string, string> $env
     */
    public function setEnv(array $env) : void
    {
    }
    /**
     * Returns the array of environment variables to start the child process with.
     */
    public function getEnv() : array
    {
    }
    /**
     * Sets the amount of seconds to wait before timing out.
     */
    public function setTimeout(int $timeout) : void
    {
    }
    /**
     * Returns the amount of seconds to wait before timing out.
     */
    public function getTimeout() : int
    {
    }
    /**
     * Runs a single test in a separate PHP process.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function runTestJob(string $job, \PHPUnit\Framework\Test $test, \PHPUnit\Framework\TestResult $result) : void
    {
    }
    /**
     * Returns the command based into the configurations.
     */
    public function getCommand(array $settings, string $file = null) : string
    {
    }
    /**
     * Runs a single job (PHP code) using a separate PHP process.
     */
    public abstract function runJob(string $job, array $settings = []) : array;
    protected function settingsToParameters(array $settings) : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
class DefaultPhpProcess extends \PHPUnit\Util\PHP\AbstractPhpProcess
{
    /**
     * @var string
     */
    protected $tempFile;
    /**
     * Runs a single job (PHP code) using a separate PHP process.
     *
     * @throws Exception
     */
    public function runJob(string $job, array $settings = []) : array
    {
    }
    /**
     * Returns an array of file handles to be used in place of pipes.
     */
    protected function getHandles() : array
    {
    }
    /**
     * Handles creating the child process and returning the STDOUT and STDERR.
     *
     * @throws Exception
     */
    protected function runProcess(string $job, array $settings) : array
    {
    }
    /**
     * @param resource $pipe
     */
    protected function process($pipe, string $job) : void
    {
    }
    protected function cleanup() : void
    {
    }
    protected function useTemporaryFile() : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @see https://bugs.php.net/bug.php?id=51800
 */
final class WindowsPhpProcess extends \PHPUnit\Util\PHP\DefaultPhpProcess
{
    public function getCommand(array $settings, string $file = null) : string
    {
    }
}
namespace PHPUnit\Util;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class VersionComparisonOperator
{
    public function __construct(string $operator)
    {
    }
    /**
     * @return '<'|'lt'|'<='|'le'|'>'|'gt'|'>='|'ge'|'=='|'='|'eq'|'!='|'<>'|'ne'
     */
    public function asString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Json
{
    /**
     * Prettify json string.
     *
     * @throws \PHPUnit\Framework\Exception
     */
    public static function prettify(string $json) : string
    {
    }
    /**
     * To allow comparison of JSON strings, first process them into a consistent
     * format so that they can be compared as strings.
     *
     * @return array ($error, $canonicalized_json)  The $error parameter is used
     *               to indicate an error decoding the json. This is used to avoid ambiguity
     *               with JSON strings consisting entirely of 'null' or 'false'.
     */
    public static function canonicalize(string $json) : array
    {
    }
}
namespace PHPUnit\Util\Annotation;

/**
 * Reflection information, and therefore DocBlock information, is static within
 * a single PHP process. It is therefore okay to use a Singleton registry here.
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Registry
{
    public static function getInstance() : self
    {
    }
    /**
     * @throws Exception
     * @psalm-param class-string $class
     */
    public function forClassName(string $class) : \PHPUnit\Util\Annotation\DocBlock
    {
    }
    /**
     * @throws Exception
     * @psalm-param class-string $classInHierarchy
     */
    public function forMethod(string $classInHierarchy, string $method) : \PHPUnit\Util\Annotation\DocBlock
    {
    }
}
/**
 * This is an abstraction around a PHPUnit-specific docBlock,
 * allowing us to ask meaningful questions about a specific
 * reflection symbol.
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class DocBlock
{
    /**
     * @todo This constant should be private (it's public because of TestTest::testGetProvidedDataRegEx)
     */
    public const REGEX_DATA_PROVIDER = '/@dataProvider\\s+([a-zA-Z0-9._:-\\\\x7f-\\xff]+)/';
    public static function ofClass(\ReflectionClass $class) : self
    {
    }
    /**
     * @psalm-param class-string $classNameInHierarchy
     */
    public static function ofMethod(\ReflectionMethod $method, string $classNameInHierarchy) : self
    {
    }
    /**
     * @psalm-return array{
     *   __OFFSET: array<string, int>&array{__FILE: string},
     *   setting?: array<string, string>,
     *   extension_versions?: array<string, array{version: string, operator: string}>
     * }&array<
     *   string,
     *   string|array{version: string, operator: string}|array{constraint: string}|array<int|string, string>
     * >
     *
     * @throws Warning if the requirements version constraint is not well-formed
     */
    public function requirements() : array
    {
    }
    /**
     * Returns the provided data for a method.
     *
     * @throws Exception
     */
    public function getProvidedData() : ?array
    {
    }
    /**
     * @psalm-return array<string, array{line: int, value: string}>
     */
    public function getInlineAnnotations() : array
    {
    }
    public function symbolAnnotations() : array
    {
    }
    public function isHookToBeExecutedBeforeClass() : bool
    {
    }
    public function isHookToBeExecutedAfterClass() : bool
    {
    }
    public function isToBeExecutedBeforeTest() : bool
    {
    }
    public function isToBeExecutedAfterTest() : bool
    {
    }
    public function isToBeExecutedAsPreCondition() : bool
    {
    }
    public function isToBeExecutedAsPostCondition() : bool
    {
    }
}
namespace PHPUnit\Util;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class FileLoader
{
    /**
     * Checks if a PHP sourcecode file is readable. The sourcecode file is loaded through the load() method.
     *
     * As a fallback, PHP looks in the directory of the file executing the stream_resolve_include_path function.
     * We do not want to load the Test.php file here, so skip it if it found that.
     * PHP prioritizes the include_path setting, so if the current directory is in there, it will first look in the
     * current working directory.
     *
     * @throws Exception
     */
    public static function checkAndLoad(string $filename) : string
    {
    }
    /**
     * Loads a PHP sourcefile.
     */
    public static function load(string $filename) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class GlobalState
{
    /**
     * @throws Exception
     */
    public static function getIncludedFilesAsString() : string
    {
    }
    /**
     * @param string[] $files
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
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvalidDataSetException extends \RuntimeException implements \PHPUnit\Exception
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ErrorHandler
{
    public static function invokeIgnoringWarnings(callable $callable)
    {
    }
    public function __construct(bool $convertDeprecationsToExceptions, bool $convertErrorsToExceptions, bool $convertNoticesToExceptions, bool $convertWarningsToExceptions)
    {
    }
    public function __invoke(int $errorNumber, string $errorString, string $errorFile, int $errorLine) : bool
    {
    }
    public function register() : void
    {
    }
    public function unregister() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Type
{
    public static function isType(string $type) : bool
    {
    }
    public static function isCloneable(object $object) : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Xml
{
    /**
     * @deprecated Only used by assertEqualXMLStructure()
     */
    public static function import(\DOMElement $element) : \DOMElement
    {
    }
    /**
     * @deprecated Only used by assertEqualXMLStructure()
     */
    public static function removeCharacterDataNodes(\DOMNode $node) : void
    {
    }
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
    /**
     * "Convert" a DOMElement object into a PHP variable.
     */
    public static function xmlToVariable(\DOMElement $element)
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Color
{
    public static function colorize(string $color, string $buffer) : string
    {
    }
    public static function colorizePath(string $path, ?string $prevPath = null, bool $colorizeFilename = false) : string
    {
    }
    public static function dim(string $buffer) : string
    {
    }
    public static function visualizeWhitespace(string $buffer, bool $visualizeEOL = false) : string
    {
    }
}
namespace PHPUnit\TextUI;

interface ResultPrinter extends \PHPUnit\Framework\TestListener
{
    public function printResult(\PHPUnit\Framework\TestResult $result) : void;
    public function write(string $buffer) : void;
}
namespace PHPUnit\Util;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
class Printer
{
    /**
     * @param null|resource|string $out
     *
     * @throws Exception
     */
    public function __construct($out = null)
    {
    }
    public function write(string $buffer) : void
    {
    }
    public function flush() : void
    {
    }
}
namespace PHPUnit\Util\TestDox;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract class ResultPrinter extends \PHPUnit\Util\Printer implements \PHPUnit\TextUI\ResultPrinter
{
    /**
     * @var NamePrettifier
     */
    protected $prettifier;
    /**
     * @var string
     */
    protected $testClass = '';
    /**
     * @var int
     */
    protected $testStatus;
    /**
     * @var array
     */
    protected $tests = [];
    /**
     * @var int
     */
    protected $successful = 0;
    /**
     * @var int
     */
    protected $warned = 0;
    /**
     * @var int
     */
    protected $failed = 0;
    /**
     * @var int
     */
    protected $risky = 0;
    /**
     * @var int
     */
    protected $skipped = 0;
    /**
     * @var int
     */
    protected $incomplete = 0;
    /**
     * @var null|string
     */
    protected $currentTestClassPrettified;
    /**
     * @var null|string
     */
    protected $currentTestMethodPrettified;
    /**
     * @param resource $out
     *
     * @throws \PHPUnit\Framework\Exception
     */
    public function __construct($out = null, array $groups = [], array $excludeGroups = [])
    {
    }
    /**
     * Flush buffer and close output.
     */
    public function flush() : void
    {
    }
    /**
     * An error occurred.
     */
    public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * A warning occurred.
     */
    public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
    {
    }
    /**
     * A failure occurred.
     */
    public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
    {
    }
    /**
     * Incomplete test.
     */
    public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * Risky test.
     */
    public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * Skipped test.
     */
    public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * A testsuite started.
     */
    public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    /**
     * A testsuite ended.
     */
    public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    /**
     * A test started.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function startTest(\PHPUnit\Framework\Test $test) : void
    {
    }
    /**
     * A test ended.
     */
    public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
    {
    }
    protected function doEndClass() : void
    {
    }
    /**
     * Handler for 'start run' event.
     */
    protected function startRun() : void
    {
    }
    /**
     * Handler for 'start class' event.
     */
    protected function startClass(string $name) : void
    {
    }
    /**
     * Handler for 'on test' event.
     */
    protected function onTest(string $name, bool $success = true) : void
    {
    }
    /**
     * Handler for 'end class' event.
     */
    protected function endClass(string $name) : void
    {
    }
    /**
     * Handler for 'end run' event.
     */
    protected function endRun() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TextResultPrinter extends \PHPUnit\Util\TestDox\ResultPrinter
{
    public function printResult(\PHPUnit\Framework\TestResult $result) : void
    {
    }
}
namespace PHPUnit\TextUI;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
class DefaultResultPrinter extends \PHPUnit\Util\Printer implements \PHPUnit\TextUI\ResultPrinter
{
    public const EVENT_TEST_START = 0;
    public const EVENT_TEST_END = 1;
    public const EVENT_TESTSUITE_START = 2;
    public const EVENT_TESTSUITE_END = 3;
    public const COLOR_NEVER = 'never';
    public const COLOR_AUTO = 'auto';
    public const COLOR_ALWAYS = 'always';
    public const COLOR_DEFAULT = self::COLOR_NEVER;
    /**
     * @var int
     */
    protected $column = 0;
    /**
     * @var int
     */
    protected $maxColumn;
    /**
     * @var bool
     */
    protected $lastTestFailed = false;
    /**
     * @var int
     */
    protected $numAssertions = 0;
    /**
     * @var int
     */
    protected $numTests = -1;
    /**
     * @var int
     */
    protected $numTestsRun = 0;
    /**
     * @var int
     */
    protected $numTestsWidth;
    /**
     * @var bool
     */
    protected $colors = false;
    /**
     * @var bool
     */
    protected $debug = false;
    /**
     * @var bool
     */
    protected $verbose = false;
    /**
     * Constructor.
     *
     * @param null|resource|string $out
     * @param int|string           $numberOfColumns
     *
     * @throws Exception
     */
    public function __construct($out = null, bool $verbose = false, string $colors = self::COLOR_DEFAULT, bool $debug = false, $numberOfColumns = 80, bool $reverse = false)
    {
    }
    public function printResult(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    /**
     * An error occurred.
     */
    public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * A failure occurred.
     */
    public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
    {
    }
    /**
     * A warning occurred.
     */
    public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
    {
    }
    /**
     * Incomplete test.
     */
    public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * Risky test.
     */
    public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * Skipped test.
     */
    public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * A testsuite started.
     */
    public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    /**
     * A testsuite ended.
     */
    public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    /**
     * A test started.
     */
    public function startTest(\PHPUnit\Framework\Test $test) : void
    {
    }
    /**
     * A test ended.
     */
    public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
    {
    }
    protected function printDefects(array $defects, string $type) : void
    {
    }
    protected function printDefect(\PHPUnit\Framework\TestFailure $defect, int $count) : void
    {
    }
    protected function printDefectHeader(\PHPUnit\Framework\TestFailure $defect, int $count) : void
    {
    }
    protected function printDefectTrace(\PHPUnit\Framework\TestFailure $defect) : void
    {
    }
    protected function printErrors(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    protected function printFailures(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    protected function printWarnings(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    protected function printIncompletes(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    protected function printRisky(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    protected function printSkipped(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    protected function printHeader(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    protected function printFooter(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    protected function writeProgress(string $progress) : void
    {
    }
    protected function writeNewLine() : void
    {
    }
    /**
     * Formats a buffer with a specified ANSI color sequence if colors are
     * enabled.
     */
    protected function colorizeTextBox(string $color, string $buffer) : string
    {
    }
    /**
     * Writes a buffer out with a color sequence if colors are enabled.
     */
    protected function writeWithColor(string $color, string $buffer, bool $lf = true) : void
    {
    }
    /**
     * Writes progress with a color sequence if colors are enabled.
     */
    protected function writeProgressWithColor(string $color, string $buffer) : void
    {
    }
}
namespace PHPUnit\Util\TestDox;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
class TestDoxPrinter extends \PHPUnit\TextUI\DefaultResultPrinter
{
    /**
     * @var NamePrettifier
     */
    protected $prettifier;
    /**
     * @var int The number of test results received from the TestRunner
     */
    protected $testIndex = 0;
    /**
     * @var int The number of test results already sent to the output
     */
    protected $testFlushIndex = 0;
    /**
     * @var array<int, array> Buffer for test results
     */
    protected $testResults = [];
    /**
     * @var array<string, int> Lookup table for testname to testResults[index]
     */
    protected $testNameResultIndex = [];
    /**
     * @var bool
     */
    protected $enableOutputBuffer = false;
    /**
     * @var array array<string>
     */
    protected $originalExecutionOrder = [];
    /**
     * @var int
     */
    protected $spinState = 0;
    /**
     * @var bool
     */
    protected $showProgress = true;
    /**
     * @param null|resource|string $out
     * @param int|string           $numberOfColumns
     *
     * @throws \PHPUnit\Framework\Exception
     */
    public function __construct($out = null, bool $verbose = false, string $colors = self::COLOR_DEFAULT, bool $debug = false, $numberOfColumns = 80, bool $reverse = false)
    {
    }
    public function setOriginalExecutionOrder(array $order) : void
    {
    }
    public function setShowProgressAnimation(bool $showProgress) : void
    {
    }
    public function printResult(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    public function writeProgress(string $progress) : void
    {
    }
    public function flush() : void
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    protected function registerTestResult(\PHPUnit\Framework\Test $test, ?\Throwable $t, int $status, float $time, bool $verbose) : void
    {
    }
    protected function formatTestName(\PHPUnit\Framework\Test $test) : string
    {
    }
    protected function formatClassName(\PHPUnit\Framework\Test $test) : string
    {
    }
    protected function testHasPassed() : bool
    {
    }
    protected function flushOutputBuffer(bool $forceFlush = false) : void
    {
    }
    protected function showSpinner() : void
    {
    }
    protected function hideSpinner() : void
    {
    }
    protected function drawSpinner() : void
    {
    }
    protected function undrawSpinner() : void
    {
    }
    protected function writeTestResult(array $prevResult, array $result) : void
    {
    }
    protected function getEmptyTestResult() : array
    {
    }
    protected function getTestResultByName(?string $testName) : array
    {
    }
    protected function formatThrowable(\Throwable $t, ?int $status = null) : string
    {
    }
    protected function formatStacktrace(\Throwable $t) : string
    {
    }
    protected function formatTestResultMessage(\Throwable $t, array $result, string $prefix = '│') : string
    {
    }
    protected function prefixLines(string $prefix, string $message) : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
class CliTestDoxPrinter extends \PHPUnit\Util\TestDox\TestDoxPrinter
{
    /**
     * @param null|resource|string $out
     * @param int|string           $numberOfColumns
     *
     * @throws \PHPUnit\Framework\Exception
     */
    public function __construct($out = null, bool $verbose = false, string $colors = self::COLOR_DEFAULT, bool $debug = false, $numberOfColumns = 80, bool $reverse = false)
    {
    }
    public function printResult(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    protected function printHeader(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    protected function formatClassName(\PHPUnit\Framework\Test $test) : string
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    protected function registerTestResult(\PHPUnit\Framework\Test $test, ?\Throwable $t, int $status, float $time, bool $verbose) : void
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    protected function formatTestName(\PHPUnit\Framework\Test $test) : string
    {
    }
    protected function writeTestResult(array $prevResult, array $result) : void
    {
    }
    protected function formatThrowable(\Throwable $t, ?int $status = null) : string
    {
    }
    protected function colorizeMessageAndDiff(string $style, string $buffer) : array
    {
    }
    protected function formatStacktrace(\Throwable $t) : string
    {
    }
    protected function formatTestResultMessage(\Throwable $t, array $result, ?string $prefix = null) : string
    {
    }
    protected function drawSpinner() : void
    {
    }
    protected function undrawSpinner() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class NamePrettifier
{
    public function __construct(bool $useColor = false)
    {
    }
    /**
     * Prettifies the name of a test class.
     *
     * @psalm-param class-string $className
     */
    public function prettifyTestClass(string $className) : string
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function prettifyTestCase(\PHPUnit\Framework\TestCase $test) : string
    {
    }
    public function prettifyDataSet(\PHPUnit\Framework\TestCase $test) : string
    {
    }
    /**
     * Prettifies the name of a test method.
     */
    public function prettifyTestMethod(string $name) : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class XmlResultPrinter extends \PHPUnit\Util\Printer implements \PHPUnit\Framework\TestListener
{
    /**
     * @param resource|string $out
     *
     * @throws Exception
     */
    public function __construct($out = null)
    {
    }
    /**
     * Flush buffer and close output.
     */
    public function flush() : void
    {
    }
    /**
     * An error occurred.
     */
    public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * A warning occurred.
     */
    public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
    {
    }
    /**
     * A failure occurred.
     */
    public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
    {
    }
    /**
     * Incomplete test.
     */
    public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * Risky test.
     */
    public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * Skipped test.
     */
    public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * A test suite started.
     */
    public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    /**
     * A test suite ended.
     */
    public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    /**
     * A test started.
     */
    public function startTest(\PHPUnit\Framework\Test $test) : void
    {
    }
    /**
     * A test ended.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class HtmlResultPrinter extends \PHPUnit\Util\TestDox\ResultPrinter
{
    public function printResult(\PHPUnit\Framework\TestResult $result) : void
    {
    }
}
namespace PHPUnit\Util;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @deprecated
 */
final class XdebugFilterScriptGenerator
{
    public function generate(\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\CodeCoverage $filter) : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Filter
{
    /**
     * @throws Exception
     */
    public static function getFilteredStacktrace(\Throwable $t) : string
    {
    }
}
namespace PHPUnit\Util\Log;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class JUnit extends \PHPUnit\Util\Printer implements \PHPUnit\Framework\TestListener
{
    /**
     * @param null|mixed $out
     */
    public function __construct($out = null, bool $reportRiskyTests = false)
    {
    }
    /**
     * Flush buffer and close output.
     */
    public function flush() : void
    {
    }
    /**
     * An error occurred.
     */
    public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * A warning occurred.
     */
    public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
    {
    }
    /**
     * A failure occurred.
     */
    public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
    {
    }
    /**
     * Incomplete test.
     */
    public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * Risky test.
     */
    public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * Skipped test.
     */
    public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * A testsuite started.
     */
    public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    /**
     * A testsuite ended.
     */
    public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    /**
     * A test started.
     */
    public function startTest(\PHPUnit\Framework\Test $test) : void
    {
    }
    /**
     * A test ended.
     */
    public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
    {
    }
    /**
     * Returns the XML as a string.
     */
    public function getXML() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TeamCity extends \PHPUnit\TextUI\DefaultResultPrinter
{
    public function printResult(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    /**
     * An error occurred.
     */
    public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * A warning occurred.
     */
    public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
    {
    }
    /**
     * A failure occurred.
     */
    public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
    {
    }
    /**
     * Incomplete test.
     */
    public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * Risky test.
     */
    public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * Skipped test.
     */
    public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    public function printIgnoredTest(string $testName, \Throwable $t, float $time) : void
    {
    }
    /**
     * A testsuite started.
     */
    public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    /**
     * A testsuite ended.
     */
    public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    /**
     * A test started.
     */
    public function startTest(\PHPUnit\Framework\Test $test) : void
    {
    }
    /**
     * A test ended.
     */
    public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
    {
    }
}
namespace PHPUnit\Util;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TextTestListRenderer
{
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function render(\PHPUnit\Framework\TestSuite $suite) : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Filesystem
{
    /**
     * Maps class names to source file names.
     *
     *   - PEAR CS:   Foo_Bar_Baz -> Foo/Bar/Baz.php
     *   - Namespace: Foo\Bar\Baz -> Foo/Bar/Baz.php
     */
    public static function classNameToFilename(string $className) : string
    {
    }
    public static function createDirectory(string $directory) : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class RegularExpression
{
    /**
     * @return false|int
     */
    public static function safeMatch(string $pattern, string $subject)
    {
    }
}
/**
 * @deprecated Use ExcludeList instead
 */
final class Blacklist
{
    public static function addDirectory(string $directory) : void
    {
    }
    /**
     * @throws Exception
     *
     * @return string[]
     */
    public function getBlacklistedDirectories() : array
    {
    }
    /**
     * @throws Exception
     */
    public function isBlacklisted(string $file) : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Exception extends \RuntimeException implements \PHPUnit\Exception
{
}
namespace PHPUnit\Framework\MockObject;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvocationHandler
{
    public function __construct(array $configurableMethods, bool $returnValueGeneration)
    {
    }
    public function hasMatchers() : bool
    {
    }
    /**
     * Looks up the match builder with identification $id and returns it.
     *
     * @param string $id The identification of the match builder
     */
    public function lookupMatcher(string $id) : ?\PHPUnit\Framework\MockObject\Matcher
    {
    }
    /**
     * Registers a matcher with the identification $id. The matcher can later be
     * looked up using lookupMatcher() to figure out if it has been invoked.
     *
     * @param string  $id      The identification of the matcher
     * @param Matcher $matcher The builder which is being registered
     *
     * @throws RuntimeException
     */
    public function registerMatcher(string $id, \PHPUnit\Framework\MockObject\Matcher $matcher) : void
    {
    }
    public function expects(\PHPUnit\Framework\MockObject\Rule\InvocationOrder $rule) : \PHPUnit\Framework\MockObject\Builder\InvocationMocker
    {
    }
    /**
     * @throws RuntimeException
     * @throws Exception
     */
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation)
    {
    }
    public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation) : bool
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
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface Exception extends \Throwable
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class BadMethodCallException extends \BadMethodCallException implements \PHPUnit\Framework\MockObject\Exception
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class RuntimeException extends \RuntimeException implements \PHPUnit\Framework\MockObject\Exception
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
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
class Exception extends \RuntimeException implements \PHPUnit\Exception
{
    /**
     * @var array
     */
    protected $serializableTrace;
    public function __construct($message = '', $code = 0, \Throwable $previous = null)
    {
    }
    public function __toString() : string
    {
    }
    public function __sleep() : array
    {
    }
    /**
     * Returns the serializable trace (without 'args').
     */
    public function getSerializableTrace() : array
    {
    }
}
namespace PHPUnit\Framework\MockObject;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ConfigurableMethodsAlreadyInitializedException extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\MockObject\Exception
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class IncompatibleReturnValueException extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\MockObject\Exception
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface MockType
{
    public function generate() : string;
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MockTrait implements \PHPUnit\Framework\MockObject\MockType
{
    public function __construct(string $classCode, string $mockName)
    {
    }
    public function generate() : string
    {
    }
    public function getClassCode() : string
    {
    }
}
/**
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
    public function getMethodNameRule() : \PHPUnit\Framework\MockObject\Rule\MethodName
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
     * @throws RuntimeException
     * @throws ExpectationFailedException
     */
    public function invoked(\PHPUnit\Framework\MockObject\Invocation $invocation)
    {
    }
    /**
     * @throws RuntimeException
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation) : bool
    {
    }
    /**
     * @throws RuntimeException
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function verify() : void
    {
    }
    public function toString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MockMethodSet
{
    public function addMethods(\PHPUnit\Framework\MockObject\MockMethod ...$methods) : void
    {
    }
    /**
     * @return MockMethod[]
     */
    public function asArray() : array
    {
    }
    public function hasMethod(string $methodName) : bool
    {
    }
}
/**
 * @psalm-template MockedType
 */
final class MockBuilder
{
    /**
     * @param string|string[] $type
     *
     * @psalm-param class-string<MockedType>|string|string[] $type
     */
    public function __construct(\PHPUnit\Framework\TestCase $testCase, $type)
    {
    }
    /**
     * Creates a mock object using a fluent interface.
     *
     * @throws RuntimeException
     *
     * @psalm-return MockObject&MockedType
     */
    public function getMock() : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Creates a mock object for an abstract class using a fluent interface.
     *
     * @throws \PHPUnit\Framework\Exception
     * @throws RuntimeException
     *
     * @psalm-return MockObject&MockedType
     */
    public function getMockForAbstractClass() : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Creates a mock object for a trait using a fluent interface.
     *
     * @throws \PHPUnit\Framework\Exception
     * @throws RuntimeException
     *
     * @psalm-return MockObject&MockedType
     */
    public function getMockForTrait() : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Specifies the subset of methods to mock. Default is to mock none of them.
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/pull/3687
     *
     * @return $this
     */
    public function setMethods(?array $methods = null) : self
    {
    }
    /**
     * Specifies the subset of methods to mock, requiring each to exist in the class.
     *
     * @param string[] $methods
     *
     * @throws RuntimeException
     *
     * @return $this
     */
    public function onlyMethods(array $methods) : self
    {
    }
    /**
     * Specifies methods that don't exist in the class which you want to mock.
     *
     * @param string[] $methods
     *
     * @throws RuntimeException
     *
     * @return $this
     */
    public function addMethods(array $methods) : self
    {
    }
    /**
     * Specifies the subset of methods to not mock. Default is to mock all of them.
     */
    public function setMethodsExcept(array $methods = []) : self
    {
    }
    /**
     * Specifies the arguments for the constructor.
     *
     * @return $this
     */
    public function setConstructorArgs(array $args) : self
    {
    }
    /**
     * Specifies the name for the mock class.
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
     * Disables the use of class autoloading while creating the mock object.
     *
     * @return $this
     */
    public function disableAutoload() : self
    {
    }
    /**
     * Enables the use of class autoloading while creating the mock object.
     *
     * @return $this
     */
    public function enableAutoload() : self
    {
    }
    /**
     * Disables the cloning of arguments passed to mocked methods.
     *
     * @return $this
     */
    public function disableArgumentCloning() : self
    {
    }
    /**
     * Enables the cloning of arguments passed to mocked methods.
     *
     * @return $this
     */
    public function enableArgumentCloning() : self
    {
    }
    /**
     * Enables the invocation of the original methods.
     *
     * @return $this
     */
    public function enableProxyingToOriginalMethods() : self
    {
    }
    /**
     * Disables the invocation of the original methods.
     *
     * @return $this
     */
    public function disableProxyingToOriginalMethods() : self
    {
    }
    /**
     * Sets the proxy target.
     *
     * @return $this
     */
    public function setProxyTarget(object $object) : self
    {
    }
    /**
     * @return $this
     */
    public function allowMockingUnknownTypes() : self
    {
    }
    /**
     * @return $this
     */
    public function disallowMockingUnknownTypes() : self
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
namespace PHPUnit\Framework\Constraint;

/**
 * Abstract base class for constraints which can be applied to any value.
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
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function evaluate($other, string $description = '', bool $returnResult = false) : ?bool
    {
    }
    /**
     * Counts the number of constraint elements.
     */
    public function count() : int
    {
    }
    protected function exporter() : \SebastianBergmann\Exporter\Exporter
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * This method can be overridden to implement the evaluation algorithm.
     *
     * @param mixed $other value or object to evaluate
     * @codeCoverageIgnore
     */
    protected function matches($other) : bool
    {
    }
    /**
     * Throws an exception for the given compared value and test description.
     *
     * @param mixed             $other             evaluated value or object
     * @param string            $description       Additional information about the test
     * @param ComparisonFailure $comparisonFailure
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-return never-return
     */
    protected function fail($other, $description, \SebastianBergmann\Comparator\ComparisonFailure $comparisonFailure = null) : void
    {
    }
    /**
     * Return additional failure description where needed.
     *
     * The function can be overridden to provide additional failure
     * information like a diff
     *
     * @param mixed $other evaluated value or object
     */
    protected function additionalFailureDescription($other) : string
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
     *
     * @param mixed $other evaluated value or object
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    protected function failureDescription($other) : string
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
     *
     * @param Operator $operator the $operator of the expression
     * @param mixed    $role     role of $this constraint in the $operator expression
     */
    protected function toStringInContext(\PHPUnit\Framework\Constraint\Operator $operator, $role) : string
    {
    }
    /**
     * Returns the description of the failure when this constraint appears in
     * context of an $operator expression.
     *
     * The purpose of this method is to provide meaningful failue description
     * in context of operators such as LogicalNot. Native PHPUnit constraints
     * are supported out of the box by LogicalNot, but externally developed
     * ones had no way to provide correct messages in this context.
     *
     * The method shall return empty string, when it does not handle
     * customization by itself.
     *
     * @param Operator $operator the $operator of the expression
     * @param mixed    $role     role of $this constraint in the $operator expression
     * @param mixed    $other    evaluated value or object
     */
    protected function failureDescriptionInContext(\PHPUnit\Framework\Constraint\Operator $operator, $role, $other) : string
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
}
namespace PHPUnit\Framework\MockObject;

/**
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
 * @internal This trait is not covered by the backward compatibility promise for PHPUnit
 */
trait UnmockedCloneMethod
{
    public function __clone()
    {
    }
}
/**
 * @internal This trait is not covered by the backward compatibility promise for PHPUnit
 */
trait Api
{
    /**
     * @var ConfigurableMethod[]
     */
    private static $__phpunit_configurableMethods;
    /**
     * @var object
     */
    private $__phpunit_originalObject;
    /**
     * @var bool
     */
    private $__phpunit_returnValueGeneration = true;
    /**
     * @var InvocationHandler
     */
    private $__phpunit_invocationMocker;
    /** @noinspection MagicMethodsValidityInspection */
    public static function __phpunit_initConfigurableMethods(\PHPUnit\Framework\MockObject\ConfigurableMethod ...$configurableMethods) : void
    {
    }
    /** @noinspection MagicMethodsValidityInspection */
    public function __phpunit_setOriginalObject($originalObject) : void
    {
    }
    /** @noinspection MagicMethodsValidityInspection */
    public function __phpunit_setReturnValueGeneration(bool $returnValueGeneration) : void
    {
    }
    /** @noinspection MagicMethodsValidityInspection */
    public function __phpunit_getInvocationHandler() : \PHPUnit\Framework\MockObject\InvocationHandler
    {
    }
    /** @noinspection MagicMethodsValidityInspection */
    public function __phpunit_hasMatchers() : bool
    {
    }
    /** @noinspection MagicMethodsValidityInspection */
    public function __phpunit_verify(bool $unsetInvocationMocker = true) : void
    {
    }
    public function expects(\PHPUnit\Framework\MockObject\Rule\InvocationOrder $matcher) : \PHPUnit\Framework\MockObject\Builder\InvocationMocker
    {
    }
}
/**
 * @internal This trait is not covered by the backward compatibility promise for PHPUnit
 */
trait MockedCloneMethod
{
    public function __clone()
    {
    }
}
/**
 * @internal This trait is not covered by the backward compatibility promise for PHPUnit
 */
trait Method
{
    public function method()
    {
    }
}
/**
 * @method InvocationStubber method($constraint)
 */
interface Stub
{
    public function __phpunit_getInvocationHandler() : \PHPUnit\Framework\MockObject\InvocationHandler;
    public function __phpunit_hasMatchers() : bool;
    public function __phpunit_setReturnValueGeneration(bool $returnValueGeneration) : void;
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Generator
{
    /**
     * Returns a mock object for the specified class.
     *
     * @param null|array $methods
     *
     * @throws RuntimeException
     */
    public function getMock(string $type, $methods = [], array $arguments = [], string $mockClassName = '', bool $callOriginalConstructor = true, bool $callOriginalClone = true, bool $callAutoload = true, bool $cloneArguments = true, bool $callOriginalMethods = false, object $proxyTarget = null, bool $allowMockingUnknownTypes = true, bool $returnValueGeneration = true) : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Returns a mock object for the specified abstract class with all abstract
     * methods of the class mocked.
     *
     * Concrete methods to mock can be specified with the $mockedMethods parameter.
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $originalClassName
     * @psalm-return MockObject&RealInstanceType
     *
     * @throws RuntimeException
     */
    public function getMockForAbstractClass(string $originalClassName, array $arguments = [], string $mockClassName = '', bool $callOriginalConstructor = true, bool $callOriginalClone = true, bool $callAutoload = true, array $mockedMethods = null, bool $cloneArguments = true) : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Returns a mock object for the specified trait with all abstract methods
     * of the trait mocked. Concrete methods to mock can be specified with the
     * `$mockedMethods` parameter.
     *
     * @throws RuntimeException
     */
    public function getMockForTrait(string $traitName, array $arguments = [], string $mockClassName = '', bool $callOriginalConstructor = true, bool $callOriginalClone = true, bool $callAutoload = true, array $mockedMethods = null, bool $cloneArguments = true) : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Returns an object for the specified trait.
     *
     * @throws RuntimeException
     */
    public function getObjectForTrait(string $traitName, string $traitClassName = '', bool $callAutoload = true, bool $callOriginalConstructor = false, array $arguments = []) : object
    {
    }
    public function generate(string $type, array $methods = null, string $mockClassName = '', bool $callOriginalClone = true, bool $callAutoload = true, bool $cloneArguments = true, bool $callOriginalMethods = false) : \PHPUnit\Framework\MockObject\MockClass
    {
    }
    /**
     * @throws RuntimeException
     */
    public function generateClassFromWsdl(string $wsdlFile, string $className, array $methods = [], array $options = []) : string
    {
    }
    /**
     * @throws RuntimeException
     *
     * @return string[]
     */
    public function getClassMethods(string $className) : array
    {
    }
    /**
     * @throws RuntimeException
     *
     * @return MockMethod[]
     */
    public function mockClassMethods(string $className, bool $callOriginalMethods, bool $cloneArguments) : array
    {
    }
    /**
     * @throws RuntimeException
     *
     * @return MockMethod[]
     */
    public function mockInterfaceMethods(string $interfaceName, bool $cloneArguments) : array
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface Verifiable
{
    /**
     * Verifies that the current expectation is valid. If everything is OK the
     * code should just return, if not it must throw an exception.
     *
     * @throws ExpectationFailedException
     */
    public function verify() : void;
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ConfigurableMethod
{
    public function __construct(string $name, \SebastianBergmann\Type\Type $returnType)
    {
    }
    public function getName() : string
    {
    }
    public function mayReturn($value) : bool
    {
    }
    public function getReturnTypeDeclaration() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MockMethod
{
    /**
     * @throws RuntimeException
     */
    public static function fromReflection(\ReflectionMethod $method, bool $callOriginalMethod, bool $cloneArguments) : self
    {
    }
    public static function fromName(string $fullClassName, string $methodName, bool $cloneArguments) : self
    {
    }
    public function __construct(string $className, string $methodName, bool $cloneArguments, string $modifier, string $argumentsForDeclaration, string $argumentsForCall, \SebastianBergmann\Type\Type $returnType, string $reference, bool $callOriginalMethod, bool $static, ?string $deprecation)
    {
    }
    public function getName() : string
    {
    }
    /**
     * @throws RuntimeException
     */
    public function generateCode() : string
    {
    }
    public function getReturnType() : \SebastianBergmann\Type\Type
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MockClass implements \PHPUnit\Framework\MockObject\MockType
{
    public function __construct(string $classCode, string $mockName, array $configurableMethods)
    {
    }
    public function generate() : string
    {
    }
    public function getClassCode() : string
    {
    }
}
namespace PHPUnit\Framework\MockObject\Builder;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface Identity
{
    /**
     * Sets the identification of the expectation to $id.
     *
     * @note The identifier is unique per mock object.
     *
     * @param string $id unique identification of expectation
     */
    public function id($id);
}
/**
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
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface ParametersMatch extends \PHPUnit\Framework\MockObject\Builder\Stub
{
    /**
     * Defines the expectation which must occur before the current is valid.
     *
     * @param string $id the identification of the expectation that should
     *                   occur before this one
     *
     * @return Stub
     */
    public function after($id);
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
     *
     * @return ParametersMatch
     */
    public function with(...$arguments);
    /**
     * Sets a rule which allows any kind of parameters.
     *
     * Some examples:
     * <code>
     * // match any number of parameters
     * $b->withAnyParameters();
     * </code>
     *
     * @return ParametersMatch
     */
    public function withAnyParameters();
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface MethodNameMatch extends \PHPUnit\Framework\MockObject\Builder\ParametersMatch
{
    /**
     * Adds a new method name match and returns the parameter match object for
     * further matching possibilities.
     *
     * @param \PHPUnit\Framework\Constraint\Constraint $name Constraint for matching method, if a string is passed it will use the PHPUnit_Framework_Constraint_IsEqual
     *
     * @return ParametersMatch
     */
    public function method($name);
}
interface InvocationStubber
{
    public function will(\PHPUnit\Framework\MockObject\Stub\Stub $stub) : \PHPUnit\Framework\MockObject\Builder\Identity;
    /** @return self */
    public function willReturn($value, ...$nextValues);
    /**
     * @param mixed $reference
     *
     * @return self
     */
    public function willReturnReference(&$reference);
    /**
     * @param array<int, array<int, mixed>> $valueMap
     *
     * @return self
     */
    public function willReturnMap(array $valueMap);
    /**
     * @param int $argumentIndex
     *
     * @return self
     */
    public function willReturnArgument($argumentIndex);
    /**
     * @param callable $callback
     *
     * @return self
     */
    public function willReturnCallback($callback);
    /** @return self */
    public function willReturnSelf();
    /**
     * @param mixed $values
     *
     * @return self
     */
    public function willReturnOnConsecutiveCalls(...$values);
    /** @return self */
    public function willThrowException(\Throwable $exception);
}
final class InvocationMocker implements \PHPUnit\Framework\MockObject\Builder\InvocationStubber, \PHPUnit\Framework\MockObject\Builder\MethodNameMatch
{
    public function __construct(\PHPUnit\Framework\MockObject\InvocationHandler $handler, \PHPUnit\Framework\MockObject\Matcher $matcher, \PHPUnit\Framework\MockObject\ConfigurableMethod ...$configurableMethods)
    {
    }
    /**
     * @return $this
     */
    public function id($id) : self
    {
    }
    /**
     * @return $this
     */
    public function will(\PHPUnit\Framework\MockObject\Stub\Stub $stub) : \PHPUnit\Framework\MockObject\Builder\Identity
    {
    }
    public function willReturn($value, ...$nextValues) : self
    {
    }
    public function willReturnReference(&$reference) : self
    {
    }
    public function willReturnMap(array $valueMap) : self
    {
    }
    public function willReturnArgument($argumentIndex) : self
    {
    }
    public function willReturnCallback($callback) : self
    {
    }
    public function willReturnSelf() : self
    {
    }
    public function willReturnOnConsecutiveCalls(...$values) : self
    {
    }
    public function willThrowException(\Throwable $exception) : self
    {
    }
    /**
     * @return $this
     */
    public function after($id) : self
    {
    }
    /**
     * @throws RuntimeException
     *
     * @return $this
     */
    public function with(...$arguments) : self
    {
    }
    /**
     * @param array ...$arguments
     *
     * @throws RuntimeException
     *
     * @return $this
     */
    public function withConsecutive(...$arguments) : self
    {
    }
    /**
     * @throws RuntimeException
     *
     * @return $this
     */
    public function withAnyParameters() : self
    {
    }
    /**
     * @param Constraint|string $constraint
     *
     * @throws RuntimeException
     *
     * @return $this
     */
    public function method($constraint) : self
    {
    }
}
namespace PHPUnit\Framework\MockObject;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Invocation implements \PHPUnit\Framework\SelfDescribing
{
    public function __construct(string $className, string $methodName, array $parameters, string $returnType, object $object, bool $cloneObjects = false, bool $proxiedCall = false)
    {
    }
    public function getClassName() : string
    {
    }
    public function getMethodName() : string
    {
    }
    public function getParameters() : array
    {
    }
    /**
     * @throws RuntimeException
     *
     * @return mixed Mocked return value
     */
    public function generateReturnValue()
    {
    }
    public function toString() : string
    {
    }
    public function getObject() : object
    {
    }
}
namespace PHPUnit\Framework\MockObject\Stub;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface Stub extends \PHPUnit\Framework\SelfDescribing
{
    /**
     * Fakes the processing of the invocation $invocation by returning a
     * specific value.
     *
     * @param Invocation $invocation The invocation which was mocked and matched by the current method and argument matchers
     */
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation);
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ReturnCallback implements \PHPUnit\Framework\MockObject\Stub\Stub
{
    public function __construct($callback)
    {
    }
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation)
    {
    }
    public function toString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ReturnStub implements \PHPUnit\Framework\MockObject\Stub\Stub
{
    public function __construct($value)
    {
    }
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation)
    {
    }
    public function toString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ConsecutiveCalls implements \PHPUnit\Framework\MockObject\Stub\Stub
{
    public function __construct(array $stack)
    {
    }
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation)
    {
    }
    public function toString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ReturnSelf implements \PHPUnit\Framework\MockObject\Stub\Stub
{
    /**
     * @throws RuntimeException
     */
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation)
    {
    }
    public function toString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ReturnArgument implements \PHPUnit\Framework\MockObject\Stub\Stub
{
    public function __construct($argumentIndex)
    {
    }
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation)
    {
    }
    public function toString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ReturnValueMap implements \PHPUnit\Framework\MockObject\Stub\Stub
{
    public function __construct(array $valueMap)
    {
    }
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation)
    {
    }
    public function toString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ReturnReference implements \PHPUnit\Framework\MockObject\Stub\Stub
{
    public function __construct(&$reference)
    {
    }
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation)
    {
    }
    public function toString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Exception implements \PHPUnit\Framework\MockObject\Stub\Stub
{
    public function __construct(\Throwable $exception)
    {
    }
    /**
     * @throws Throwable
     */
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation) : void
    {
    }
    public function toString() : string
    {
    }
}
namespace PHPUnit\Framework\MockObject\Rule;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract class InvocationOrder implements \PHPUnit\Framework\SelfDescribing, \PHPUnit\Framework\MockObject\Verifiable
{
    public function getInvocationCount() : int
    {
    }
    public function hasBeenInvoked() : bool
    {
    }
    public final function invoked(\PHPUnit\Framework\MockObject\Invocation $invocation)
    {
    }
    public abstract function matches(\PHPUnit\Framework\MockObject\Invocation $invocation) : bool;
    protected abstract function invokedDo(\PHPUnit\Framework\MockObject\Invocation $invocation);
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvokedAtLeastCount extends \PHPUnit\Framework\MockObject\Rule\InvocationOrder
{
    /**
     * @param int $requiredInvocations
     */
    public function __construct($requiredInvocations)
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
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvokedAtMostCount extends \PHPUnit\Framework\MockObject\Rule\InvocationOrder
{
    /**
     * @param int $allowedInvocations
     */
    public function __construct($allowedInvocations)
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
interface ParametersRule extends \PHPUnit\Framework\SelfDescribing, \PHPUnit\Framework\MockObject\Verifiable
{
    /**
     * @throws ExpectationFailedException if the invocation violates the rule
     */
    public function apply(\PHPUnit\Framework\MockObject\Invocation $invocation) : void;
    public function verify() : void;
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Parameters implements \PHPUnit\Framework\MockObject\Rule\ParametersRule
{
    /**
     * @throws \PHPUnit\Framework\Exception
     */
    public function __construct(array $parameters)
    {
    }
    public function toString() : string
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
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function verify() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class AnyParameters implements \PHPUnit\Framework\MockObject\Rule\ParametersRule
{
    public function toString() : string
    {
    }
    public function apply(\PHPUnit\Framework\MockObject\Invocation $invocation) : void
    {
    }
    public function verify() : void
    {
    }
}
/**
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
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvokedCount extends \PHPUnit\Framework\MockObject\Rule\InvocationOrder
{
    /**
     * @param int $expectedCount
     */
    public function __construct($expectedCount)
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
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MethodName
{
    /**
     * @param Constraint|string $constraint
     *
     * @throws InvalidArgumentException
     */
    public function __construct($constraint)
    {
    }
    public function toString() : string
    {
    }
    /**
     * @throws \PHPUnit\Framework\ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation) : bool
    {
    }
    public function matchesName(string $methodName) : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4297
 * @codeCoverageIgnore
 */
final class InvokedAtIndex extends \PHPUnit\Framework\MockObject\Rule\InvocationOrder
{
    /**
     * @param int $sequenceIndex
     */
    public function __construct($sequenceIndex)
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
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ConsecutiveParameters implements \PHPUnit\Framework\MockObject\Rule\ParametersRule
{
    /**
     * @throws \PHPUnit\Framework\Exception
     */
    public function __construct(array $parameterGroups)
    {
    }
    public function toString() : string
    {
    }
    /**
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function apply(\PHPUnit\Framework\MockObject\Invocation $invocation) : void
    {
    }
    /**
     * @throws \PHPUnit\Framework\ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function verify() : void
    {
    }
}
namespace PHPUnit\Framework\MockObject;

/**
 * @method BuilderInvocationMocker method($constraint)
 */
interface MockObject extends \PHPUnit\Framework\MockObject\Stub
{
    public function __phpunit_setOriginalObject($originalObject) : void;
    public function __phpunit_verify(bool $unsetInvocationMocker = true) : void;
    public function expects(\PHPUnit\Framework\MockObject\Rule\InvocationOrder $invocationRule) : \PHPUnit\Framework\MockObject\Builder\InvocationMocker;
}
namespace PHPUnit\Framework\Constraint;

final class ExceptionMessageRegularExpression extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(string $expected)
    {
    }
    public function toString() : string
    {
    }
}
final class ExceptionCode extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @param int|string $expected
     */
    public function __construct($expected)
    {
    }
    public function toString() : string
    {
    }
}
final class ExceptionMessage extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(string $expected)
    {
    }
    public function toString() : string
    {
    }
}
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
 * Provides human readable messages for each JSON error.
 */
final class JsonMatchesErrorMessageProvider
{
    /**
     * Translates JSON error to a human readable string.
     */
    public static function determineJsonError(string $error, string $prefix = '') : ?string
    {
    }
    /**
     * Translates a given type to a human readable message prefix.
     */
    public static function translateTypeToPrefix(string $type) : string
    {
    }
}
/**
 * Constraint that accepts any input value.
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
    public function evaluate($other, string $description = '', bool $returnResult = false) : ?bool
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
 * Constraint that asserts that the value it is evaluated for is of a
 * specified type.
 *
 * The expected value is passed in the constructor.
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
     * @throws \PHPUnit\Framework\Exception
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
 * Constraint that accepts null.
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
 * Constraint that asserts that the object it is evaluated for is an instance
 * of a given class.
 *
 * The expected class name is passed in the constructor.
 */
final class IsInstanceOf extends \PHPUnit\Framework\Constraint\Constraint
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
 * Constraint that accepts false.
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
 * Constraint that accepts true.
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
 * Constraint that asserts that the array it is evaluated for has a given key.
 *
 * Uses array_key_exists() to check if the key is found in the input array, if
 * not found the evaluation fails.
 *
 * The array key is passed in the constructor.
 */
final class ArrayHasKey extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @param int|string $key
     */
    public function __construct($key)
    {
    }
    /**
     * Returns a string representation of the constraint.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function toString() : string
    {
    }
}
/**
 * Constraint that asserts that the Traversable it is applied to contains
 * a given value.
 */
abstract class TraversableContains extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct($value)
    {
    }
    /**
     * Returns a string representation of the constraint.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function toString() : string
    {
    }
    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * @param mixed $other evaluated value or object
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    protected function failureDescription($other) : string
    {
    }
    protected function value()
    {
    }
}
/**
 * Constraint that asserts that the Traversable it is applied to contains
 * a given value (using non-strict comparison).
 */
final class TraversableContainsEqual extends \PHPUnit\Framework\Constraint\TraversableContains
{
}
/**
 * Constraint that asserts that the Traversable it is applied to contains
 * only values of a given type.
 */
final class TraversableContainsOnly extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @throws \PHPUnit\Framework\Exception
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
     * @param mixed|Traversable $other
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function evaluate($other, string $description = '', bool $returnResult = false) : ?bool
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
 * Constraint that asserts that the Traversable it is applied to contains
 * a given value (using strict comparison).
 */
final class TraversableContainsIdentical extends \PHPUnit\Framework\Constraint\TraversableContains
{
}
/**
 * Constraint that asserts that the string it is evaluated for ends with a given
 * suffix.
 */
final class StringEndsWith extends \PHPUnit\Framework\Constraint\Constraint
{
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
 * Constraint that asserts that a string is valid JSON.
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
 * Constraint that asserts that the string it is evaluated for contains
 * a given string.
 *
 * Uses mb_strpos() to find the position of the string in the input, if not
 * found the evaluation fails.
 *
 * The sub-string is passed in the constructor.
 */
final class StringContains extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(string $string, bool $ignoreCase = false)
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
 * Constraint that asserts that the string it is evaluated for matches
 * a regular expression.
 *
 * Checks a given value using the Perl Compatible Regular Expression extension
 * in PHP. The pattern is matched by executing preg_match().
 *
 * The pattern string passed in the constructor.
 */
class RegularExpression extends \PHPUnit\Framework\Constraint\Constraint
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
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
}
final class StringMatchesFormatDescription extends \PHPUnit\Framework\Constraint\RegularExpression
{
    public function __construct(string $string)
    {
    }
}
/**
 * Constraint that asserts that the string it is evaluated for begins with a
 * given prefix.
 */
final class StringStartsWith extends \PHPUnit\Framework\Constraint\Constraint
{
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
    protected function checkConstraint($constraint) : \PHPUnit\Framework\Constraint\Constraint
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
 * Abstract base class for binary operators.
 *
 * Binary operator, as formally defined, accepts two operands. A BinaryOperator
 * object, however, accepts arbitrary number of arguments for backward
 * compatibility. The object can actually be thought to be an expression
 * with zero or more repetitions of a given binary operator. The expected
 * behavior for typical implementation of a BinaryOperator is the following:
 *
 * - when created with no arguments, it shall evaluate to false unconditionally,
 * - when created with one argument, it is a degenerate operator, which just
 *   returns the result of its single operand constraint,
 * - with two arguments, it shall follow its classical definition,
 * - with more than two arguments, it shall resemble repeated application of
 *   the same operator, for example $1 or $2 or $3.
 */
abstract class BinaryOperator extends \PHPUnit\Framework\Constraint\Operator
{
    public static function fromConstraints(\PHPUnit\Framework\Constraint\Constraint ...$constraints) : self
    {
    }
    /**
     * @param mixed[] $constraints
     */
    public function setConstraints(array $constraints) : void
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
     * Returns the nested constraints.
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
final class LogicalAnd extends \PHPUnit\Framework\Constraint\BinaryOperator
{
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
abstract class UnaryOperator extends \PHPUnit\Framework\Constraint\Operator
{
    /**
     * @param Constraint|mixed $constraint
     */
    public function __construct($constraint)
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
     *
     * @param mixed $other evaluated value or object
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    protected function failureDescription($other) : string
    {
    }
    /**
     * Transforms string returned by the memeber constraint's toString() or
     * failureDescription() such that it reflects constraint's participation in
     * this expression.
     *
     * The method may be overwritten in a subclass to apply default
     * transformation in case the operand constraint does not provide its own
     * custom strings via toStringInContext() or failureDescriptionInContext().
     *
     * @param string $string the string to be transformed
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
final class LogicalOr extends \PHPUnit\Framework\Constraint\BinaryOperator
{
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
     *
     * @param mixed $other value or object to evaluate
     */
    public function matches($other) : bool
    {
    }
}
final class LogicalXor extends \PHPUnit\Framework\Constraint\BinaryOperator
{
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
     * @param mixed $other value or object to evaluate
     */
    public function matches($other) : bool
    {
    }
}
/**
 * Constraint that accepts finite.
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
 * Constraint that accepts infinite.
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
 * Constraint that accepts nan.
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
final class IsEqualCanonicalizing extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct($value)
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
    public function evaluate($other, string $description = '', bool $returnResult = false) : ?bool
    {
    }
    /**
     * Returns a string representation of the constraint.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function toString() : string
    {
    }
}
final class IsEqualWithDelta extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct($value, float $delta)
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
    public function evaluate($other, string $description = '', bool $returnResult = false) : ?bool
    {
    }
    /**
     * Returns a string representation of the constraint.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function toString() : string
    {
    }
}
final class IsEqualIgnoringCase extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct($value)
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
    public function evaluate($other, string $description = '', bool $returnResult = false) : ?bool
    {
    }
    /**
     * Returns a string representation of the constraint.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function toString() : string
    {
    }
}
/**
 * Constraint that checks if one value is equal to another.
 *
 * Equality is checked with PHP's == operator, the operator is explained in
 * detail at {@url https://php.net/manual/en/types.comparisons.php}.
 * Two values are equal if they have the same value disregarding type.
 *
 * The expected value is passed in the constructor.
 */
final class IsEqual extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct($value, float $delta = 0.0, bool $canonicalize = false, bool $ignoreCase = false)
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
     *
     * @return bool
     */
    public function evaluate($other, string $description = '', bool $returnResult = false) : ?bool
    {
    }
    /**
     * Returns a string representation of the constraint.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function toString() : string
    {
    }
}
/**
 * Constraint that asserts that the class it is evaluated for has a given
 * attribute.
 *
 * The attribute name is passed in the constructor.
 */
class ClassHasAttribute extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(string $attributeName)
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * @param mixed $other evaluated value or object
     */
    protected function failureDescription($other) : string
    {
    }
    protected function attributeName() : string
    {
    }
}
/**
 * Constraint that asserts that the class it is evaluated for has a given
 * static attribute.
 *
 * The attribute name is passed in the constructor.
 */
final class ClassHasStaticAttribute extends \PHPUnit\Framework\Constraint\ClassHasAttribute
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * Constraint that asserts that the object it is evaluated for has a given
 * attribute.
 *
 * The attribute name is passed in the constructor.
 */
final class ObjectHasAttribute extends \PHPUnit\Framework\Constraint\ClassHasAttribute
{
}
/**
 * Asserts whether or not two JSON objects are equal.
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
 * Constraint that asserts that one value is identical to another.
 *
 * Identical check is performed with PHP's === operator, the operator is
 * explained in detail at
 * {@url https://php.net/manual/en/types.comparisons.php}.
 * Two values are identical if they have the same value and are of the same
 * type.
 *
 * The expected value is passed in the constructor.
 */
final class IsIdentical extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct($value)
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
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function evaluate($other, string $description = '', bool $returnResult = false) : ?bool
    {
    }
    /**
     * Returns a string representation of the constraint.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function toString() : string
    {
    }
}
/**
 * Constraint that checks whether a variable is empty().
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
    protected function matches($other) : bool
    {
    }
    /**
     * @throws Exception
     */
    protected function getCountOf($other) : ?int
    {
    }
    /**
     * Returns the total number of iterations from a generator.
     * This will fully exhaust the generator.
     */
    protected function getCountOfGenerator(\Generator $generator) : int
    {
    }
    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * @param mixed $other evaluated value or object
     */
    protected function failureDescription($other) : string
    {
    }
}
final class SameSize extends \PHPUnit\Framework\Constraint\Count
{
    public function __construct(iterable $expected)
    {
    }
}
/**
 * Constraint that asserts that the value it is evaluated for is greater
 * than a given value.
 */
final class GreaterThan extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @param float|int $value
     */
    public function __construct($value)
    {
    }
    /**
     * Returns a string representation of the constraint.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function toString() : string
    {
    }
}
/**
 * Constraint that asserts that the value it is evaluated for is less than
 * a given value.
 */
final class LessThan extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @param float|int $value
     */
    public function __construct($value)
    {
    }
    /**
     * Returns a string representation of the constraint.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function toString() : string
    {
    }
}
/**
 * Constraint that evaluates against a specified closure.
 */
final class Callback extends \PHPUnit\Framework\Constraint\Constraint
{
    public function __construct(callable $callback)
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
 * Constraint that checks if the file(name) that it is evaluated for exists.
 *
 * The file path to check is passed as $other in evaluate().
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
 * Constraint that checks if the file/dir(name) that it is evaluated for is writable.
 *
 * The file path to check is passed as $other in evaluate().
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
 * Constraint that checks if the file/dir(name) that it is evaluated for is readable.
 *
 * The file path to check is passed as $other in evaluate().
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
 * Constraint that checks if the directory(name) that it is evaluated for exists.
 *
 * The file path to check is passed as $other in evaluate().
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
namespace PHPUnit\Framework;

/**
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
 * Exception for expectations which failed their check.
 *
 * The exception contains the error message and optionally a
 * SebastianBergmann\Comparator\ComparisonFailure which is used to
 * generate diff output of the failed expectations.
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ExpectationFailedException extends \PHPUnit\Framework\AssertionFailedError
{
    public function __construct(string $message, \SebastianBergmann\Comparator\ComparisonFailure $comparisonFailure = null, \Exception $previous = null)
    {
    }
    public function getComparisonFailure() : ?\SebastianBergmann\Comparator\ComparisonFailure
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
class SyntheticError extends \PHPUnit\Framework\AssertionFailedError
{
    /**
     * The synthetic file.
     *
     * @var string
     */
    protected $syntheticFile = '';
    /**
     * The synthetic line number.
     *
     * @var int
     */
    protected $syntheticLine = 0;
    /**
     * The synthetic trace.
     *
     * @var array
     */
    protected $syntheticTrace = [];
    public function __construct(string $message, int $code, string $file, int $line, array $trace)
    {
    }
    public function getSyntheticFile() : string
    {
    }
    public function getSyntheticLine() : int
    {
    }
    public function getSyntheticTrace() : array
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface SkippedTest extends \Throwable
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class SyntheticSkippedError extends \PHPUnit\Framework\SyntheticError implements \PHPUnit\Framework\SkippedTest
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
class RiskyTestError extends \PHPUnit\Framework\AssertionFailedError
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MissingCoversAnnotationException extends \PHPUnit\Framework\RiskyTestError
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvalidDataProviderException extends \PHPUnit\Framework\Exception
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class NoChildTestSuiteException extends \PHPUnit\Framework\Exception
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvalidArgumentException extends \PHPUnit\Framework\Exception
{
    public static function create(int $argument, string $type) : self
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class SkippedTestSuiteError extends \PHPUnit\Framework\AssertionFailedError implements \PHPUnit\Framework\SkippedTest
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface IncompleteTest extends \Throwable
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class IncompleteTestError extends \PHPUnit\Framework\AssertionFailedError implements \PHPUnit\Framework\IncompleteTest
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
class CodeCoverageException extends \PHPUnit\Framework\Exception
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvalidCoversTargetException extends \PHPUnit\Framework\CodeCoverageException
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class OutputError extends \PHPUnit\Framework\AssertionFailedError
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Warning extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\SelfDescribing
{
    /**
     * Wrapper for getMessage() which is declared as final.
     */
    public function toString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class PHPTAssertionFailedError extends \PHPUnit\Framework\SyntheticError
{
    public function __construct(string $message, int $code, string $file, int $line, array $trace, string $diff)
    {
    }
    public function getDiff() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class SkippedTestError extends \PHPUnit\Framework\AssertionFailedError implements \PHPUnit\Framework\SkippedTest
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class UnintentionallyCoveredCodeError extends \PHPUnit\Framework\RiskyTestError
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CoveredCodeNotExecutedException extends \PHPUnit\Framework\RiskyTestError
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
class TestSuite implements \IteratorAggregate, \PHPUnit\Framework\Reorderable, \PHPUnit\Framework\SelfDescribing, \PHPUnit\Framework\Test
{
    /**
     * Enable or disable the backup and restoration of the $GLOBALS array.
     *
     * @var bool
     */
    protected $backupGlobals;
    /**
     * Enable or disable the backup and restoration of static attributes.
     *
     * @var bool
     */
    protected $backupStaticAttributes;
    /**
     * @var bool
     */
    protected $runTestInSeparateProcess = false;
    /**
     * The name of the test suite.
     *
     * @var string
     */
    protected $name = '';
    /**
     * The test groups of the test suite.
     *
     * @var array
     */
    protected $groups = [];
    /**
     * The tests in the test suite.
     *
     * @var Test[]
     */
    protected $tests = [];
    /**
     * The number of tests in the test suite.
     *
     * @var int
     */
    protected $numTests = -1;
    /**
     * @var bool
     */
    protected $testCase = false;
    /**
     * @var string[]
     */
    protected $foundClasses = [];
    /**
     * @var null|list<ExecutionOrderDependency>
     */
    protected $providedTests;
    /**
     * @var null|list<ExecutionOrderDependency>
     */
    protected $requiredTests;
    /**
     * Constructs a new TestSuite.
     *
     *   - PHPUnit\Framework\TestSuite() constructs an empty TestSuite.
     *
     *   - PHPUnit\Framework\TestSuite(ReflectionClass) constructs a
     *     TestSuite from the given class.
     *
     *   - PHPUnit\Framework\TestSuite(ReflectionClass, String)
     *     constructs a TestSuite from the given class with the given
     *     name.
     *
     *   - PHPUnit\Framework\TestSuite(String) either constructs a
     *     TestSuite from the given class (if the passed string is the
     *     name of an existing class) or constructs an empty TestSuite
     *     with the given name.
     *
     * @param ReflectionClass|string $theClass
     *
     * @throws Exception
     */
    public function __construct($theClass = '', string $name = '')
    {
    }
    /**
     * Returns a string representation of the test suite.
     */
    public function toString() : string
    {
    }
    /**
     * Adds a test to the suite.
     *
     * @param array $groups
     */
    public function addTest(\PHPUnit\Framework\Test $test, $groups = []) : void
    {
    }
    /**
     * Adds the tests from the given class to the suite.
     *
     * @param object|string $testClass
     *
     * @throws Exception
     */
    public function addTestSuite($testClass) : void
    {
    }
    public function addWarning(string $warning) : void
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
     * @throws Exception
     */
    public function addTestFile(string $filename) : void
    {
    }
    /**
     * Wrapper for addTestFile() that adds multiple test files.
     *
     * @throws Exception
     */
    public function addTestFiles(iterable $fileNames) : void
    {
    }
    /**
     * Counts the number of test cases that will be run by this test.
     *
     * @todo refactor usage of numTests in DefaultResultPrinter
     */
    public function count() : int
    {
    }
    /**
     * Returns the name of the suite.
     */
    public function getName() : string
    {
    }
    /**
     * Returns the test groups of the suite.
     */
    public function getGroups() : array
    {
    }
    public function getGroupDetails() : array
    {
    }
    /**
     * Set tests groups of the test case.
     */
    public function setGroupDetails(array $groups) : void
    {
    }
    /**
     * Runs the tests and collects their result in a TestResult.
     *
     * @throws \PHPUnit\Framework\CodeCoverageException
     * @throws \SebastianBergmann\CodeCoverage\InvalidArgumentException
     * @throws \SebastianBergmann\CodeCoverage\UnintentionallyCoveredCodeException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Warning
     */
    public function run(\PHPUnit\Framework\TestResult $result = null) : \PHPUnit\Framework\TestResult
    {
    }
    public function setRunTestInSeparateProcess(bool $runTestInSeparateProcess) : void
    {
    }
    public function setName(string $name) : void
    {
    }
    /**
     * Returns the tests as an enumeration.
     *
     * @return Test[]
     */
    public function tests() : array
    {
    }
    /**
     * Set tests of the test suite.
     *
     * @param Test[] $tests
     */
    public function setTests(array $tests) : void
    {
    }
    /**
     * Mark the test suite as skipped.
     *
     * @param string $message
     *
     * @throws SkippedTestSuiteError
     *
     * @psalm-return never-return
     */
    public function markTestSuiteSkipped($message = '') : void
    {
    }
    /**
     * @param bool $beStrictAboutChangesToGlobalState
     */
    public function setBeStrictAboutChangesToGlobalState($beStrictAboutChangesToGlobalState) : void
    {
    }
    /**
     * @param bool $backupGlobals
     */
    public function setBackupGlobals($backupGlobals) : void
    {
    }
    /**
     * @param bool $backupStaticAttributes
     */
    public function setBackupStaticAttributes($backupStaticAttributes) : void
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
     * @psalm-return array<int,string>
     */
    public function warnings() : array
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
     * Creates a default TestResult object.
     */
    protected function createResult() : \PHPUnit\Framework\TestResult
    {
    }
    /**
     * @throws Exception
     */
    protected function addTestMethod(\ReflectionClass $class, \ReflectionMethod $method) : void
    {
    }
}
/**
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
     * Returns the size of the each test created using the data provider(s).
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function getSize() : int
    {
    }
}
/**
 * A set of assertion methods.
 */
abstract class Assert
{
    /**
     * Asserts that an array has a specified key.
     *
     * @param int|string        $key
     * @param array|ArrayAccess $array
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertArrayHasKey($key, $array, string $message = '') : void
    {
    }
    /**
     * Asserts that an array does not have a specified key.
     *
     * @param int|string        $key
     * @param array|ArrayAccess $array
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertArrayNotHasKey($key, $array, string $message = '') : void
    {
    }
    /**
     * Asserts that a haystack contains a needle.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertContains($needle, iterable $haystack, string $message = '') : void
    {
    }
    public static function assertContainsEquals($needle, iterable $haystack, string $message = '') : void
    {
    }
    /**
     * Asserts that a haystack does not contain a needle.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertNotContains($needle, iterable $haystack, string $message = '') : void
    {
    }
    public static function assertNotContainsEquals($needle, iterable $haystack, string $message = '') : void
    {
    }
    /**
     * Asserts that a haystack contains only values of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertContainsOnly(string $type, iterable $haystack, ?bool $isNativeType = null, string $message = '') : void
    {
    }
    /**
     * Asserts that a haystack contains only instances of a given class name.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertContainsOnlyInstancesOf(string $className, iterable $haystack, string $message = '') : void
    {
    }
    /**
     * Asserts that a haystack does not contain only values of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertNotContainsOnly(string $type, iterable $haystack, ?bool $isNativeType = null, string $message = '') : void
    {
    }
    /**
     * Asserts the number of elements of an array, Countable or Traversable.
     *
     * @param Countable|iterable $haystack
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertCount(int $expectedCount, $haystack, string $message = '') : void
    {
    }
    /**
     * Asserts the number of elements of an array, Countable or Traversable.
     *
     * @param Countable|iterable $haystack
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertNotCount(int $expectedCount, $haystack, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables are equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertEquals($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables are equal (canonicalizing).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertEqualsCanonicalizing($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables are equal (ignoring case).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertEqualsIgnoringCase($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables are equal (with delta).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertEqualsWithDelta($expected, $actual, float $delta, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables are not equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertNotEquals($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables are not equal (canonicalizing).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertNotEqualsCanonicalizing($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables are not equal (ignoring case).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertNotEqualsIgnoringCase($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables are not equal (with delta).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertNotEqualsWithDelta($expected, $actual, float $delta, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is empty.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert empty $actual
     */
    public static function assertEmpty($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not empty.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !empty $actual
     */
    public static function assertNotEmpty($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a value is greater than another value.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertGreaterThan($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a value is greater than or equal to another value.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertGreaterThanOrEqual($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a value is smaller than another value.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertLessThan($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a value is smaller than or equal to another value.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertLessThanOrEqual($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of one file is equal to the contents of another
     * file.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertFileEquals(string $expected, string $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of one file is equal to the contents of another
     * file (canonicalizing).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertFileEqualsCanonicalizing(string $expected, string $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of one file is equal to the contents of another
     * file (ignoring case).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertFileEqualsIgnoringCase(string $expected, string $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of one file is not equal to the contents of
     * another file.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertFileNotEquals(string $expected, string $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of one file is not equal to the contents of another
     * file (canonicalizing).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertFileNotEqualsCanonicalizing(string $expected, string $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of one file is not equal to the contents of another
     * file (ignoring case).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertFileNotEqualsIgnoringCase(string $expected, string $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of a string is equal
     * to the contents of a file.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringEqualsFile(string $expectedFile, string $actualString, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of a string is equal
     * to the contents of a file (canonicalizing).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringEqualsFileCanonicalizing(string $expectedFile, string $actualString, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of a string is equal
     * to the contents of a file (ignoring case).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringEqualsFileIgnoringCase(string $expectedFile, string $actualString, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of a string is not equal
     * to the contents of a file.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringNotEqualsFile(string $expectedFile, string $actualString, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of a string is not equal
     * to the contents of a file (canonicalizing).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringNotEqualsFileCanonicalizing(string $expectedFile, string $actualString, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of a string is not equal
     * to the contents of a file (ignoring case).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringNotEqualsFileIgnoringCase(string $expectedFile, string $actualString, string $message = '') : void
    {
    }
    /**
     * Asserts that a file/dir is readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertIsReadable(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a file/dir exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertIsNotReadable(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a file/dir exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4062
     */
    public static function assertNotIsReadable(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a file/dir exists and is writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertIsWritable(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a file/dir exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertIsNotWritable(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a file/dir exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4065
     */
    public static function assertNotIsWritable(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory exists.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertDirectoryExists(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory does not exist.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertDirectoryDoesNotExist(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory does not exist.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4068
     */
    public static function assertDirectoryNotExists(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory exists and is readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertDirectoryIsReadable(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertDirectoryIsNotReadable(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4071
     */
    public static function assertDirectoryNotIsReadable(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory exists and is writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertDirectoryIsWritable(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertDirectoryIsNotWritable(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4074
     */
    public static function assertDirectoryNotIsWritable(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a file exists.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertFileExists(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a file does not exist.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertFileDoesNotExist(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a file does not exist.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4077
     */
    public static function assertFileNotExists(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a file exists and is readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertFileIsReadable(string $file, string $message = '') : void
    {
    }
    /**
     * Asserts that a file exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertFileIsNotReadable(string $file, string $message = '') : void
    {
    }
    /**
     * Asserts that a file exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4080
     */
    public static function assertFileNotIsReadable(string $file, string $message = '') : void
    {
    }
    /**
     * Asserts that a file exists and is writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertFileIsWritable(string $file, string $message = '') : void
    {
    }
    /**
     * Asserts that a file exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertFileIsNotWritable(string $file, string $message = '') : void
    {
    }
    /**
     * Asserts that a file exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4083
     */
    public static function assertFileNotIsWritable(string $file, string $message = '') : void
    {
    }
    /**
     * Asserts that a condition is true.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert true $condition
     */
    public static function assertTrue($condition, string $message = '') : void
    {
    }
    /**
     * Asserts that a condition is not true.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !true $condition
     */
    public static function assertNotTrue($condition, string $message = '') : void
    {
    }
    /**
     * Asserts that a condition is false.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert false $condition
     */
    public static function assertFalse($condition, string $message = '') : void
    {
    }
    /**
     * Asserts that a condition is not false.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !false $condition
     */
    public static function assertNotFalse($condition, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is null.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert null $actual
     */
    public static function assertNull($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not null.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !null $actual
     */
    public static function assertNotNull($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is finite.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertFinite($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is infinite.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertInfinite($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is nan.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertNan($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a class has a specified attribute.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertClassHasAttribute(string $attributeName, string $className, string $message = '') : void
    {
    }
    /**
     * Asserts that a class does not have a specified attribute.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertClassNotHasAttribute(string $attributeName, string $className, string $message = '') : void
    {
    }
    /**
     * Asserts that a class has a specified static attribute.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertClassHasStaticAttribute(string $attributeName, string $className, string $message = '') : void
    {
    }
    /**
     * Asserts that a class does not have a specified static attribute.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertClassNotHasStaticAttribute(string $attributeName, string $className, string $message = '') : void
    {
    }
    /**
     * Asserts that an object has a specified attribute.
     *
     * @param object $object
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertObjectHasAttribute(string $attributeName, $object, string $message = '') : void
    {
    }
    /**
     * Asserts that an object does not have a specified attribute.
     *
     * @param object $object
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertObjectNotHasAttribute(string $attributeName, $object, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables have the same type and value.
     * Used on objects, it asserts that two variables reference
     * the same object.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-template ExpectedType
     * @psalm-param ExpectedType $expected
     * @psalm-assert =ExpectedType $actual
     */
    public static function assertSame($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables do not have the same type and value.
     * Used on objects, it asserts that two variables do not reference
     * the same object.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertNotSame($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     *
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $expected
     * @psalm-assert ExpectedType $actual
     */
    public static function assertInstanceOf(string $expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     *
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $expected
     * @psalm-assert !ExpectedType $actual
     */
    public static function assertNotInstanceOf(string $expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type array.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert array $actual
     */
    public static function assertIsArray($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type bool.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert bool $actual
     */
    public static function assertIsBool($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type float.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert float $actual
     */
    public static function assertIsFloat($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type int.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert int $actual
     */
    public static function assertIsInt($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type numeric.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert numeric $actual
     */
    public static function assertIsNumeric($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type object.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert object $actual
     */
    public static function assertIsObject($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type resource.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert resource $actual
     */
    public static function assertIsResource($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type resource and is closed.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert resource $actual
     */
    public static function assertIsClosedResource($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type string.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert string $actual
     */
    public static function assertIsString($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type scalar.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert scalar $actual
     */
    public static function assertIsScalar($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type callable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert callable $actual
     */
    public static function assertIsCallable($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type iterable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert iterable $actual
     */
    public static function assertIsIterable($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type array.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !array $actual
     */
    public static function assertIsNotArray($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type bool.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !bool $actual
     */
    public static function assertIsNotBool($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type float.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !float $actual
     */
    public static function assertIsNotFloat($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type int.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !int $actual
     */
    public static function assertIsNotInt($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type numeric.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !numeric $actual
     */
    public static function assertIsNotNumeric($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type object.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !object $actual
     */
    public static function assertIsNotObject($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type resource.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !resource $actual
     */
    public static function assertIsNotResource($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type resource.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !resource $actual
     */
    public static function assertIsNotClosedResource($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type string.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !string $actual
     */
    public static function assertIsNotString($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type scalar.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !scalar $actual
     */
    public static function assertIsNotScalar($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type callable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !callable $actual
     */
    public static function assertIsNotCallable($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type iterable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !iterable $actual
     */
    public static function assertIsNotIterable($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a string matches a given regular expression.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertMatchesRegularExpression(string $pattern, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string matches a given regular expression.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4086
     */
    public static function assertRegExp(string $pattern, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string does not match a given regular expression.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertDoesNotMatchRegularExpression(string $pattern, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string does not match a given regular expression.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4089
     */
    public static function assertNotRegExp(string $pattern, string $string, string $message = '') : void
    {
    }
    /**
     * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
     * is the same.
     *
     * @param Countable|iterable $expected
     * @param Countable|iterable $actual
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertSameSize($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
     * is not the same.
     *
     * @param Countable|iterable $expected
     * @param Countable|iterable $actual
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertNotSameSize($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a string matches a given format string.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringMatchesFormat(string $format, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string does not match a given format string.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringNotMatchesFormat(string $format, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string matches a given format file.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringMatchesFormatFile(string $formatFile, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string does not match a given format string.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringNotMatchesFormatFile(string $formatFile, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string starts with a given prefix.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringStartsWith(string $prefix, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string starts not with a given prefix.
     *
     * @param string $prefix
     * @param string $string
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringStartsNotWith($prefix, $string, string $message = '') : void
    {
    }
    /**
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringContainsString(string $needle, string $haystack, string $message = '') : void
    {
    }
    /**
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringContainsStringIgnoringCase(string $needle, string $haystack, string $message = '') : void
    {
    }
    /**
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringNotContainsString(string $needle, string $haystack, string $message = '') : void
    {
    }
    /**
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringNotContainsStringIgnoringCase(string $needle, string $haystack, string $message = '') : void
    {
    }
    /**
     * Asserts that a string ends with a given suffix.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringEndsWith(string $suffix, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string ends not with a given suffix.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringEndsNotWith(string $suffix, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that two XML files are equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertXmlFileEqualsXmlFile(string $expectedFile, string $actualFile, string $message = '') : void
    {
    }
    /**
     * Asserts that two XML files are not equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws \PHPUnit\Util\Exception
     */
    public static function assertXmlFileNotEqualsXmlFile(string $expectedFile, string $actualFile, string $message = '') : void
    {
    }
    /**
     * Asserts that two XML documents are equal.
     *
     * @param DOMDocument|string $actualXml
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws \PHPUnit\Util\Xml\Exception
     */
    public static function assertXmlStringEqualsXmlFile(string $expectedFile, $actualXml, string $message = '') : void
    {
    }
    /**
     * Asserts that two XML documents are not equal.
     *
     * @param DOMDocument|string $actualXml
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws \PHPUnit\Util\Xml\Exception
     */
    public static function assertXmlStringNotEqualsXmlFile(string $expectedFile, $actualXml, string $message = '') : void
    {
    }
    /**
     * Asserts that two XML documents are equal.
     *
     * @param DOMDocument|string $expectedXml
     * @param DOMDocument|string $actualXml
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws \PHPUnit\Util\Xml\Exception
     */
    public static function assertXmlStringEqualsXmlString($expectedXml, $actualXml, string $message = '') : void
    {
    }
    /**
     * Asserts that two XML documents are not equal.
     *
     * @param DOMDocument|string $expectedXml
     * @param DOMDocument|string $actualXml
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws \PHPUnit\Util\Xml\Exception
     */
    public static function assertXmlStringNotEqualsXmlString($expectedXml, $actualXml, string $message = '') : void
    {
    }
    /**
     * Asserts that a hierarchy of DOMElements matches.
     *
     * @throws AssertionFailedError
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4091
     */
    public static function assertEqualXMLStructure(\DOMElement $expectedElement, \DOMElement $actualElement, bool $checkAttributes = false, string $message = '') : void
    {
    }
    /**
     * Evaluates a PHPUnit\Framework\Constraint matcher object.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertThat($value, \PHPUnit\Framework\Constraint\Constraint $constraint, string $message = '') : void
    {
    }
    /**
     * Asserts that a string is a valid JSON string.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertJson(string $actualJson, string $message = '') : void
    {
    }
    /**
     * Asserts that two given JSON encoded objects or arrays are equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertJsonStringEqualsJsonString(string $expectedJson, string $actualJson, string $message = '') : void
    {
    }
    /**
     * Asserts that two given JSON encoded objects or arrays are not equal.
     *
     * @param string $expectedJson
     * @param string $actualJson
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertJsonStringNotEqualsJsonString($expectedJson, $actualJson, string $message = '') : void
    {
    }
    /**
     * Asserts that the generated JSON encoded object and the content of the given file are equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertJsonStringEqualsJsonFile(string $expectedFile, string $actualJson, string $message = '') : void
    {
    }
    /**
     * Asserts that the generated JSON encoded object and the content of the given file are not equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertJsonStringNotEqualsJsonFile(string $expectedFile, string $actualJson, string $message = '') : void
    {
    }
    /**
     * Asserts that two JSON files are equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertJsonFileEqualsJsonFile(string $expectedFile, string $actualFile, string $message = '') : void
    {
    }
    /**
     * Asserts that two JSON files are not equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertJsonFileNotEqualsJsonFile(string $expectedFile, string $actualFile, string $message = '') : void
    {
    }
    /**
     * @throws Exception
     */
    public static function logicalAnd() : \PHPUnit\Framework\Constraint\LogicalAnd
    {
    }
    public static function logicalOr() : \PHPUnit\Framework\Constraint\LogicalOr
    {
    }
    public static function logicalNot(\PHPUnit\Framework\Constraint\Constraint $constraint) : \PHPUnit\Framework\Constraint\LogicalNot
    {
    }
    public static function logicalXor() : \PHPUnit\Framework\Constraint\LogicalXor
    {
    }
    public static function anything() : \PHPUnit\Framework\Constraint\IsAnything
    {
    }
    public static function isTrue() : \PHPUnit\Framework\Constraint\IsTrue
    {
    }
    public static function callback(callable $callback) : \PHPUnit\Framework\Constraint\Callback
    {
    }
    public static function isFalse() : \PHPUnit\Framework\Constraint\IsFalse
    {
    }
    public static function isJson() : \PHPUnit\Framework\Constraint\IsJson
    {
    }
    public static function isNull() : \PHPUnit\Framework\Constraint\IsNull
    {
    }
    public static function isFinite() : \PHPUnit\Framework\Constraint\IsFinite
    {
    }
    public static function isInfinite() : \PHPUnit\Framework\Constraint\IsInfinite
    {
    }
    public static function isNan() : \PHPUnit\Framework\Constraint\IsNan
    {
    }
    public static function containsEqual($value) : \PHPUnit\Framework\Constraint\TraversableContainsEqual
    {
    }
    public static function containsIdentical($value) : \PHPUnit\Framework\Constraint\TraversableContainsIdentical
    {
    }
    public static function containsOnly(string $type) : \PHPUnit\Framework\Constraint\TraversableContainsOnly
    {
    }
    public static function containsOnlyInstancesOf(string $className) : \PHPUnit\Framework\Constraint\TraversableContainsOnly
    {
    }
    /**
     * @param int|string $key
     */
    public static function arrayHasKey($key) : \PHPUnit\Framework\Constraint\ArrayHasKey
    {
    }
    public static function equalTo($value) : \PHPUnit\Framework\Constraint\IsEqual
    {
    }
    public static function equalToCanonicalizing($value) : \PHPUnit\Framework\Constraint\IsEqualCanonicalizing
    {
    }
    public static function equalToIgnoringCase($value) : \PHPUnit\Framework\Constraint\IsEqualIgnoringCase
    {
    }
    public static function equalToWithDelta($value, float $delta) : \PHPUnit\Framework\Constraint\IsEqualWithDelta
    {
    }
    public static function isEmpty() : \PHPUnit\Framework\Constraint\IsEmpty
    {
    }
    public static function isWritable() : \PHPUnit\Framework\Constraint\IsWritable
    {
    }
    public static function isReadable() : \PHPUnit\Framework\Constraint\IsReadable
    {
    }
    public static function directoryExists() : \PHPUnit\Framework\Constraint\DirectoryExists
    {
    }
    public static function fileExists() : \PHPUnit\Framework\Constraint\FileExists
    {
    }
    public static function greaterThan($value) : \PHPUnit\Framework\Constraint\GreaterThan
    {
    }
    public static function greaterThanOrEqual($value) : \PHPUnit\Framework\Constraint\LogicalOr
    {
    }
    public static function classHasAttribute(string $attributeName) : \PHPUnit\Framework\Constraint\ClassHasAttribute
    {
    }
    public static function classHasStaticAttribute(string $attributeName) : \PHPUnit\Framework\Constraint\ClassHasStaticAttribute
    {
    }
    public static function objectHasAttribute($attributeName) : \PHPUnit\Framework\Constraint\ObjectHasAttribute
    {
    }
    public static function identicalTo($value) : \PHPUnit\Framework\Constraint\IsIdentical
    {
    }
    public static function isInstanceOf(string $className) : \PHPUnit\Framework\Constraint\IsInstanceOf
    {
    }
    public static function isType(string $type) : \PHPUnit\Framework\Constraint\IsType
    {
    }
    public static function lessThan($value) : \PHPUnit\Framework\Constraint\LessThan
    {
    }
    public static function lessThanOrEqual($value) : \PHPUnit\Framework\Constraint\LogicalOr
    {
    }
    public static function matchesRegularExpression(string $pattern) : \PHPUnit\Framework\Constraint\RegularExpression
    {
    }
    public static function matches(string $string) : \PHPUnit\Framework\Constraint\StringMatchesFormatDescription
    {
    }
    public static function stringStartsWith($prefix) : \PHPUnit\Framework\Constraint\StringStartsWith
    {
    }
    public static function stringContains(string $string, bool $case = true) : \PHPUnit\Framework\Constraint\StringContains
    {
    }
    public static function stringEndsWith(string $suffix) : \PHPUnit\Framework\Constraint\StringEndsWith
    {
    }
    public static function countOf(int $count) : \PHPUnit\Framework\Constraint\Count
    {
    }
    /**
     * Fails a test with the given message.
     *
     * @throws AssertionFailedError
     *
     * @psalm-return never-return
     */
    public static function fail(string $message = '') : void
    {
    }
    /**
     * Mark the test as incomplete.
     *
     * @throws IncompleteTestError
     *
     * @psalm-return never-return
     */
    public static function markTestIncomplete(string $message = '') : void
    {
    }
    /**
     * Mark the test as skipped.
     *
     * @throws SkippedTestError
     * @throws SyntheticSkippedError
     *
     * @psalm-return never-return
     */
    public static function markTestSkipped(string $message = '') : void
    {
    }
    /**
     * Return the current assertion count.
     */
    public static function getCount() : int
    {
    }
    /**
     * Reset the assertion counter.
     */
    public static function resetCount() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestBuilder
{
    public function build(\ReflectionClass $theClass, string $methodName) : \PHPUnit\Framework\Test
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvalidParameterGroupException extends \PHPUnit\Framework\Exception
{
}
abstract class TestCase extends \PHPUnit\Framework\Assert implements \PHPUnit\Framework\Reorderable, \PHPUnit\Framework\SelfDescribing, \PHPUnit\Framework\Test
{
    /**
     * @var ?bool
     */
    protected $backupGlobals;
    /**
     * @var string[]
     */
    protected $backupGlobalsExcludeList = [];
    /**
     * @var string[]
     *
     * @deprecated Use $backupGlobalsExcludeList instead
     */
    protected $backupGlobalsBlacklist = [];
    /**
     * @var bool
     */
    protected $backupStaticAttributes;
    /**
     * @var array<string,array<int,string>>
     */
    protected $backupStaticAttributesExcludeList = [];
    /**
     * @var array<string,array<int,string>>
     *
     * @deprecated Use $backupStaticAttributesExcludeList instead
     */
    protected $backupStaticAttributesBlacklist = [];
    /**
     * @var bool
     */
    protected $runTestInSeparateProcess;
    /**
     * @var bool
     */
    protected $preserveGlobalState = true;
    /**
     * @var list<ExecutionOrderDependency>
     */
    protected $providedTests = [];
    /**
     * Returns a matcher that matches when the method is executed
     * zero or more times.
     */
    public static function any() : \PHPUnit\Framework\MockObject\Rule\AnyInvokedCount
    {
    }
    /**
     * Returns a matcher that matches when the method is never executed.
     */
    public static function never() : \PHPUnit\Framework\MockObject\Rule\InvokedCount
    {
    }
    /**
     * Returns a matcher that matches when the method is executed
     * at least N times.
     */
    public static function atLeast(int $requiredInvocations) : \PHPUnit\Framework\MockObject\Rule\InvokedAtLeastCount
    {
    }
    /**
     * Returns a matcher that matches when the method is executed at least once.
     */
    public static function atLeastOnce() : \PHPUnit\Framework\MockObject\Rule\InvokedAtLeastOnce
    {
    }
    /**
     * Returns a matcher that matches when the method is executed exactly once.
     */
    public static function once() : \PHPUnit\Framework\MockObject\Rule\InvokedCount
    {
    }
    /**
     * Returns a matcher that matches when the method is executed
     * exactly $count times.
     */
    public static function exactly(int $count) : \PHPUnit\Framework\MockObject\Rule\InvokedCount
    {
    }
    /**
     * Returns a matcher that matches when the method is executed
     * at most N times.
     */
    public static function atMost(int $allowedInvocations) : \PHPUnit\Framework\MockObject\Rule\InvokedAtMostCount
    {
    }
    /**
     * Returns a matcher that matches when the method is executed
     * at the given index.
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4297
     * @codeCoverageIgnore
     */
    public static function at(int $index) : \PHPUnit\Framework\MockObject\Rule\InvokedAtIndex
    {
    }
    public static function returnValue($value) : \PHPUnit\Framework\MockObject\Stub\ReturnStub
    {
    }
    public static function returnValueMap(array $valueMap) : \PHPUnit\Framework\MockObject\Stub\ReturnValueMap
    {
    }
    public static function returnArgument(int $argumentIndex) : \PHPUnit\Framework\MockObject\Stub\ReturnArgument
    {
    }
    public static function returnCallback($callback) : \PHPUnit\Framework\MockObject\Stub\ReturnCallback
    {
    }
    /**
     * Returns the current object.
     *
     * This method is useful when mocking a fluent interface.
     */
    public static function returnSelf() : \PHPUnit\Framework\MockObject\Stub\ReturnSelf
    {
    }
    public static function throwException(\Throwable $exception) : \PHPUnit\Framework\MockObject\Stub\Exception
    {
    }
    public static function onConsecutiveCalls(...$args) : \PHPUnit\Framework\MockObject\Stub\ConsecutiveCalls
    {
    }
    /**
     * @param int|string $dataName
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
    }
    /**
     * This method is called before the first test of this test class is run.
     */
    public static function setUpBeforeClass() : void
    {
    }
    /**
     * This method is called after the last test of this test class is run.
     */
    public static function tearDownAfterClass() : void
    {
    }
    /**
     * This method is called before each test.
     */
    protected function setUp() : void
    {
    }
    /**
     * This method is called after each test.
     */
    protected function tearDown() : void
    {
    }
    /**
     * Returns a string representation of the test case.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public function toString() : string
    {
    }
    public function count() : int
    {
    }
    public function getActualOutputForAssertion() : string
    {
    }
    public function expectOutputRegex(string $expectedRegex) : void
    {
    }
    public function expectOutputString(string $expectedString) : void
    {
    }
    /**
     * @psalm-param class-string<\Throwable> $exception
     */
    public function expectException(string $exception) : void
    {
    }
    /**
     * @param int|string $code
     */
    public function expectExceptionCode($code) : void
    {
    }
    public function expectExceptionMessage(string $message) : void
    {
    }
    public function expectExceptionMessageMatches(string $regularExpression) : void
    {
    }
    /**
     * Sets up an expectation for an exception to be raised by the code under test.
     * Information for expected exception class, expected exception message, and
     * expected exception code are retrieved from a given Exception object.
     */
    public function expectExceptionObject(\Exception $exception) : void
    {
    }
    public function expectNotToPerformAssertions() : void
    {
    }
    public function expectDeprecation() : void
    {
    }
    public function expectDeprecationMessage(string $message) : void
    {
    }
    public function expectDeprecationMessageMatches(string $regularExpression) : void
    {
    }
    public function expectNotice() : void
    {
    }
    public function expectNoticeMessage(string $message) : void
    {
    }
    public function expectNoticeMessageMatches(string $regularExpression) : void
    {
    }
    public function expectWarning() : void
    {
    }
    public function expectWarningMessage(string $message) : void
    {
    }
    public function expectWarningMessageMatches(string $regularExpression) : void
    {
    }
    public function expectError() : void
    {
    }
    public function expectErrorMessage(string $message) : void
    {
    }
    public function expectErrorMessageMatches(string $regularExpression) : void
    {
    }
    public function getStatus() : int
    {
    }
    public function markAsRisky() : void
    {
    }
    public function getStatusMessage() : string
    {
    }
    public function hasFailed() : bool
    {
    }
    /**
     * Runs the test case and collects the results in a TestResult object.
     * If no TestResult object is passed a new one will be created.
     *
     * @throws CodeCoverageException
     * @throws UtilException
     * @throws \SebastianBergmann\CodeCoverage\InvalidArgumentException
     * @throws \SebastianBergmann\CodeCoverage\UnintentionallyCoveredCodeException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function run(\PHPUnit\Framework\TestResult $result = null) : \PHPUnit\Framework\TestResult
    {
    }
    /**
     * Returns a builder object to create mock objects using a fluent interface.
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $className
     * @psalm-return MockBuilder<RealInstanceType>
     */
    public function getMockBuilder(string $className) : \PHPUnit\Framework\MockObject\MockBuilder
    {
    }
    public function registerComparator(\SebastianBergmann\Comparator\Comparator $comparator) : void
    {
    }
    /**
     * @return string[]
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function doubledTypes() : array
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getGroups() : array
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setGroups(array $groups) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getAnnotations() : array
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getName(bool $withDataSet = true) : string
    {
    }
    /**
     * Returns the size of the test.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getSize() : int
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function hasSize() : bool
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function isSmall() : bool
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function isMedium() : bool
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function isLarge() : bool
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getActualOutput() : string
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function hasOutput() : bool
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function doesNotPerformAssertions() : bool
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function hasExpectationOnOutput() : bool
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getExpectedException() : ?string
    {
    }
    /**
     * @return null|int|string
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getExpectedExceptionCode()
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getExpectedExceptionMessage() : ?string
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getExpectedExceptionMessageRegExp() : ?string
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setRegisterMockObjectsFromTestArgumentsRecursively(bool $flag) : void
    {
    }
    /**
     * @throws Throwable
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function runBare() : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setName(string $name) : void
    {
    }
    /**
     * @param list<ExecutionOrderDependency> $dependencies
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setDependencies(array $dependencies) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setDependencyInput(array $dependencyInput) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setBeStrictAboutChangesToGlobalState(?bool $beStrictAboutChangesToGlobalState) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setBackupGlobals(?bool $backupGlobals) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setBackupStaticAttributes(?bool $backupStaticAttributes) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setRunTestInSeparateProcess(bool $runTestInSeparateProcess) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setRunClassInSeparateProcess(bool $runClassInSeparateProcess) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setPreserveGlobalState(bool $preserveGlobalState) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setInIsolation(bool $inIsolation) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function isInIsolation() : bool
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getResult()
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setResult($result) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setOutputCallback(callable $callback) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getTestResultObject() : ?\PHPUnit\Framework\TestResult
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setTestResultObject(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function registerMockObject(\PHPUnit\Framework\MockObject\MockObject $mockObject) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function addToAssertionCount(int $count) : void
    {
    }
    /**
     * Returns the number of assertions performed by this test.
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getNumAssertions() : int
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function usesDataProvider() : bool
    {
    }
    /**
     * @return int|string
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function dataName()
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getDataSetAsString(bool $includeData = true) : string
    {
    }
    /**
     * Gets the data set of a TestCase.
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getProvidedData() : array
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function addWarning(string $warning) : void
    {
    }
    public function sortId() : string
    {
    }
    /**
     * Returns the normalized test name as class::method.
     *
     * @return list<ExecutionOrderDependency>
     */
    public function provides() : array
    {
    }
    /**
     * Returns a list of normalized dependency names, class::method.
     *
     * This list can differ from the raw dependencies as the resolver has
     * no need for the [!][shallow]clone prefix that is filtered out
     * during normalization.
     *
     * @return list<ExecutionOrderDependency>
     */
    public function requires() : array
    {
    }
    /**
     * Override to run the test and assert its state.
     *
     * @throws AssertionFailedError
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\ObjectEnumerator\InvalidArgumentException
     * @throws Throwable
     */
    protected function runTest()
    {
    }
    /**
     * This method is a wrapper for the ini_set() function that automatically
     * resets the modified php.ini setting to its original value after the
     * test is run.
     *
     * @throws Exception
     */
    protected function iniSet(string $varName, string $newValue) : void
    {
    }
    /**
     * This method is a wrapper for the setlocale() function that automatically
     * resets the locale to its original value after the test is run.
     *
     * @throws Exception
     */
    protected function setLocale(...$args) : void
    {
    }
    /**
     * Makes configurable stub for the specified class.
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param    class-string<RealInstanceType> $originalClassName
     * @psalm-return   Stub&RealInstanceType
     */
    protected function createStub(string $originalClassName) : \PHPUnit\Framework\MockObject\Stub
    {
    }
    /**
     * Returns a mock object for the specified class.
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $originalClassName
     * @psalm-return MockObject&RealInstanceType
     */
    protected function createMock(string $originalClassName) : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Returns a configured mock object for the specified class.
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $originalClassName
     * @psalm-return MockObject&RealInstanceType
     */
    protected function createConfiguredMock(string $originalClassName, array $configuration) : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Returns a partial mock object for the specified class.
     *
     * @param string[] $methods
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $originalClassName
     * @psalm-return MockObject&RealInstanceType
     */
    protected function createPartialMock(string $originalClassName, array $methods) : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Returns a test proxy for the specified class.
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $originalClassName
     * @psalm-return MockObject&RealInstanceType
     */
    protected function createTestProxy(string $originalClassName, array $constructorArguments = []) : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Mocks the specified class and returns the name of the mocked class.
     *
     * @param null|array $methods $methods
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType>|string $originalClassName
     * @psalm-return class-string<MockObject&RealInstanceType>
     */
    protected function getMockClass(string $originalClassName, $methods = [], array $arguments = [], string $mockClassName = '', bool $callOriginalConstructor = false, bool $callOriginalClone = true, bool $callAutoload = true, bool $cloneArguments = false) : string
    {
    }
    /**
     * Returns a mock object for the specified abstract class with all abstract
     * methods of the class mocked. Concrete methods are not mocked by default.
     * To mock concrete methods, use the 7th parameter ($mockedMethods).
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $originalClassName
     * @psalm-return MockObject&RealInstanceType
     */
    protected function getMockForAbstractClass(string $originalClassName, array $arguments = [], string $mockClassName = '', bool $callOriginalConstructor = true, bool $callOriginalClone = true, bool $callAutoload = true, array $mockedMethods = [], bool $cloneArguments = false) : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Returns a mock object based on the given WSDL file.
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType>|string $originalClassName
     * @psalm-return MockObject&RealInstanceType
     */
    protected function getMockFromWsdl(string $wsdlFile, string $originalClassName = '', string $mockClassName = '', array $methods = [], bool $callOriginalConstructor = true, array $options = []) : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Returns a mock object for the specified trait with all abstract methods
     * of the trait mocked. Concrete methods to mock can be specified with the
     * `$mockedMethods` parameter.
     */
    protected function getMockForTrait(string $traitName, array $arguments = [], string $mockClassName = '', bool $callOriginalConstructor = true, bool $callOriginalClone = true, bool $callAutoload = true, array $mockedMethods = [], bool $cloneArguments = false) : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Returns an object for the specified trait.
     */
    protected function getObjectForTrait(string $traitName, array $arguments = [], string $traitClassName = '', bool $callOriginalConstructor = true, bool $callOriginalClone = true, bool $callAutoload = true) : object
    {
    }
    /**
     * @throws \Prophecy\Exception\Doubler\ClassNotFoundException
     * @throws \Prophecy\Exception\Doubler\DoubleException
     * @throws \Prophecy\Exception\Doubler\InterfaceNotFoundException
     *
     * @psalm-param class-string|null $classOrInterface
     */
    protected function prophesize(?string $classOrInterface = null) : \Prophecy\Prophecy\ObjectProphecy
    {
    }
    /**
     * Creates a default TestResult object.
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    protected function createResult() : \PHPUnit\Framework\TestResult
    {
    }
    /**
     * Performs assertions shared by all tests of a test case.
     *
     * This method is called between setUp() and test.
     */
    protected function assertPreConditions() : void
    {
    }
    /**
     * Performs assertions shared by all tests of a test case.
     *
     * This method is called between test and tearDown().
     */
    protected function assertPostConditions() : void
    {
    }
    /**
     * This method is called when a test method did not execute successfully.
     *
     * @throws Throwable
     */
    protected function onNotSuccessfulTest(\Throwable $t) : void
    {
    }
    protected function recordDoubledType(string $originalClassName) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class IncompleteTestCase extends \PHPUnit\Framework\TestCase
{
    public function __construct(string $className, string $methodName, string $message = '')
    {
    }
    public function getMessage() : string
    {
    }
    /**
     * Returns a string representation of the test case.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function toString() : string
    {
    }
}
/**
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
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestResult implements \Countable
{
    /**
     * @deprecated Use the `TestHook` interfaces instead
     *
     * @codeCoverageIgnore
     *
     * Registers a TestListener.
     */
    public function addListener(\PHPUnit\Framework\TestListener $listener) : void
    {
    }
    /**
     * @deprecated Use the `TestHook` interfaces instead
     *
     * @codeCoverageIgnore
     *
     * Unregisters a TestListener.
     */
    public function removeListener(\PHPUnit\Framework\TestListener $listener) : void
    {
    }
    /**
     * @deprecated Use the `TestHook` interfaces instead
     *
     * @codeCoverageIgnore
     *
     * Flushes all flushable TestListeners.
     */
    public function flushListeners() : void
    {
    }
    /**
     * Adds an error to the list of errors.
     */
    public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * Adds a warning to the list of warnings.
     * The passed in exception caused the warning.
     */
    public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
    {
    }
    /**
     * Adds a failure to the list of failures.
     * The passed in exception caused the failure.
     */
    public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
    {
    }
    /**
     * Informs the result that a test suite will be started.
     */
    public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    /**
     * Informs the result that a test suite was completed.
     */
    public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    /**
     * Informs the result that a test will be started.
     */
    public function startTest(\PHPUnit\Framework\Test $test) : void
    {
    }
    /**
     * Informs the result that a test was completed.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
    {
    }
    /**
     * Returns true if no risky test occurred.
     */
    public function allHarmless() : bool
    {
    }
    /**
     * Gets the number of risky tests.
     */
    public function riskyCount() : int
    {
    }
    /**
     * Returns true if no incomplete test occurred.
     */
    public function allCompletelyImplemented() : bool
    {
    }
    /**
     * Gets the number of incomplete tests.
     */
    public function notImplementedCount() : int
    {
    }
    /**
     * Returns an array of TestFailure objects for the risky tests.
     *
     * @return TestFailure[]
     */
    public function risky() : array
    {
    }
    /**
     * Returns an array of TestFailure objects for the incomplete tests.
     *
     * @return TestFailure[]
     */
    public function notImplemented() : array
    {
    }
    /**
     * Returns true if no test has been skipped.
     */
    public function noneSkipped() : bool
    {
    }
    /**
     * Gets the number of skipped tests.
     */
    public function skippedCount() : int
    {
    }
    /**
     * Returns an array of TestFailure objects for the skipped tests.
     *
     * @return TestFailure[]
     */
    public function skipped() : array
    {
    }
    /**
     * Gets the number of detected errors.
     */
    public function errorCount() : int
    {
    }
    /**
     * Returns an array of TestFailure objects for the errors.
     *
     * @return TestFailure[]
     */
    public function errors() : array
    {
    }
    /**
     * Gets the number of detected failures.
     */
    public function failureCount() : int
    {
    }
    /**
     * Returns an array of TestFailure objects for the failures.
     *
     * @return TestFailure[]
     */
    public function failures() : array
    {
    }
    /**
     * Gets the number of detected warnings.
     */
    public function warningCount() : int
    {
    }
    /**
     * Returns an array of TestFailure objects for the warnings.
     *
     * @return TestFailure[]
     */
    public function warnings() : array
    {
    }
    /**
     * Returns the names of the tests that have passed.
     */
    public function passed() : array
    {
    }
    /**
     * Returns the names of the TestSuites that have passed.
     *
     * This enables @depends-annotations for TestClassName::class
     */
    public function passedClasses() : array
    {
    }
    /**
     * Returns the (top) test suite.
     */
    public function topTestSuite() : \PHPUnit\Framework\TestSuite
    {
    }
    /**
     * Returns whether code coverage information should be collected.
     */
    public function getCollectCodeCoverageInformation() : bool
    {
    }
    /**
     * Runs a TestCase.
     *
     * @throws CodeCoverageException
     * @throws UnintentionallyCoveredCodeException
     * @throws \SebastianBergmann\CodeCoverage\InvalidArgumentException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function run(\PHPUnit\Framework\Test $test) : void
    {
    }
    /**
     * Gets the number of run tests.
     */
    public function count() : int
    {
    }
    /**
     * Checks whether the test run should stop.
     */
    public function shouldStop() : bool
    {
    }
    /**
     * Marks that the test run should stop.
     */
    public function stop() : void
    {
    }
    /**
     * Returns the code coverage object.
     */
    public function getCodeCoverage() : ?\SebastianBergmann\CodeCoverage\CodeCoverage
    {
    }
    /**
     * Sets the code coverage object.
     */
    public function setCodeCoverage(\SebastianBergmann\CodeCoverage\CodeCoverage $codeCoverage) : void
    {
    }
    /**
     * Enables or disables the deprecation-to-exception conversion.
     */
    public function convertDeprecationsToExceptions(bool $flag) : void
    {
    }
    /**
     * Returns the deprecation-to-exception conversion setting.
     */
    public function getConvertDeprecationsToExceptions() : bool
    {
    }
    /**
     * Enables or disables the error-to-exception conversion.
     */
    public function convertErrorsToExceptions(bool $flag) : void
    {
    }
    /**
     * Returns the error-to-exception conversion setting.
     */
    public function getConvertErrorsToExceptions() : bool
    {
    }
    /**
     * Enables or disables the notice-to-exception conversion.
     */
    public function convertNoticesToExceptions(bool $flag) : void
    {
    }
    /**
     * Returns the notice-to-exception conversion setting.
     */
    public function getConvertNoticesToExceptions() : bool
    {
    }
    /**
     * Enables or disables the warning-to-exception conversion.
     */
    public function convertWarningsToExceptions(bool $flag) : void
    {
    }
    /**
     * Returns the warning-to-exception conversion setting.
     */
    public function getConvertWarningsToExceptions() : bool
    {
    }
    /**
     * Enables or disables the stopping when an error occurs.
     */
    public function stopOnError(bool $flag) : void
    {
    }
    /**
     * Enables or disables the stopping when a failure occurs.
     */
    public function stopOnFailure(bool $flag) : void
    {
    }
    /**
     * Enables or disables the stopping when a warning occurs.
     */
    public function stopOnWarning(bool $flag) : void
    {
    }
    public function beStrictAboutTestsThatDoNotTestAnything(bool $flag) : void
    {
    }
    public function isStrictAboutTestsThatDoNotTestAnything() : bool
    {
    }
    public function beStrictAboutOutputDuringTests(bool $flag) : void
    {
    }
    public function isStrictAboutOutputDuringTests() : bool
    {
    }
    public function beStrictAboutResourceUsageDuringSmallTests(bool $flag) : void
    {
    }
    public function isStrictAboutResourceUsageDuringSmallTests() : bool
    {
    }
    public function enforceTimeLimit(bool $flag) : void
    {
    }
    public function enforcesTimeLimit() : bool
    {
    }
    public function beStrictAboutTodoAnnotatedTests(bool $flag) : void
    {
    }
    public function isStrictAboutTodoAnnotatedTests() : bool
    {
    }
    public function forceCoversAnnotation() : void
    {
    }
    public function forcesCoversAnnotation() : bool
    {
    }
    /**
     * Enables or disables the stopping for risky tests.
     */
    public function stopOnRisky(bool $flag) : void
    {
    }
    /**
     * Enables or disables the stopping for incomplete tests.
     */
    public function stopOnIncomplete(bool $flag) : void
    {
    }
    /**
     * Enables or disables the stopping for skipped tests.
     */
    public function stopOnSkipped(bool $flag) : void
    {
    }
    /**
     * Enables or disables the stopping for defects: error, failure, warning.
     */
    public function stopOnDefect(bool $flag) : void
    {
    }
    /**
     * Returns the time spent running the tests.
     */
    public function time() : float
    {
    }
    /**
     * Returns whether the entire test was successful or not.
     */
    public function wasSuccessful() : bool
    {
    }
    public function wasSuccessfulIgnoringWarnings() : bool
    {
    }
    public function wasSuccessfulAndNoTestIsRiskyOrSkippedOrIncomplete() : bool
    {
    }
    /**
     * Sets the default timeout for tests.
     */
    public function setDefaultTimeLimit(int $timeout) : void
    {
    }
    /**
     * Sets the timeout for small tests.
     */
    public function setTimeoutForSmallTests(int $timeout) : void
    {
    }
    /**
     * Sets the timeout for medium tests.
     */
    public function setTimeoutForMediumTests(int $timeout) : void
    {
    }
    /**
     * Sets the timeout for large tests.
     */
    public function setTimeoutForLargeTests(int $timeout) : void
    {
    }
    /**
     * Returns the set timeout for large tests.
     */
    public function getTimeoutForLargeTests() : int
    {
    }
    public function setRegisterMockObjectsFromTestArgumentsRecursively(bool $flag) : void
    {
    }
}
/**
 * Wraps Exceptions thrown by code under test.
 *
 * Re-instantiates Exceptions thrown by user-space code to retain their original
 * class names, properties, and stack traces (but without arguments).
 *
 * Unlike PHPUnit\Framework_\Exception, the complete stack of previous Exceptions
 * is processed.
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ExceptionWrapper extends \PHPUnit\Framework\Exception
{
    public function __construct(\Throwable $t)
    {
    }
    public function __toString() : string
    {
    }
    public function getClassName() : string
    {
    }
    public function getPreviousWrapped() : ?self
    {
    }
    public function setClassName(string $className) : void
    {
    }
    public function setOriginalException(\Throwable $t) : void
    {
    }
    public function getOriginalException() : ?\Throwable
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestFailure
{
    /**
     * Returns a description for an exception.
     */
    public static function exceptionToString(\Throwable $e) : string
    {
    }
    /**
     * Constructs a TestFailure with the given test and exception.
     */
    public function __construct(\PHPUnit\Framework\Test $failedTest, \Throwable $t)
    {
    }
    /**
     * Returns a short description of the failure.
     */
    public function toString() : string
    {
    }
    /**
     * Returns a description for the thrown exception.
     */
    public function getExceptionAsString() : string
    {
    }
    /**
     * Returns the name of the failing test (including data set, if any).
     */
    public function getTestName() : string
    {
    }
    /**
     * Returns the failing test.
     *
     * Note: The test object is not set when the test is executed in process
     * isolation.
     *
     * @see Exception
     */
    public function failedTest() : ?\PHPUnit\Framework\Test
    {
    }
    /**
     * Gets the thrown exception.
     */
    public function thrownException() : \Throwable
    {
    }
    /**
     * Returns the exception's message.
     */
    public function exceptionMessage() : string
    {
    }
    /**
     * Returns true if the thrown exception
     * is of type AssertionFailedError.
     */
    public function isFailure() : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class SkippedTestCase extends \PHPUnit\Framework\TestCase
{
    public function __construct(string $className, string $methodName, string $message = '')
    {
    }
    public function getMessage() : string
    {
    }
    /**
     * Returns a string representation of the test case.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function toString() : string
    {
    }
}
/**
 * @deprecated The `TestListener` interface is deprecated
 */
trait TestListenerDefaultImplementation
{
    public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
    {
    }
    public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
    {
    }
    public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    public function startTest(\PHPUnit\Framework\Test $test) : void
    {
    }
    public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
    {
    }
}
namespace PHPUnit\Framework\Error;

/**
 * @internal
 */
class Error extends \PHPUnit\Framework\Exception
{
    public function __construct(string $message, int $code, string $file, int $line, \Exception $previous = null)
    {
    }
}
/**
 * @internal
 */
final class Notice extends \PHPUnit\Framework\Error\Error
{
}
/**
 * @internal
 */
final class Deprecated extends \PHPUnit\Framework\Error\Error
{
}
/**
 * @internal
 */
final class Warning extends \PHPUnit\Framework\Error\Error
{
}
namespace PHPUnit\Framework;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ExecutionOrderDependency
{
    public static function createFromDependsAnnotation(string $className, string $annotation) : self
    {
    }
    /**
     * @psalm-param list<ExecutionOrderDependency> $dependencies
     *
     * @psalm-return list<ExecutionOrderDependency>
     */
    public static function filterInvalid(array $dependencies) : array
    {
    }
    /**
     * @psalm-param list<ExecutionOrderDependency> $existing
     * @psalm-param list<ExecutionOrderDependency> $additional
     *
     * @psalm-return list<ExecutionOrderDependency>
     */
    public static function mergeUnique(array $existing, array $additional) : array
    {
    }
    /**
     * @psalm-param list<ExecutionOrderDependency> $left
     * @psalm-param list<ExecutionOrderDependency> $right
     *
     * @psalm-return list<ExecutionOrderDependency>
     */
    public static function diff(array $left, array $right) : array
    {
    }
    public function __construct(string $classOrCallableName, ?string $methodName = null, ?string $option = null)
    {
    }
    public function __toString() : string
    {
    }
    public function isValid() : bool
    {
    }
    public function useShallowClone() : bool
    {
    }
    public function useDeepClone() : bool
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
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class WarningTestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * @param string $message
     */
    public function __construct($message = '')
    {
    }
    public function getMessage() : string
    {
    }
    /**
     * Returns a string representation of the test case.
     */
    public function toString() : string
    {
    }
}
namespace PHPUnit\TextUI;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestRunner extends \PHPUnit\Runner\BaseTestRunner
{
    public const SUCCESS_EXIT = 0;
    public const FAILURE_EXIT = 1;
    public const EXCEPTION_EXIT = 2;
    public function __construct(\PHPUnit\Runner\TestSuiteLoader $loader = null, \SebastianBergmann\CodeCoverage\Filter $filter = null)
    {
    }
    /**
     * @throws \PHPUnit\Runner\Exception
     * @throws \PHPUnit\TextUI\XmlConfiguration\Exception
     * @throws Exception
     */
    public function run(\PHPUnit\Framework\TestSuite $suite, array $arguments = [], array $warnings = [], bool $exit = true) : \PHPUnit\Framework\TestResult
    {
    }
    /**
     * Returns the loader to be used.
     */
    public function getLoader() : \PHPUnit\Runner\TestSuiteLoader
    {
    }
    public function addExtension(\PHPUnit\Runner\Hook $extension) : void
    {
    }
}
namespace PHPUnit\TextUI\XmlConfiguration;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class GroupCollectionIterator implements \Countable, \Iterator
{
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\GroupCollection $groups)
    {
    }
    public function count() : int
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
    public function current() : \PHPUnit\TextUI\XmlConfiguration\Group
    {
    }
    public function next() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Groups
{
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\GroupCollection $include, \PHPUnit\TextUI\XmlConfiguration\GroupCollection $exclude)
    {
    }
    public function hasInclude() : bool
    {
    }
    public function include() : \PHPUnit\TextUI\XmlConfiguration\GroupCollection
    {
    }
    public function hasExclude() : bool
    {
    }
    public function exclude() : \PHPUnit\TextUI\XmlConfiguration\GroupCollection
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class GroupCollection implements \IteratorAggregate
{
    /**
     * @param Group[] $groups
     */
    public static function fromArray(array $groups) : self
    {
    }
    /**
     * @return Group[]
     */
    public function asArray() : array
    {
    }
    /**
     * @return string[]
     */
    public function asArrayOfStrings() : array
    {
    }
    public function isEmpty() : bool
    {
    }
    public function getIterator() : \PHPUnit\TextUI\XmlConfiguration\GroupCollectionIterator
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Group
{
    public function __construct(string $name)
    {
    }
    public function name() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class TestDirectoryCollection implements \Countable, \IteratorAggregate
{
    /**
     * @param TestDirectory[] $directories
     */
    public static function fromArray(array $directories) : self
    {
    }
    /**
     * @return TestDirectory[]
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \PHPUnit\TextUI\XmlConfiguration\TestDirectoryCollectionIterator
    {
    }
    public function isEmpty() : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestDirectoryCollectionIterator implements \Countable, \Iterator
{
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\TestDirectoryCollection $directories)
    {
    }
    public function count() : int
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
    public function current() : \PHPUnit\TextUI\XmlConfiguration\TestDirectory
    {
    }
    public function next() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class TestDirectory
{
    public function __construct(string $path, string $prefix, string $suffix, string $phpVersion, \PHPUnit\Util\VersionComparisonOperator $phpVersionOperator)
    {
    }
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
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class TestSuite
{
    public function __construct(string $name, \PHPUnit\TextUI\XmlConfiguration\TestDirectoryCollection $directories, \PHPUnit\TextUI\XmlConfiguration\TestFileCollection $files, \PHPUnit\TextUI\XmlConfiguration\FileCollection $exclude)
    {
    }
    public function name() : string
    {
    }
    public function directories() : \PHPUnit\TextUI\XmlConfiguration\TestDirectoryCollection
    {
    }
    public function files() : \PHPUnit\TextUI\XmlConfiguration\TestFileCollection
    {
    }
    public function exclude() : \PHPUnit\TextUI\XmlConfiguration\FileCollection
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestSuiteMapper
{
    public function map(\PHPUnit\TextUI\XmlConfiguration\TestSuiteCollection $configuration, string $filter) : \PHPUnit\Framework\TestSuite
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestFileCollectionIterator implements \Countable, \Iterator
{
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\TestFileCollection $files)
    {
    }
    public function count() : int
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
    public function current() : \PHPUnit\TextUI\XmlConfiguration\TestFile
    {
    }
    public function next() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class TestFile
{
    public function __construct(string $path, string $phpVersion, \PHPUnit\Util\VersionComparisonOperator $phpVersionOperator)
    {
    }
    public function path() : string
    {
    }
    public function phpVersion() : string
    {
    }
    public function phpVersionOperator() : \PHPUnit\Util\VersionComparisonOperator
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class TestFileCollection implements \Countable, \IteratorAggregate
{
    /**
     * @param TestFile[] $files
     */
    public static function fromArray(array $files) : self
    {
    }
    /**
     * @return TestFile[]
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \PHPUnit\TextUI\XmlConfiguration\TestFileCollectionIterator
    {
    }
    public function isEmpty() : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class TestSuiteCollection implements \Countable, \IteratorAggregate
{
    /**
     * @param TestSuite[] $testSuites
     */
    public static function fromArray(array $testSuites) : self
    {
    }
    /**
     * @return TestSuite[]
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \PHPUnit\TextUI\XmlConfiguration\TestSuiteCollectionIterator
    {
    }
    public function isEmpty() : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestSuiteCollectionIterator implements \Countable, \Iterator
{
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\TestSuiteCollection $testSuites)
    {
    }
    public function count() : int
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
    public function current() : \PHPUnit\TextUI\XmlConfiguration\TestSuite
    {
    }
    public function next() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ConstantCollectionIterator implements \Countable, \Iterator
{
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\ConstantCollection $constants)
    {
    }
    public function count() : int
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
    public function current() : \PHPUnit\TextUI\XmlConfiguration\Constant
    {
    }
    public function next() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class IniSettingCollectionIterator implements \Countable, \Iterator
{
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\IniSettingCollection $iniSettings)
    {
    }
    public function count() : int
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
    public function current() : \PHPUnit\TextUI\XmlConfiguration\IniSetting
    {
    }
    public function next() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class IniSetting
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
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class IniSettingCollection implements \Countable, \IteratorAggregate
{
    /**
     * @param IniSetting[] $iniSettings
     */
    public static function fromArray(array $iniSettings) : self
    {
    }
    /**
     * @return IniSetting[]
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \PHPUnit\TextUI\XmlConfiguration\IniSettingCollectionIterator
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class VariableCollection implements \Countable, \IteratorAggregate
{
    /**
     * @param Variable[] $variables
     */
    public static function fromArray(array $variables) : self
    {
    }
    /**
     * @return Variable[]
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \PHPUnit\TextUI\XmlConfiguration\VariableCollectionIterator
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Variable
{
    public function __construct(string $name, $value, bool $force)
    {
    }
    public function name() : string
    {
    }
    public function value()
    {
    }
    public function force() : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class VariableCollectionIterator implements \Countable, \Iterator
{
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\VariableCollection $variables)
    {
    }
    public function count() : int
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
    public function current() : \PHPUnit\TextUI\XmlConfiguration\Variable
    {
    }
    public function next() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class PhpHandler
{
    public function handle(\PHPUnit\TextUI\XmlConfiguration\Php $configuration) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Constant
{
    public function __construct(string $name, $value)
    {
    }
    public function name() : string
    {
    }
    public function value()
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Php
{
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\DirectoryCollection $includePaths, \PHPUnit\TextUI\XmlConfiguration\IniSettingCollection $iniSettings, \PHPUnit\TextUI\XmlConfiguration\ConstantCollection $constants, \PHPUnit\TextUI\XmlConfiguration\VariableCollection $globalVariables, \PHPUnit\TextUI\XmlConfiguration\VariableCollection $envVariables, \PHPUnit\TextUI\XmlConfiguration\VariableCollection $postVariables, \PHPUnit\TextUI\XmlConfiguration\VariableCollection $getVariables, \PHPUnit\TextUI\XmlConfiguration\VariableCollection $cookieVariables, \PHPUnit\TextUI\XmlConfiguration\VariableCollection $serverVariables, \PHPUnit\TextUI\XmlConfiguration\VariableCollection $filesVariables, \PHPUnit\TextUI\XmlConfiguration\VariableCollection $requestVariables)
    {
    }
    public function includePaths() : \PHPUnit\TextUI\XmlConfiguration\DirectoryCollection
    {
    }
    public function iniSettings() : \PHPUnit\TextUI\XmlConfiguration\IniSettingCollection
    {
    }
    public function constants() : \PHPUnit\TextUI\XmlConfiguration\ConstantCollection
    {
    }
    public function globalVariables() : \PHPUnit\TextUI\XmlConfiguration\VariableCollection
    {
    }
    public function envVariables() : \PHPUnit\TextUI\XmlConfiguration\VariableCollection
    {
    }
    public function postVariables() : \PHPUnit\TextUI\XmlConfiguration\VariableCollection
    {
    }
    public function getVariables() : \PHPUnit\TextUI\XmlConfiguration\VariableCollection
    {
    }
    public function cookieVariables() : \PHPUnit\TextUI\XmlConfiguration\VariableCollection
    {
    }
    public function serverVariables() : \PHPUnit\TextUI\XmlConfiguration\VariableCollection
    {
    }
    public function filesVariables() : \PHPUnit\TextUI\XmlConfiguration\VariableCollection
    {
    }
    public function requestVariables() : \PHPUnit\TextUI\XmlConfiguration\VariableCollection
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class ConstantCollection implements \Countable, \IteratorAggregate
{
    /**
     * @param Constant[] $constants
     */
    public static function fromArray(array $constants) : self
    {
    }
    /**
     * @return Constant[]
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \PHPUnit\TextUI\XmlConfiguration\ConstantCollectionIterator
    {
    }
}
namespace PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Clover
{
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\File $target)
    {
    }
    public function target() : \PHPUnit\TextUI\XmlConfiguration\File
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Xml
{
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\Directory $target)
    {
    }
    public function target() : \PHPUnit\TextUI\XmlConfiguration\Directory
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Crap4j
{
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\File $target, int $threshold)
    {
    }
    public function target() : \PHPUnit\TextUI\XmlConfiguration\File
    {
    }
    public function threshold() : int
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Php
{
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\File $target)
    {
    }
    public function target() : \PHPUnit\TextUI\XmlConfiguration\File
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Html
{
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\Directory $target, int $lowUpperBound, int $highLowerBound)
    {
    }
    public function target() : \PHPUnit\TextUI\XmlConfiguration\Directory
    {
    }
    public function lowUpperBound() : int
    {
    }
    public function highLowerBound() : int
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Text
{
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\File $target, bool $showUncoveredFiles, bool $showOnlySummary)
    {
    }
    public function target() : \PHPUnit\TextUI\XmlConfiguration\File
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
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class CodeCoverage
{
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Filter\DirectoryCollection $directories, \PHPUnit\TextUI\XmlConfiguration\FileCollection $files, \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Filter\DirectoryCollection $excludeDirectories, \PHPUnit\TextUI\XmlConfiguration\FileCollection $excludeFiles, bool $pathCoverage, bool $includeUncoveredFiles, bool $processUncoveredFiles, bool $ignoreDeprecatedCodeUnits, bool $disableCodeCoverageIgnore, ?\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Clover $clover, ?\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Crap4j $crap4j, ?\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Html $html, ?\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php $php, ?\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Text $text, ?\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Xml $xml)
    {
    }
    public function hasNonEmptyListOfFilesToBeIncludedInCodeCoverageReport() : bool
    {
    }
    public function directories() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Filter\DirectoryCollection
    {
    }
    public function files() : \PHPUnit\TextUI\XmlConfiguration\FileCollection
    {
    }
    public function excludeDirectories() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Filter\DirectoryCollection
    {
    }
    public function excludeFiles() : \PHPUnit\TextUI\XmlConfiguration\FileCollection
    {
    }
    public function pathCoverage() : bool
    {
    }
    public function includeUncoveredFiles() : bool
    {
    }
    public function ignoreDeprecatedCodeUnits() : bool
    {
    }
    public function disableCodeCoverageIgnore() : bool
    {
    }
    public function processUncoveredFiles() : bool
    {
    }
    /**
     * @psalm-assert-if-true !null $this->clover
     */
    public function hasClover() : bool
    {
    }
    public function clover() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Clover
    {
    }
    /**
     * @psalm-assert-if-true !null $this->crap4j
     */
    public function hasCrap4j() : bool
    {
    }
    public function crap4j() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Crap4j
    {
    }
    /**
     * @psalm-assert-if-true !null $this->html
     */
    public function hasHtml() : bool
    {
    }
    public function html() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Html
    {
    }
    /**
     * @psalm-assert-if-true !null $this->php
     */
    public function hasPhp() : bool
    {
    }
    public function php() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php
    {
    }
    /**
     * @psalm-assert-if-true !null $this->text
     */
    public function hasText() : bool
    {
    }
    public function text() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Text
    {
    }
    /**
     * @psalm-assert-if-true !null $this->xml
     */
    public function hasXml() : bool
    {
    }
    public function xml() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Xml
    {
    }
}
namespace PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Filter;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class DirectoryCollectionIterator implements \Countable, \Iterator
{
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Filter\DirectoryCollection $directories)
    {
    }
    public function count() : int
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
    public function current() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Filter\Directory
    {
    }
    public function next() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Directory
{
    public function __construct(string $path, string $prefix, string $suffix, string $group)
    {
    }
    public function path() : string
    {
    }
    public function prefix() : string
    {
    }
    public function suffix() : string
    {
    }
    public function group() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class DirectoryCollection implements \Countable, \IteratorAggregate
{
    /**
     * @param Directory[] $directories
     */
    public static function fromArray(array $directories) : self
    {
    }
    /**
     * @return Directory[]
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Filter\DirectoryCollectionIterator
    {
    }
}
namespace PHPUnit\TextUI\XmlConfiguration;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Generator
{
    public function generateDefaultConfiguration(string $phpunitVersion, string $bootstrapScript, string $testsDirectory, string $srcDirectory) : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Migrator
{
    /**
     * @throws MigrationBuilderException
     * @throws MigrationException
     * @throws Exception
     * @throws XmlException
     */
    public function migrate(string $filename) : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MigrationException extends \RuntimeException implements \PHPUnit\Exception
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MigrationBuilderException extends \RuntimeException implements \PHPUnit\Exception
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MigrationBuilder
{
    /**
     * @throws MigrationBuilderException
     */
    public function build(string $fromVersion) : array
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface Migration
{
    public function migrate(\DOMDocument $document) : void;
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class RemoveEmptyFilter implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    /**
     * @throws MigrationException
     */
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MoveAttributesFromFilterWhitelistToCoverage implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    /**
     * @throws MigrationException
     */
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MoveWhitelistExcludesToCoverage implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    /**
     * @throws MigrationException
     */
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract class LogToReportMigration implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    /**
     * @throws MigrationException
     */
    public function migrate(\DOMDocument $document) : void
    {
    }
    protected function migrateAttributes(\DOMElement $src, \DOMElement $dest, array $attributes) : void
    {
    }
    protected abstract function forType() : string;
    protected abstract function toReportFormat(\DOMElement $logNode) : \DOMElement;
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CoverageXmlToReport extends \PHPUnit\TextUI\XmlConfiguration\LogToReportMigration
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class IntroduceCoverageElement implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CoverageHtmlToReport extends \PHPUnit\TextUI\XmlConfiguration\LogToReportMigration
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CoverageCloverToReport extends \PHPUnit\TextUI\XmlConfiguration\LogToReportMigration
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CoverageTextToReport extends \PHPUnit\TextUI\XmlConfiguration\LogToReportMigration
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CoveragePhpToReport extends \PHPUnit\TextUI\XmlConfiguration\LogToReportMigration
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CoverageCrap4jToReport extends \PHPUnit\TextUI\XmlConfiguration\LogToReportMigration
{
}
final class UpdateSchemaLocationTo93 implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MoveAttributesFromRootToCoverage implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    /**
     * @throws MigrationException
     */
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MoveWhitelistDirectoriesToCoverage implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    /**
     * @throws MigrationException
     */
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ConvertLogTypes implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
final class RemoveCacheTokensAttribute implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
namespace PHPUnit\TextUI\XmlConfiguration\Logging;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Junit
{
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\File $target)
    {
    }
    public function target() : \PHPUnit\TextUI\XmlConfiguration\File
    {
    }
}
namespace PHPUnit\TextUI\XmlConfiguration\Logging\TestDox;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Xml
{
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\File $target)
    {
    }
    public function target() : \PHPUnit\TextUI\XmlConfiguration\File
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Html
{
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\File $target)
    {
    }
    public function target() : \PHPUnit\TextUI\XmlConfiguration\File
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Text
{
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\File $target)
    {
    }
    public function target() : \PHPUnit\TextUI\XmlConfiguration\File
    {
    }
}
namespace PHPUnit\TextUI\XmlConfiguration\Logging;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class TeamCity
{
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\File $target)
    {
    }
    public function target() : \PHPUnit\TextUI\XmlConfiguration\File
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Logging
{
    public function __construct(?\PHPUnit\TextUI\XmlConfiguration\Logging\Junit $junit, ?\PHPUnit\TextUI\XmlConfiguration\Logging\Text $text, ?\PHPUnit\TextUI\XmlConfiguration\Logging\TeamCity $teamCity, ?\PHPUnit\TextUI\XmlConfiguration\Logging\TestDox\Html $testDoxHtml, ?\PHPUnit\TextUI\XmlConfiguration\Logging\TestDox\Text $testDoxText, ?\PHPUnit\TextUI\XmlConfiguration\Logging\TestDox\Xml $testDoxXml)
    {
    }
    public function hasJunit() : bool
    {
    }
    public function junit() : \PHPUnit\TextUI\XmlConfiguration\Logging\Junit
    {
    }
    public function hasText() : bool
    {
    }
    public function text() : \PHPUnit\TextUI\XmlConfiguration\Logging\Text
    {
    }
    public function hasTeamCity() : bool
    {
    }
    public function teamCity() : \PHPUnit\TextUI\XmlConfiguration\Logging\TeamCity
    {
    }
    public function hasTestDoxHtml() : bool
    {
    }
    public function testDoxHtml() : \PHPUnit\TextUI\XmlConfiguration\Logging\TestDox\Html
    {
    }
    public function hasTestDoxText() : bool
    {
    }
    public function testDoxText() : \PHPUnit\TextUI\XmlConfiguration\Logging\TestDox\Text
    {
    }
    public function hasTestDoxXml() : bool
    {
    }
    public function testDoxXml() : \PHPUnit\TextUI\XmlConfiguration\Logging\TestDox\Xml
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Text
{
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\File $target)
    {
    }
    public function target() : \PHPUnit\TextUI\XmlConfiguration\File
    {
    }
}
namespace PHPUnit\TextUI\XmlConfiguration;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class PHPUnit
{
    public function __construct(bool $cacheResult, ?string $cacheResultFile, $columns, string $colors, bool $stderr, bool $noInteraction, bool $verbose, bool $reverseDefectList, bool $convertDeprecationsToExceptions, bool $convertErrorsToExceptions, bool $convertNoticesToExceptions, bool $convertWarningsToExceptions, bool $forceCoversAnnotation, ?string $bootstrap, bool $processIsolation, bool $failOnEmptyTestSuite, bool $failOnIncomplete, bool $failOnRisky, bool $failOnSkipped, bool $failOnWarning, bool $stopOnDefect, bool $stopOnError, bool $stopOnFailure, bool $stopOnWarning, bool $stopOnIncomplete, bool $stopOnRisky, bool $stopOnSkipped, ?string $extensionsDirectory, ?string $testSuiteLoaderClass, ?string $testSuiteLoaderFile, ?string $printerClass, ?string $printerFile, bool $beStrictAboutChangesToGlobalState, bool $beStrictAboutOutputDuringTests, bool $beStrictAboutResourceUsageDuringSmallTests, bool $beStrictAboutTestsThatDoNotTestAnything, bool $beStrictAboutTodoAnnotatedTests, bool $beStrictAboutCoversAnnotation, bool $enforceTimeLimit, int $defaultTimeLimit, int $timeoutForSmallTests, int $timeoutForMediumTests, int $timeoutForLargeTests, ?string $defaultTestSuite, int $executionOrder, bool $resolveDependencies, bool $defectsFirst, bool $backupGlobals, bool $backupStaticAttributes, bool $registerMockObjectsFromTestArgumentsRecursively, bool $conflictBetweenPrinterClassAndTestdox)
    {
    }
    public function cacheResult() : bool
    {
    }
    public function hasCacheResultFile() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function cacheResultFile() : string
    {
    }
    public function columns()
    {
    }
    public function colors() : string
    {
    }
    public function stderr() : bool
    {
    }
    public function noInteraction() : bool
    {
    }
    public function verbose() : bool
    {
    }
    public function reverseDefectList() : bool
    {
    }
    public function convertDeprecationsToExceptions() : bool
    {
    }
    public function convertErrorsToExceptions() : bool
    {
    }
    public function convertNoticesToExceptions() : bool
    {
    }
    public function convertWarningsToExceptions() : bool
    {
    }
    public function forceCoversAnnotation() : bool
    {
    }
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
    public function failOnEmptyTestSuite() : bool
    {
    }
    public function failOnIncomplete() : bool
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
    public function stopOnError() : bool
    {
    }
    public function stopOnFailure() : bool
    {
    }
    public function stopOnWarning() : bool
    {
    }
    public function stopOnIncomplete() : bool
    {
    }
    public function stopOnRisky() : bool
    {
    }
    public function stopOnSkipped() : bool
    {
    }
    public function hasExtensionsDirectory() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function extensionsDirectory() : string
    {
    }
    /**
     * @deprecated see https://github.com/sebastianbergmann/phpunit/issues/4039
     */
    public function hasTestSuiteLoaderClass() : bool
    {
    }
    /**
     * @throws Exception
     *
     * @deprecated see https://github.com/sebastianbergmann/phpunit/issues/4039
     */
    public function testSuiteLoaderClass() : string
    {
    }
    /**
     * @deprecated see https://github.com/sebastianbergmann/phpunit/issues/4039
     */
    public function hasTestSuiteLoaderFile() : bool
    {
    }
    /**
     * @throws Exception
     *
     * @deprecated see https://github.com/sebastianbergmann/phpunit/issues/4039
     */
    public function testSuiteLoaderFile() : string
    {
    }
    public function hasPrinterClass() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function printerClass() : string
    {
    }
    public function hasPrinterFile() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function printerFile() : string
    {
    }
    public function beStrictAboutChangesToGlobalState() : bool
    {
    }
    public function beStrictAboutOutputDuringTests() : bool
    {
    }
    public function beStrictAboutResourceUsageDuringSmallTests() : bool
    {
    }
    public function beStrictAboutTestsThatDoNotTestAnything() : bool
    {
    }
    public function beStrictAboutTodoAnnotatedTests() : bool
    {
    }
    public function beStrictAboutCoversAnnotation() : bool
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
    public function backupStaticAttributes() : bool
    {
    }
    public function registerMockObjectsFromTestArgumentsRecursively() : bool
    {
    }
    public function conflictBetweenPrinterClassAndTestdox() : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ExtensionHandler
{
    public function createHookInstance(\PHPUnit\TextUI\XmlConfiguration\Extension $extension) : \PHPUnit\Runner\Hook
    {
    }
    public function createTestListenerInstance(\PHPUnit\TextUI\XmlConfiguration\Extension $extension) : \PHPUnit\Framework\TestListener
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Extension
{
    /**
     * @psalm-param class-string $className
     */
    public function __construct(string $className, string $sourceFile, array $arguments)
    {
    }
    /**
     * @psalm-return class-string
     */
    public function className() : string
    {
    }
    public function hasSourceFile() : bool
    {
    }
    public function sourceFile() : string
    {
    }
    public function hasArguments() : bool
    {
    }
    public function arguments() : array
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ExtensionCollectionIterator implements \Countable, \Iterator
{
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\ExtensionCollection $extensions)
    {
    }
    public function count() : int
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
    public function current() : \PHPUnit\TextUI\XmlConfiguration\Extension
    {
    }
    public function next() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class ExtensionCollection implements \IteratorAggregate
{
    /**
     * @param Extension[] $extensions
     */
    public static function fromArray(array $extensions) : self
    {
    }
    /**
     * @return Extension[]
     */
    public function asArray() : array
    {
    }
    public function getIterator() : \PHPUnit\TextUI\XmlConfiguration\ExtensionCollectionIterator
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Configuration
{
    public function __construct(string $filename, \PHPUnit\Util\Xml\ValidationResult $validationResult, \PHPUnit\TextUI\XmlConfiguration\ExtensionCollection $extensions, \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\CodeCoverage $codeCoverage, \PHPUnit\TextUI\XmlConfiguration\Groups $groups, \PHPUnit\TextUI\XmlConfiguration\Groups $testdoxGroups, \PHPUnit\TextUI\XmlConfiguration\ExtensionCollection $listeners, \PHPUnit\TextUI\XmlConfiguration\Logging\Logging $logging, \PHPUnit\TextUI\XmlConfiguration\Php $php, \PHPUnit\TextUI\XmlConfiguration\PHPUnit $phpunit, \PHPUnit\TextUI\XmlConfiguration\TestSuiteCollection $testSuite)
    {
    }
    public function filename() : string
    {
    }
    public function hasValidationErrors() : bool
    {
    }
    public function validationErrors() : string
    {
    }
    public function extensions() : \PHPUnit\TextUI\XmlConfiguration\ExtensionCollection
    {
    }
    public function codeCoverage() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\CodeCoverage
    {
    }
    public function groups() : \PHPUnit\TextUI\XmlConfiguration\Groups
    {
    }
    public function testdoxGroups() : \PHPUnit\TextUI\XmlConfiguration\Groups
    {
    }
    public function listeners() : \PHPUnit\TextUI\XmlConfiguration\ExtensionCollection
    {
    }
    public function logging() : \PHPUnit\TextUI\XmlConfiguration\Logging\Logging
    {
    }
    public function php() : \PHPUnit\TextUI\XmlConfiguration\Php
    {
    }
    public function phpunit() : \PHPUnit\TextUI\XmlConfiguration\PHPUnit
    {
    }
    public function testSuite() : \PHPUnit\TextUI\XmlConfiguration\TestSuiteCollection
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Loader
{
    /**
     * @throws Exception
     */
    public function load(string $filename) : \PHPUnit\TextUI\XmlConfiguration\Configuration
    {
    }
    public function logging(string $filename, \DOMXPath $xpath) : \PHPUnit\TextUI\XmlConfiguration\Logging\Logging
    {
    }
    public function legacyLogging(string $filename, \DOMXPath $xpath) : \PHPUnit\TextUI\XmlConfiguration\Logging\Logging
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Exception extends \RuntimeException implements \PHPUnit\Exception
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class FileCollectionIterator implements \Countable, \Iterator
{
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\FileCollection $files)
    {
    }
    public function count() : int
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
    public function current() : \PHPUnit\TextUI\XmlConfiguration\File
    {
    }
    public function next() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class DirectoryCollectionIterator implements \Countable, \Iterator
{
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\DirectoryCollection $directories)
    {
    }
    public function count() : int
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
    public function current() : \PHPUnit\TextUI\XmlConfiguration\Directory
    {
    }
    public function next() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class FileCollection implements \Countable, \IteratorAggregate
{
    /**
     * @param File[] $files
     */
    public static function fromArray(array $files) : self
    {
    }
    /**
     * @return File[]
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \PHPUnit\TextUI\XmlConfiguration\FileCollectionIterator
    {
    }
    public function isEmpty() : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Directory
{
    public function __construct(string $path)
    {
    }
    public function path() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class File
{
    public function __construct(string $path)
    {
    }
    public function path() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class DirectoryCollection implements \Countable, \IteratorAggregate
{
    /**
     * @param Directory[] $directories
     */
    public static function fromArray(array $directories) : self
    {
    }
    /**
     * @return Directory[]
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \PHPUnit\TextUI\XmlConfiguration\DirectoryCollectionIterator
    {
    }
    public function isEmpty() : bool
    {
    }
}
namespace PHPUnit\TextUI;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Help
{
    public function __construct(?int $width = null, ?bool $withColor = null)
    {
    }
    /**
     * Write the help file to the CLI, adapting width and colors to the console.
     */
    public function writeToConsole() : void
    {
    }
}
/**
 * A TestRunner for the Command Line Interface (CLI)
 * PHP SAPI Module.
 */
class Command
{
    /**
     * @var array<string,mixed>
     */
    protected $arguments = [];
    /**
     * @var array<string,mixed>
     */
    protected $longOptions = [];
    /**
     * @throws Exception
     */
    public static function main(bool $exit = true) : int
    {
    }
    /**
     * @throws Exception
     */
    public function run(array $argv, bool $exit = true) : int
    {
    }
    /**
     * Create a TestRunner, override in subclasses.
     */
    protected function createRunner() : \PHPUnit\TextUI\TestRunner
    {
    }
    /**
     * Handles the command-line arguments.
     *
     * A child class of PHPUnit\TextUI\Command can hook into the argument
     * parsing by adding the switch(es) to the $longOptions array and point to a
     * callback method that handles the switch(es) in the child class like this
     *
     * <code>
     * <?php
     * class MyCommand extends PHPUnit\TextUI\Command
     * {
     *     public function __construct()
     *     {
     *         // my-switch won't accept a value, it's an on/off
     *         $this->longOptions['my-switch'] = 'myHandler';
     *         // my-secondswitch will accept a value - note the equals sign
     *         $this->longOptions['my-secondswitch='] = 'myOtherHandler';
     *     }
     *
     *     // --my-switch  -> myHandler()
     *     protected function myHandler()
     *     {
     *     }
     *
     *     // --my-secondswitch foo -> myOtherHandler('foo')
     *     protected function myOtherHandler ($value)
     *     {
     *     }
     *
     *     // You will also need this - the static keyword in the
     *     // PHPUnit\TextUI\Command will mean that it'll be
     *     // PHPUnit\TextUI\Command that gets instantiated,
     *     // not MyCommand
     *     public static function main($exit = true)
     *     {
     *         $command = new static;
     *
     *         return $command->run($_SERVER['argv'], $exit);
     *     }
     *
     * }
     * </code>
     *
     * @throws Exception
     */
    protected function handleArguments(array $argv) : void
    {
    }
    /**
     * Handles the loading of the PHPUnit\Runner\TestSuiteLoader implementation.
     *
     * @deprecated see https://github.com/sebastianbergmann/phpunit/issues/4039
     */
    protected function handleLoader(string $loaderClass, string $loaderFile = '') : ?\PHPUnit\Runner\TestSuiteLoader
    {
    }
    /**
     * Handles the loading of the PHPUnit\Util\Printer implementation.
     *
     * @return null|Printer|string
     */
    protected function handlePrinter(string $printerClass, string $printerFile = '')
    {
    }
    /**
     * Loads a bootstrap file.
     */
    protected function handleBootstrap(string $filename) : void
    {
    }
    protected function handleVersionCheck() : void
    {
    }
    /**
     * Show the help message.
     */
    protected function showHelp() : void
    {
    }
    /**
     * Custom callback for test suite discovery.
     */
    protected function handleCustomTestSuite() : void
    {
    }
}
namespace PHPUnit\TextUI\CliArguments;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Builder
{
    public function fromParameters(array $parameters, array $additionalLongOptions) : \PHPUnit\TextUI\CliArguments\Configuration
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Mapper
{
    public function mapToLegacyArray(\PHPUnit\TextUI\CliArguments\Configuration $arguments) : array
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Configuration
{
    /**
     * @param null|int|string $columns
     */
    public function __construct(?string $argument, ?string $atLeastVersion, ?bool $backupGlobals, ?bool $backupStaticAttributes, ?bool $beStrictAboutChangesToGlobalState, ?bool $beStrictAboutResourceUsageDuringSmallTests, ?string $bootstrap, ?bool $cacheResult, ?string $cacheResultFile, ?bool $checkVersion, ?string $colors, $columns, ?string $configuration, ?string $coverageClover, ?string $coverageCrap4J, ?string $coverageHtml, ?string $coveragePhp, ?string $coverageText, ?bool $coverageTextShowUncoveredFiles, ?bool $coverageTextShowOnlySummary, ?string $coverageXml, ?bool $pathCoverage, ?bool $debug, ?int $defaultTimeLimit, ?bool $disableCodeCoverageIgnore, ?bool $disallowTestOutput, ?bool $disallowTodoAnnotatedTests, ?bool $enforceTimeLimit, ?array $excludeGroups, ?int $executionOrder, ?int $executionOrderDefects, ?array $extensions, ?array $unavailableExtensions, ?bool $failOnEmptyTestSuite, ?bool $failOnIncomplete, ?bool $failOnRisky, ?bool $failOnSkipped, ?bool $failOnWarning, ?string $filter, ?bool $generateConfiguration, ?bool $migrateConfiguration, ?array $groups, ?bool $help, ?string $includePath, ?array $iniSettings, ?string $junitLogfile, ?bool $listGroups, ?bool $listSuites, ?bool $listTests, ?string $listTestsXml, ?string $loader, ?bool $noCoverage, ?bool $noExtensions, ?bool $noInteraction, ?bool $noLogging, ?string $printer, ?bool $processIsolation, ?int $randomOrderSeed, ?int $repeat, ?bool $reportUselessTests, ?bool $resolveDependencies, ?bool $reverseList, ?bool $stderr, ?bool $strictCoverage, ?bool $stopOnDefect, ?bool $stopOnError, ?bool $stopOnFailure, ?bool $stopOnIncomplete, ?bool $stopOnRisky, ?bool $stopOnSkipped, ?bool $stopOnWarning, ?string $teamcityLogfile, ?array $testdoxExcludeGroups, ?array $testdoxGroups, ?string $testdoxHtmlFile, ?string $testdoxTextFile, ?string $testdoxXmlFile, ?array $testSuffixes, ?string $testSuite, array $unrecognizedOptions, ?string $unrecognizedOrderBy, ?bool $useDefaultConfiguration, ?bool $verbose, ?bool $version, ?array $coverageFilter, ?string $xdebugFilterFile)
    {
    }
    public function hasArgument() : bool
    {
    }
    public function argument() : string
    {
    }
    public function hasAtLeastVersion() : bool
    {
    }
    public function atLeastVersion() : string
    {
    }
    public function hasBackupGlobals() : bool
    {
    }
    public function backupGlobals() : bool
    {
    }
    public function hasBackupStaticAttributes() : bool
    {
    }
    public function backupStaticAttributes() : bool
    {
    }
    public function hasBeStrictAboutChangesToGlobalState() : bool
    {
    }
    public function beStrictAboutChangesToGlobalState() : bool
    {
    }
    public function hasBeStrictAboutResourceUsageDuringSmallTests() : bool
    {
    }
    public function beStrictAboutResourceUsageDuringSmallTests() : bool
    {
    }
    public function hasBootstrap() : bool
    {
    }
    public function bootstrap() : string
    {
    }
    public function hasCacheResult() : bool
    {
    }
    public function cacheResult() : bool
    {
    }
    public function hasCacheResultFile() : bool
    {
    }
    public function cacheResultFile() : string
    {
    }
    public function hasCheckVersion() : bool
    {
    }
    public function checkVersion() : bool
    {
    }
    public function hasColors() : bool
    {
    }
    public function colors() : string
    {
    }
    public function hasColumns() : bool
    {
    }
    public function columns()
    {
    }
    public function hasConfiguration() : bool
    {
    }
    public function configuration() : string
    {
    }
    public function hasCoverageFilter() : bool
    {
    }
    public function coverageFilter() : array
    {
    }
    public function hasCoverageClover() : bool
    {
    }
    public function coverageClover() : string
    {
    }
    public function hasCoverageCrap4J() : bool
    {
    }
    public function coverageCrap4J() : string
    {
    }
    public function hasCoverageHtml() : bool
    {
    }
    public function coverageHtml() : string
    {
    }
    public function hasCoveragePhp() : bool
    {
    }
    public function coveragePhp() : string
    {
    }
    public function hasCoverageText() : bool
    {
    }
    public function coverageText() : string
    {
    }
    public function hasCoverageTextShowUncoveredFiles() : bool
    {
    }
    public function coverageTextShowUncoveredFiles() : bool
    {
    }
    public function hasCoverageTextShowOnlySummary() : bool
    {
    }
    public function coverageTextShowOnlySummary() : bool
    {
    }
    public function hasCoverageXml() : bool
    {
    }
    public function coverageXml() : string
    {
    }
    public function hasPathCoverage() : bool
    {
    }
    public function pathCoverage() : bool
    {
    }
    public function hasDebug() : bool
    {
    }
    public function debug() : bool
    {
    }
    public function hasDefaultTimeLimit() : bool
    {
    }
    public function defaultTimeLimit() : int
    {
    }
    public function hasDisableCodeCoverageIgnore() : bool
    {
    }
    public function disableCodeCoverageIgnore() : bool
    {
    }
    public function hasDisallowTestOutput() : bool
    {
    }
    public function disallowTestOutput() : bool
    {
    }
    public function hasDisallowTodoAnnotatedTests() : bool
    {
    }
    public function disallowTodoAnnotatedTests() : bool
    {
    }
    public function hasEnforceTimeLimit() : bool
    {
    }
    public function enforceTimeLimit() : bool
    {
    }
    public function hasExcludeGroups() : bool
    {
    }
    public function excludeGroups() : array
    {
    }
    public function hasExecutionOrder() : bool
    {
    }
    public function executionOrder() : int
    {
    }
    public function hasExecutionOrderDefects() : bool
    {
    }
    public function executionOrderDefects() : int
    {
    }
    public function hasFailOnEmptyTestSuite() : bool
    {
    }
    public function failOnEmptyTestSuite() : bool
    {
    }
    public function hasFailOnIncomplete() : bool
    {
    }
    public function failOnIncomplete() : bool
    {
    }
    public function hasFailOnRisky() : bool
    {
    }
    public function failOnRisky() : bool
    {
    }
    public function hasFailOnSkipped() : bool
    {
    }
    public function failOnSkipped() : bool
    {
    }
    public function hasFailOnWarning() : bool
    {
    }
    public function failOnWarning() : bool
    {
    }
    public function hasFilter() : bool
    {
    }
    public function filter() : string
    {
    }
    public function hasGenerateConfiguration() : bool
    {
    }
    public function generateConfiguration() : bool
    {
    }
    public function hasMigrateConfiguration() : bool
    {
    }
    public function migrateConfiguration() : bool
    {
    }
    public function hasGroups() : bool
    {
    }
    public function groups() : array
    {
    }
    public function hasHelp() : bool
    {
    }
    public function help() : bool
    {
    }
    public function hasIncludePath() : bool
    {
    }
    public function includePath() : string
    {
    }
    public function hasIniSettings() : bool
    {
    }
    public function iniSettings() : array
    {
    }
    public function hasJunitLogfile() : bool
    {
    }
    public function junitLogfile() : string
    {
    }
    public function hasListGroups() : bool
    {
    }
    public function listGroups() : bool
    {
    }
    public function hasListSuites() : bool
    {
    }
    public function listSuites() : bool
    {
    }
    public function hasListTests() : bool
    {
    }
    public function listTests() : bool
    {
    }
    public function hasListTestsXml() : bool
    {
    }
    public function listTestsXml() : string
    {
    }
    public function hasLoader() : bool
    {
    }
    public function loader() : string
    {
    }
    public function hasNoCoverage() : bool
    {
    }
    public function noCoverage() : bool
    {
    }
    public function hasNoExtensions() : bool
    {
    }
    public function noExtensions() : bool
    {
    }
    public function hasExtensions() : bool
    {
    }
    public function extensions() : array
    {
    }
    public function hasUnavailableExtensions() : bool
    {
    }
    public function unavailableExtensions() : array
    {
    }
    public function hasNoInteraction() : bool
    {
    }
    public function noInteraction() : bool
    {
    }
    public function hasNoLogging() : bool
    {
    }
    public function noLogging() : bool
    {
    }
    public function hasPrinter() : bool
    {
    }
    public function printer() : string
    {
    }
    public function hasProcessIsolation() : bool
    {
    }
    public function processIsolation() : bool
    {
    }
    public function hasRandomOrderSeer() : bool
    {
    }
    public function randomOrderSeed() : int
    {
    }
    public function hasRepeat() : bool
    {
    }
    public function repeat() : int
    {
    }
    public function hasReportUselessTests() : bool
    {
    }
    public function reportUselessTests() : bool
    {
    }
    public function hasResolveDependencies() : bool
    {
    }
    public function resolveDependencies() : bool
    {
    }
    public function hasReverseList() : bool
    {
    }
    public function reverseList() : bool
    {
    }
    public function hasStderr() : bool
    {
    }
    public function stderr() : bool
    {
    }
    public function hasStrictCoverage() : bool
    {
    }
    public function strictCoverage() : bool
    {
    }
    public function hasStopOnDefect() : bool
    {
    }
    public function stopOnDefect() : bool
    {
    }
    public function hasStopOnError() : bool
    {
    }
    public function stopOnError() : bool
    {
    }
    public function hasStopOnFailure() : bool
    {
    }
    public function stopOnFailure() : bool
    {
    }
    public function hasStopOnIncomplete() : bool
    {
    }
    public function stopOnIncomplete() : bool
    {
    }
    public function hasStopOnRisky() : bool
    {
    }
    public function stopOnRisky() : bool
    {
    }
    public function hasStopOnSkipped() : bool
    {
    }
    public function stopOnSkipped() : bool
    {
    }
    public function hasStopOnWarning() : bool
    {
    }
    public function stopOnWarning() : bool
    {
    }
    public function hasTeamcityLogfile() : bool
    {
    }
    public function teamcityLogfile() : string
    {
    }
    public function hasTestdoxExcludeGroups() : bool
    {
    }
    public function testdoxExcludeGroups() : array
    {
    }
    public function hasTestdoxGroups() : bool
    {
    }
    public function testdoxGroups() : array
    {
    }
    public function hasTestdoxHtmlFile() : bool
    {
    }
    public function testdoxHtmlFile() : string
    {
    }
    public function hasTestdoxTextFile() : bool
    {
    }
    public function testdoxTextFile() : string
    {
    }
    public function hasTestdoxXmlFile() : bool
    {
    }
    public function testdoxXmlFile() : string
    {
    }
    public function hasTestSuffixes() : bool
    {
    }
    public function testSuffixes() : array
    {
    }
    public function hasTestSuite() : bool
    {
    }
    public function testSuite() : string
    {
    }
    public function unrecognizedOptions() : array
    {
    }
    public function hasUnrecognizedOrderBy() : bool
    {
    }
    public function unrecognizedOrderBy() : string
    {
    }
    public function hasUseDefaultConfiguration() : bool
    {
    }
    public function useDefaultConfiguration() : bool
    {
    }
    public function hasVerbose() : bool
    {
    }
    public function verbose() : bool
    {
    }
    public function hasVersion() : bool
    {
    }
    public function version() : bool
    {
    }
    public function hasXdebugFilterFile() : bool
    {
    }
    public function xdebugFilterFile() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Exception extends \RuntimeException implements \PHPUnit\Exception
{
}
namespace PHPUnit\TextUI;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Exception extends \RuntimeException implements \PHPUnit\Exception
{
}