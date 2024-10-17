<?php

namespace Yoast\PHPUnitPolyfills\TestListeners;

/**
 * Renamed snake_case TestListener method collection used by the TestListenerDefaultImplementation traits.
 */
trait TestListenerSnakeCaseMethods
{
    /**
     * An error occurred.
     *
     * @param Test                $test Test object.
     * @param Exception|Throwable $e    Instance of the error encountered.
     * @param float               $time Execution time of this test.
     *
     * @return void
     */
    public function add_error($test, $e, $time)
    {
    }
    /**
     * A warning occurred.
     *
     * This method is only functional in PHPUnit 6.0 and above.
     *
     * @param Test    $test Test object.
     * @param Warning $e    Instance of the warning encountered.
     * @param float   $time Execution time of this test.
     *
     * @return void
     */
    public function add_warning($test, $e, $time)
    {
    }
    /**
     * A failure occurred.
     *
     * @param Test                 $test Test object.
     * @param AssertionFailedError $e    Instance of the assertion failure exception encountered.
     * @param float                $time Execution time of this test.
     *
     * @return void
     */
    public function add_failure($test, $e, $time)
    {
    }
    /**
     * Incomplete test.
     *
     * @param Test                $test Test object.
     * @param Exception|Throwable $e    Instance of the incomplete test exception.
     * @param float               $time Execution time of this test.
     *
     * @return void
     */
    public function add_incomplete_test($test, $e, $time)
    {
    }
    /**
     * Risky test.
     *
     * @param Test                $test Test object.
     * @param Exception|Throwable $e    Instance of the risky test exception.
     * @param float               $time Execution time of this test.
     *
     * @return void
     */
    public function add_risky_test($test, $e, $time)
    {
    }
    /**
     * Skipped test.
     *
     * @param Test                $test Test object.
     * @param Exception|Throwable $e    Instance of the skipped test exception.
     * @param float               $time Execution time of this test.
     *
     * @return void
     */
    public function add_skipped_test($test, $e, $time)
    {
    }
    /**
     * A test suite started.
     *
     * @param TestSuite $suite Test suite object.
     *
     * @return void
     */
    public function start_test_suite($suite)
    {
    }
    /**
     * A test suite ended.
     *
     * @param TestSuite $suite Test suite object.
     *
     * @return void
     */
    public function end_test_suite($suite)
    {
    }
    /**
     * A test started.
     *
     * @param Test $test Test object.
     *
     * @return void
     */
    public function start_test($test)
    {
    }
    /**
     * A test ended.
     *
     * @param Test  $test Test object.
     * @param float $time Execution time of this test.
     *
     * @return void
     */
    public function end_test($test, $time)
    {
    }
}
/**
 * Basic TestListener implementation for use with PHPUnit 6.x.
 *
 * This TestListener trait uses renamed (snakecase) methods for all standard methods in
 * a TestListener to get round the method signature changes in various PHPUnit versions.
 *
 * When using this TestListener trait, the snake_case method names need to be used to implement
 * the listener functionality.
 */
trait TestListenerDefaultImplementation
{
    use \Yoast\PHPUnitPolyfills\TestListeners\TestListenerSnakeCaseMethods;
    /**
     * An error occurred.
     *
     * @param Test      $test Test object.
     * @param Exception $e    Instance of the error encountered.
     * @param float     $time Execution time of this test.
     *
     * @return void
     */
    public function addError(\PHPUnit\Framework\Test $test, \Exception $e, $time)
    {
    }
    /**
     * A warning occurred.
     *
     * This method is only functional in PHPUnit 6.0 and above.
     *
     * @param Test    $test Test object.
     * @param Warning $e    Instance of the warning encountered.
     * @param float   $time Execution time of this test.
     *
     * @return void
     */
    public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, $time)
    {
    }
    /**
     * A failure occurred.
     *
     * @param Test                 $test Test object.
     * @param AssertionFailedError $e    Instance of the assertion failure exception encountered.
     * @param float                $time Execution time of this test.
     *
     * @return void
     */
    public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, $time)
    {
    }
    /**
     * Incomplete test.
     *
     * @param Test      $test Test object.
     * @param Exception $e    Instance of the incomplete test exception.
     * @param float     $time Execution time of this test.
     *
     * @return void
     */
    public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Exception $e, $time)
    {
    }
    /**
     * Risky test.
     *
     * @param Test      $test Test object.
     * @param Exception $e    Instance of the risky test exception.
     * @param float     $time Execution time of this test.
     *
     * @return void
     */
    public function addRiskyTest(\PHPUnit\Framework\Test $test, \Exception $e, $time)
    {
    }
    /**
     * Skipped test.
     *
     * @param Test      $test Test object.
     * @param Exception $e    Instance of the skipped test exception.
     * @param float     $time Execution time of this test.
     *
     * @return void
     */
    public function addSkippedTest(\PHPUnit\Framework\Test $test, \Exception $e, $time)
    {
    }
    /**
     * A test suite started.
     *
     * @param TestSuite $suite Test suite object.
     *
     * @return void
     */
    public function startTestSuite(\PHPUnit\Framework\TestSuite $suite)
    {
    }
    /**
     * A test suite ended.
     *
     * @param TestSuite $suite Test suite object.
     *
     * @return void
     */
    public function endTestSuite(\PHPUnit\Framework\TestSuite $suite)
    {
    }
    /**
     * A test started.
     *
     * @param Test $test Test object.
     *
     * @return void
     */
    public function startTest(\PHPUnit\Framework\Test $test)
    {
    }
    /**
     * A test ended.
     *
     * @param Test  $test Test object.
     * @param float $time Execution time of this test.
     *
     * @return void
     */
    public function endTest(\PHPUnit\Framework\Test $test, $time)
    {
    }
}
namespace Yoast\PHPUnitPolyfills\Polyfills;

/**
 * Polyfill the `Assert::assertFileEqualsCanonicalizing()`, `Assert::assertFileEqualsIgnoringCase()`,
 * `Assert::assertStringEqualsFileCanonicalizing()`, `Assert::assertStringEqualsFileIgnoringCase()`,
 * `Assert::assertFileNotEqualsCanonicalizing()`, `Assert::assertFileNotEqualsIgnoringCase()`,
 * `Assert::assertStringNotEqualsFileCanonicalizing()` and `Assert::assertStringNotEqualsFileIgnoringCase()`
 * as alternative to using `Assert::assertFileEquals()` etc. with optional parameters
 *
 * Introduced in PHPUnit 8.5.0.
 * Use of Assert::assertFileEquals() and Assert::assertFileNotEquals() with these optional parameters was
 * deprecated in PHPUnit 8.5.0 and removed in PHPUnit 9.0.0.
 *
 * @link https://github.com/sebastianbergmann/phpunit/issues/3949
 * @link https://github.com/sebastianbergmann/phpunit/issues/3951
 */
trait AssertFileEqualsSpecializations
{
    /**
     * Asserts that the contents of one file is equal to the contents of another
     * file (canonicalizing).
     *
     * @param string $expected Path to file with expected content.
     * @param string $actual   Path to file with actual content.
     * @param string $message  Optional failure message to display.
     *
     * @return void
     */
    public static final function assertFileEqualsCanonicalizing($expected, $actual, $message = '')
    {
    }
    /**
     * Asserts that the contents of one file is equal to the contents of another
     * file (ignoring case).
     *
     * @param string $expected Path to file with expected content.
     * @param string $actual   Path to file with actual content.
     * @param string $message  Optional failure message to display.
     *
     * @return void
     */
    public static final function assertFileEqualsIgnoringCase($expected, $actual, $message = '')
    {
    }
    /**
     * Asserts that the contents of one file is not equal to the contents of another
     * file (canonicalizing).
     *
     * @param string $expected Path to file with expected content.
     * @param string $actual   Path to file with actual content.
     * @param string $message  Optional failure message to display.
     *
     * @return void
     */
    public static final function assertFileNotEqualsCanonicalizing($expected, $actual, $message = '')
    {
    }
    /**
     * Asserts that the contents of one file is not equal to the contents of another
     * file (ignoring case).
     *
     * @param string $expected Path to file with expected content.
     * @param string $actual   Path to file with actual content.
     * @param string $message  Optional failure message to display.
     *
     * @return void
     */
    public static final function assertFileNotEqualsIgnoringCase($expected, $actual, $message = '')
    {
    }
    /**
     * Asserts that the contents of a string is equal to the contents of
     * a file (canonicalizing).
     *
     * @param string $expectedFile Path to file with expected content.
     * @param string $actualString Actual content.
     * @param string $message      Optional failure message to display.
     *
     * @return void
     */
    public static final function assertStringEqualsFileCanonicalizing($expectedFile, $actualString, $message = '')
    {
    }
    /**
     * Asserts that the contents of a string is equal to the contents of
     * a file (ignoring case).
     *
     * @param string $expectedFile Path to file with expected content.
     * @param string $actualString Actual content.
     * @param string $message      Optional failure message to display.
     *
     * @return void
     */
    public static final function assertStringEqualsFileIgnoringCase($expectedFile, $actualString, $message = '')
    {
    }
    /**
     * Asserts that the contents of a string is not equal to the contents of
     * a file (canonicalizing).
     *
     * @param string $expectedFile Path to file with expected content.
     * @param string $actualString Actual content.
     * @param string $message      Optional failure message to display.
     *
     * @return void
     */
    public static final function assertStringNotEqualsFileCanonicalizing($expectedFile, $actualString, $message = '')
    {
    }
    /**
     * Asserts that the contents of a string is not equal to the contents of
     * a file (ignoring case).
     *
     * @param string $expectedFile Path to file with expected content.
     * @param string $actualString Actual content.
     * @param string $message      Optional failure message to display.
     *
     * @return void
     */
    public static final function assertStringNotEqualsFileIgnoringCase($expectedFile, $actualString, $message = '')
    {
    }
}
/**
 * Empty trait for use with PHPUnit >= 7.5.0 in which this polyfill is not needed.
 */
trait AssertStringContains
{
}
/**
 * Polyfill the Assert::assertIsClosedResource() and Assert::assertIsNotClosedResource() methods.
 *
 * Introduced in PHPUnit 9.3.0.
 *
 * @link https://github.com/sebastianbergmann/phpunit/issues/4276
 * @link https://github.com/sebastianbergmann/phpunit/pull/4365
 */
trait AssertClosedResource
{
    /**
     * Asserts that a variable is of type resource and is closed.
     *
     * @param mixed  $actual  The variable to test.
     * @param string $message Optional failure message to display.
     *
     * @return void
     */
    public static function assertIsClosedResource($actual, $message = '')
    {
    }
    /**
     * Asserts that a variable is not of type resource or is an open resource.
     *
     * @param mixed  $actual  The variable to test.
     * @param string $message Optional failure message to display.
     *
     * @return void
     */
    public static function assertIsNotClosedResource($actual, $message = '')
    {
    }
    /**
     * Helper function to determine whether an assertion regarding a resource's state should be skipped.
     *
     * Due to some bugs in PHP itself, the "is closed resource" determination
     * cannot always be done reliably.
     *
     * This method can determine whether or not the current value in combination with
     * the current PHP version on which the test is being run is affected by this.
     *
     * Use this function to skip running a test using `assertIs[Not]ClosedResource()` or
     * to skip running just that particular assertion.
     *
     * @param mixed $actual The variable to test.
     *
     * @return bool
     */
    public static function shouldClosedResourceAssertionBeSkipped($actual)
    {
    }
    /**
     * Helper function to obtain an instance of the Exporter class.
     *
     * @return Exporter|Exporter_In_Phar|Exporter_In_Phar_Old
     */
    private static function getPHPUnitExporterObject()
    {
    }
}
/**
 * Polyfill the Assert::assertIsList() method.
 *
 * Introduced in PHPUnit 10.0.0.
 *
 * @link https://github.com/sebastianbergmann/phpunit/pull/4818
 *
 * @since 2.0.0
 */
trait AssertIsList
{
    /**
     * Asserts that an array is list.
     *
     * @param mixed  $array   The value to test.
     * @param string $message Optional failure message to display.
     *
     * @return void
     */
    public static final function assertIsList($array, $message = '')
    {
    }
    /**
     * Returns the description of the failure.
     *
     * @param mixed $value The value under test.
     *
     * @return string
     */
    private static function assertIsListFailureDescription($value)
    {
    }
}
/**
 * Polyfill the TestCase::expectExceptionMessageMatches() method, which replaces
 * the TestCase::expectExceptionMessageRegExp() method.
 *
 * Introduced in PHPUnit 8.4.0.
 * The `TestCase::expectExceptionMessageRegExp()` method was soft deprecated in PHPUnit 8.4.0,
 * hard deprecated in PHPUnit 8.5.3 and removed in PHPUnit 9.0.0.
 *
 * @link https://github.com/sebastianbergmann/phpunit/commit/d1199cb2e43a934b51521656be9748f63febe18e
 * @link https://github.com/sebastianbergmann/phpunit/issues/4133
 * @link https://github.com/sebastianbergmann/phpunit/issues/3957
 */
trait ExpectExceptionMessageMatches
{
    /**
     * Set an expectation that an Exception message matches a pattern as per the regular expression.
     *
     * @param string $regularExpression The regular expression.
     *
     * @return void
     */
    protected final function expectExceptionMessageMatches($regularExpression)
    {
    }
}
/**
 * Polyfill various assertions renamed for readability.
 *
 * Introduced in PHPUnit 9.1.0.
 * The old names were deprecated in PHPUnit 9.1.0 and (will be) removed in PHPUnit 10.0.0.
 *
 * @link https://github.com/sebastianbergmann/phpunit/issues/4061
 * @link https://github.com/sebastianbergmann/phpunit/issues/4062
 * @link https://github.com/sebastianbergmann/phpunit/issues/4063
 * @link https://github.com/sebastianbergmann/phpunit/issues/4064
 * @link https://github.com/sebastianbergmann/phpunit/issues/4065
 * @link https://github.com/sebastianbergmann/phpunit/issues/4066
 * @link https://github.com/sebastianbergmann/phpunit/issues/4067
 * @link https://github.com/sebastianbergmann/phpunit/issues/4068
 * @link https://github.com/sebastianbergmann/phpunit/issues/4069
 * @link https://github.com/sebastianbergmann/phpunit/issues/4070
 * @link https://github.com/sebastianbergmann/phpunit/issues/4071
 * @link https://github.com/sebastianbergmann/phpunit/issues/4072
 * @link https://github.com/sebastianbergmann/phpunit/issues/4073
 * @link https://github.com/sebastianbergmann/phpunit/issues/4074
 * @link https://github.com/sebastianbergmann/phpunit/issues/4075
 * @link https://github.com/sebastianbergmann/phpunit/issues/4076
 * @link https://github.com/sebastianbergmann/phpunit/issues/4077
 * @link https://github.com/sebastianbergmann/phpunit/issues/4078
 * @link https://github.com/sebastianbergmann/phpunit/issues/4079
 * @link https://github.com/sebastianbergmann/phpunit/issues/4080
 * @link https://github.com/sebastianbergmann/phpunit/issues/4081
 * @link https://github.com/sebastianbergmann/phpunit/issues/4082
 * @link https://github.com/sebastianbergmann/phpunit/issues/4083
 * @link https://github.com/sebastianbergmann/phpunit/issues/4084
 * @link https://github.com/sebastianbergmann/phpunit/issues/4085
 * @link https://github.com/sebastianbergmann/phpunit/issues/4086
 * @link https://github.com/sebastianbergmann/phpunit/issues/4087
 * @link https://github.com/sebastianbergmann/phpunit/issues/4088
 * @link https://github.com/sebastianbergmann/phpunit/issues/4089
 * @link https://github.com/sebastianbergmann/phpunit/issues/4090
 */
trait AssertionRenames
{
    /**
     * Asserts that a file/dir exists and is not readable.
     *
     * @param string $filename Path to the file/directory.
     * @param string $message  Optional failure message to display.
     *
     * @return void
     */
    public static final function assertIsNotReadable($filename, $message = '')
    {
    }
    /**
     * Asserts that a file/dir exists and is not writable.
     *
     * @param string $filename Path to the file/directory.
     * @param string $message  Optional failure message to display.
     *
     * @return void
     */
    public static final function assertIsNotWritable($filename, $message = '')
    {
    }
    /**
     * Asserts that a directory does not exist.
     *
     * @param string $directory Path to the directory.
     * @param string $message   Optional failure message to display.
     *
     * @return void
     */
    public static final function assertDirectoryDoesNotExist($directory, $message = '')
    {
    }
    /**
     * Asserts that a directory exists and is not readable.
     *
     * @param string $directory Path to the directory.
     * @param string $message   Optional failure message to display.
     *
     * @return void
     */
    public static final function assertDirectoryIsNotReadable($directory, $message = '')
    {
    }
    /**
     * Asserts that a directory exists and is not writable.
     *
     * @param string $directory Path to the directory.
     * @param string $message   Optional failure message to display.
     *
     * @return void
     */
    public static final function assertDirectoryIsNotWritable($directory, $message = '')
    {
    }
    /**
     * Asserts that a file does not exist.
     *
     * @param string $filename Path to the file.
     * @param string $message  Optional failure message to display.
     *
     * @return void
     */
    public static final function assertFileDoesNotExist($filename, $message = '')
    {
    }
    /**
     * Asserts that a file exists and is not readable.
     *
     * @param string $file    Path to the file.
     * @param string $message Optional failure message to display.
     *
     * @return void
     */
    public static final function assertFileIsNotReadable($file, $message = '')
    {
    }
    /**
     * Asserts that a file exists and is not writable.
     *
     * @param string $file    Path to the file.
     * @param string $message Optional failure message to display.
     *
     * @return void
     */
    public static final function assertFileIsNotWritable($file, $message = '')
    {
    }
    /**
     * Asserts that a string matches a given regular expression.
     *
     * @param string $pattern Regular expression pattern.
     * @param string $string  String to match against the regular expression.
     * @param string $message Optional failure message to display.
     *
     * @return void
     */
    public static final function assertMatchesRegularExpression($pattern, $string, $message = '')
    {
    }
    /**
     * Asserts that a string does not match a given regular expression.
     *
     * @param string $pattern Regular expression pattern.
     * @param string $string  String to match against the regular expression.
     * @param string $message Optional failure message to display.
     *
     * @return void
     */
    public static final function assertDoesNotMatchRegularExpression($pattern, $string, $message = '')
    {
    }
}
/**
 * Empty trait for use with PHPUnit >= 10.0.0 in which this polyfill is not needed.
 *
 * @since 2.0.0
 */
trait AssertIgnoringLineEndings
{
}
/**
 * Empty trait for use with PHPUnit >= 11.0.0 in which this polyfill is not needed.
 */
trait ExpectUserDeprecation
{
}
/**
 * Empty trait for use with PHPUnit >= 9.6.11 < 10.0.0 and PHPUnit >= 10.1.0 in which this polyfill is not needed.
 */
trait AssertObjectProperty
{
}
/**
 * Empty trait for use with PHPUnit >= 7.5.0 in which this polyfill is not needed.
 */
trait AssertIsType
{
}
/**
 * Empty trait for use with PHPUnit >= 11.0.0 in which the polyfill is not needed.
 */
trait AssertArrayWithListKeys
{
}
/**
 * Polyfill the Assert::assertObjectEquals() methods.
 *
 * Introduced in PHPUnit 9.4.0.
 *
 * The polyfill implementation closely matches the PHPUnit native implementation with the exception
 * of the thrown exceptions.
 *
 * @link https://github.com/sebastianbergmann/phpunit/issues/4467
 * @link https://github.com/sebastianbergmann/phpunit/issues/4707
 * @link https://github.com/sebastianbergmann/phpunit/commit/1dba8c3a4b2dd04a3ff1869f75daaeb6757a14ee
 * @link https://github.com/sebastianbergmann/phpunit/commit/6099c5eefccfda860c889f575d58b5fe6cc10c83
 */
trait AssertObjectEquals
{
    /**
     * Asserts that two objects are considered equal based on a custom object comparison
     * using a comparator method in the target object.
     *
     * The custom comparator method is expected to have the following method
     * signature: `equals(self $other): bool` (or similar with a different method name).
     *
     * Basically, the assertion checks the following:
     * - A method with name $method must exist on the $actual object.
     * - The method must accept exactly one argument and this argument must be required.
     * - This parameter must have a classname-based declared type.
     * - The $expected object must be compatible with this declared type.
     * - The method must have a declared bool return type.
     *
     * @param object $expected Expected value.
     * @param object $actual   The value to test.
     * @param string $method   The name of the comparator method within the object.
     * @param string $message  Optional failure message to display.
     *
     * @return void
     *
     * @throws TypeError                        When any of the passed arguments do not meet the required type.
     * @throws InvalidComparisonMethodException When the comparator method does not comply with the requirements.
     */
    public static final function assertObjectEquals($expected, $actual, $method = 'equals', $message = '')
    {
    }
}
/**
 * Polyfill the Assert::assertEqualsCanonicalizing(), Assert::assertEqualsIgnoringCase(),
 * Assert::assertEqualsWithDelta() and their `Not` variant methods, which replace the
 * use of Assert::assertEquals() and Assert::assertNotEquals() with these optional parameters.
 *
 * Introduced in PHPUnit 7.5.0.
 * Use of Assert::assertEquals() and Assert::assertNotEquals() with these respective optional parameters was
 * deprecated in PHPUnit 7.5.0 and removed in PHPUnit 9.0.0.
 *
 * @link https://github.com/sebastianbergmann/phpunit/issues/3340
 */
trait AssertEqualsSpecializations
{
    /**
     * Asserts that two variables are equal (canonicalizing).
     *
     * @param mixed  $expected Expected value.
     * @param mixed  $actual   The value to test.
     * @param string $message  Optional failure message to display.
     *
     * @return void
     */
    public static final function assertEqualsCanonicalizing($expected, $actual, $message = '')
    {
    }
    /**
     * Asserts that two variables are equal (ignoring case).
     *
     * @param mixed  $expected Expected value.
     * @param mixed  $actual   The value to test.
     * @param string $message  Optional failure message to display.
     *
     * @return void
     */
    public static final function assertEqualsIgnoringCase($expected, $actual, $message = '')
    {
    }
    /**
     * Asserts that two variables are equal (with delta).
     *
     * @param mixed  $expected Expected value.
     * @param mixed  $actual   The value to test.
     * @param float  $delta    The delta to allow between the expected and the actual value.
     * @param string $message  Optional failure message to display.
     *
     * @return void
     */
    public static final function assertEqualsWithDelta($expected, $actual, $delta, $message = '')
    {
    }
    /**
     * Asserts that two variables are not equal (canonicalizing).
     *
     * @param mixed  $expected Expected value.
     * @param mixed  $actual   The value to test.
     * @param string $message  Optional failure message to display.
     *
     * @return void
     */
    public static final function assertNotEqualsCanonicalizing($expected, $actual, $message = '')
    {
    }
    /**
     * Asserts that two variables are not equal (ignoring case).
     *
     * @param mixed  $expected Expected value.
     * @param mixed  $actual   The value to test.
     * @param string $message  Optional failure message to display.
     *
     * @return void
     */
    public static final function assertNotEqualsIgnoringCase($expected, $actual, $message = '')
    {
    }
    /**
     * Asserts that two variables are not equal (with delta).
     *
     * @param mixed  $expected Expected value.
     * @param mixed  $actual   The value to test.
     * @param float  $delta    The delta to allow between the expected and the actual value.
     * @param string $message  Optional failure message to display.
     *
     * @return void
     */
    public static final function assertNotEqualsWithDelta($expected, $actual, $delta, $message = '')
    {
    }
}
/**
 * Polyfill the Assert::equalToCanonicalizing(), Assert::equalToIgnoringCase() and
 * Assert::equalToWithDelta(), which replace the use of Assert::equalTo()
 * with these optional parameters.
 *
 * Introduced in PHPUnit 9.0.0.
 * Use of Assert::equalTo() with these respective optional parameters was
 * never deprecated but leads to unexpected behaviour as they are ignored in PHPUnit 9.0.0.
 *
 * @link https://github.com/sebastianbergmann/phpunit/commit/43c01a4e0c74a4bf019a8d879bced5146af2fbb6
 */
trait EqualToSpecializations
{
    /**
     * Creates "is equal" constraint (canonicalizing).
     *
     * @param mixed $value Expected value for constraint.
     *
     * @return IsEqual|PHPUnit_Framework_Constraint_IsEqual An isEqual constraint instance.
     */
    public static final function equalToCanonicalizing($value)
    {
    }
    /**
     * Creates "is equal" constraint (ignoring case).
     *
     * @param mixed $value Expected value for constraint.
     *
     * @return IsEqual|PHPUnit_Framework_Constraint_IsEqual An isEqual constraint instance.
     */
    public static final function equalToIgnoringCase($value)
    {
    }
    /**
     * Creates "is equal" constraint (with delta).
     *
     * @param mixed $value Expected value for constraint.
     * @param float $delta The delta to allow between the expected and the actual value.
     *
     * @return IsEqual|PHPUnit_Framework_Constraint_IsEqual An isEqual constraint instance.
     */
    public static final function equalToWithDelta($value, $delta)
    {
    }
}
/**
 * Empty trait for use with PHPUnit >= 11.2.0 in which this polyfill is not needed.
 */
trait AssertObjectNotEquals
{
}
namespace Yoast\PHPUnitPolyfills\Exceptions;

/**
 * Exception used for all errors throw by the polyfill for the `assertObjectEquals()` and the `assertObjectNotEquals()` assertions.
 *
 * PHPUnit natively throws a range of different exceptions.
 * The polyfills throw just one exception type with different messages.
 */
final class InvalidComparisonMethodException extends \Exception
{
    /**
     * Convert the Exception object to a string message.
     *
     * @return string
     */
    public function __toString()
    {
    }
}
namespace Yoast\PHPUnitPolyfills\Helpers;

/**
 * Helper functions for working with the resource type.
 *
 * ---------------------------------------------------------------------------------------------
 * This class is only intended for internal use by PHPUnit Polyfills and is not part of the public API.
 * This also means that it has no promise of backward compatibility.
 *
 * End-user should use the {@see \Yoast\PHPUnitPolyfills\Polyfills\AssertClosedResource()} trait instead.
 * ---------------------------------------------------------------------------------------------
 *
 * @internal
 */
final class ResourceHelper
{
    /**
     * Determines whether a variable represents a resource, either open or closed.
     *
     * @param mixed $actual The variable to test.
     *
     * @return bool
     */
    public static function isResource($actual)
    {
    }
    /**
     * Determines whether a variable represents a closed resource.
     *
     * @param mixed $actual The variable to test.
     *
     * @return bool
     */
    public static function isClosedResource($actual)
    {
    }
    /**
     * Helper function to determine whether the open/closed state of a resource is reliable.
     *
     * Due to some bugs in PHP itself, the "is closed resource" determination
     * cannot always be done reliably.
     *
     * This function can determine whether or not the current value in combination with
     * the current PHP version on which the test is being run is affected by this.
     *
     * @param mixed $actual The variable to test.
     *
     * @return bool
     */
    public static function isResourceStateReliable($actual)
    {
    }
    /**
     * Check if the PHP version is one of a known set of PHP versions
     * containing a libxml version which does not report on closed resources
     * correctly.
     *
     * Version ranges based on {@link https://3v4l.org/tc4fE}.
     * 7.0.8 - 7.0.33, 7.1.0 - 7.1.33, 7.2.0 - 7.2.34, 7.3.0 - 7.3.21, 7.4.0 - 7.4.9
     *
     * @return bool
     */
    public static function isIncompatiblePHPForLibXMLResources()
    {
    }
}
/**
 * Helper functions for validating a comparator method complies with the requirements set by PHPUnit.
 *
 * ---------------------------------------------------------------------------------------------
 * This class is only intended for internal use by PHPUnit Polyfills and is not part of the public API.
 * This also means that it has no promise of backward compatibility.
 *
 * End-users should use the {@see \Yoast\PHPUnitPolyfills\Polyfills\AssertObjectEquals} and/or the
 * {@see \Yoast\PHPUnitPolyfills\Polyfills\AssertObjectNotEquals} trait instead.
 * ---------------------------------------------------------------------------------------------
 *
 * @internal
 */
final class ComparatorValidator
{
    /**
     * Asserts that a custom object comparison method complies with the requirements set by PHPUnit.
     *
     * The custom comparator method is expected to have the following method
     * signature: `equals(self $other): bool` (or similar with a different method name).
     *
     * Basically, this method checks the following:
     * - A method with name $method must exist on the $actual object.
     * - The method must accept exactly one argument and this argument must be required.
     * - This parameter must have a classname-based declared type.
     * - The $expected object must be compatible with this declared type.
     * - The method must have a declared bool return type.
     *
     * {@internal Type validation for the parameters should be done in the calling function.}
     *
     * @param object $expected Expected value.
     *                         This object should comply with the type requirement set by the parameter type
     *                         of the comparator method on $actual.
     * @param object $actual   The object on which the comparator method should exist.
     * @param string $method   The name of the comparator method expected within the object.
     *
     * @return void
     *
     * @throws InvalidComparisonMethodException When the comparator method does not comply with the requirements.
     */
    public static function isValid($expected, $actual, $method = 'equals')
    {
    }
}
namespace Yoast\PHPUnitPolyfills\TestCases;

/**
 * Basic test case for use with PHPUnit cross-version.
 *
 * This test case uses renamed methods for the `setUpBeforeClass()`, `setUp()`, `tearDown()`
 * and `tearDownAfterClass()` methods to get round the signature change in PHPUnit 8.
 *
 * When using this TestCase, overloaded fixture methods need to use the `@beforeClass`, `@before`,
 * `@after` and `@afterClass` annotations.
 * The naming of the overloaded methods is open as long as the method names don't conflict with
 * the PHPUnit native method names.
 */
abstract class XTestCase extends \PHPUnit\Framework\TestCase
{
    use \Yoast\PHPUnitPolyfills\Polyfills\AssertArrayWithListKeys;
    use \Yoast\PHPUnitPolyfills\Polyfills\AssertClosedResource;
    use \Yoast\PHPUnitPolyfills\Polyfills\AssertEqualsSpecializations;
    use \Yoast\PHPUnitPolyfills\Polyfills\AssertFileEqualsSpecializations;
    use \Yoast\PHPUnitPolyfills\Polyfills\AssertIgnoringLineEndings;
    use \Yoast\PHPUnitPolyfills\Polyfills\AssertionRenames;
    use \Yoast\PHPUnitPolyfills\Polyfills\AssertIsList;
    use \Yoast\PHPUnitPolyfills\Polyfills\AssertIsType;
    use \Yoast\PHPUnitPolyfills\Polyfills\AssertObjectEquals;
    use \Yoast\PHPUnitPolyfills\Polyfills\AssertObjectNotEquals;
    use \Yoast\PHPUnitPolyfills\Polyfills\AssertObjectProperty;
    use \Yoast\PHPUnitPolyfills\Polyfills\AssertStringContains;
    use \Yoast\PHPUnitPolyfills\Polyfills\EqualToSpecializations;
    use \Yoast\PHPUnitPolyfills\Polyfills\ExpectExceptionMessageMatches;
    use \Yoast\PHPUnitPolyfills\Polyfills\ExpectUserDeprecation;
    /**
     * This method is called before the first test of this test class is run.
     *
     * @beforeClass
     *
     * @codeCoverageIgnore
     *
     * @return void
     */
    #[\PHPUnit\Framework\Attributes\BeforeClass]
    public static function setUpFixturesBeforeClass()
    {
    }
    /**
     * Sets up the fixture, for example, open a network connection.
     *
     * This method is called before each test.
     *
     * @before
     *
     * @return void
     */
    #[\PHPUnit\Framework\Attributes\Before]
    protected function setUpFixtures()
    {
    }
    /**
     * Tears down the fixture, for example, close a network connection.
     *
     * This method is called after each test.
     *
     * @after
     *
     * @return void
     */
    #[\PHPUnit\Framework\Attributes\After]
    protected function tearDownFixtures()
    {
    }
    /**
     * This method is called after the last test of this test class is run.
     *
     * @afterClass
     *
     * @codeCoverageIgnore
     *
     * @return void
     */
    #[\PHPUnit\Framework\Attributes\AfterClass]
    public static function tearDownFixturesAfterClass()
    {
    }
}
/**
 * Basic test case for use with PHPUnit <= 7.
 *
 * This test case uses renamed (snakecase) methods for the `setUpBeforeClass()`, `setUp()`,
 * `assertPreConditions()`, `assertPostConditions()`, `tearDown()` and `tearDownAfterClass()`
 * methods to get round the signature change in PHPUnit 8.
 *
 * When using this TestCase, the snakecase method names need to be used to overload a fixture method.
 */
abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    use \Yoast\PHPUnitPolyfills\Polyfills\AssertArrayWithListKeys;
    use \Yoast\PHPUnitPolyfills\Polyfills\AssertClosedResource;
    use \Yoast\PHPUnitPolyfills\Polyfills\AssertEqualsSpecializations;
    use \Yoast\PHPUnitPolyfills\Polyfills\AssertFileEqualsSpecializations;
    use \Yoast\PHPUnitPolyfills\Polyfills\AssertIgnoringLineEndings;
    use \Yoast\PHPUnitPolyfills\Polyfills\AssertionRenames;
    use \Yoast\PHPUnitPolyfills\Polyfills\AssertIsList;
    use \Yoast\PHPUnitPolyfills\Polyfills\AssertIsType;
    use \Yoast\PHPUnitPolyfills\Polyfills\AssertObjectEquals;
    use \Yoast\PHPUnitPolyfills\Polyfills\AssertObjectNotEquals;
    use \Yoast\PHPUnitPolyfills\Polyfills\AssertObjectProperty;
    use \Yoast\PHPUnitPolyfills\Polyfills\AssertStringContains;
    use \Yoast\PHPUnitPolyfills\Polyfills\EqualToSpecializations;
    use \Yoast\PHPUnitPolyfills\Polyfills\ExpectExceptionMessageMatches;
    use \Yoast\PHPUnitPolyfills\Polyfills\ExpectUserDeprecation;
    /**
     * This method is called before the first test of this test class is run.
     *
     * @codeCoverageIgnore
     *
     * @return void
     */
    public static function setUpBeforeClass()
    {
    }
    /**
     * Sets up the fixture, for example, open a network connection.
     *
     * This method is called before each test.
     *
     * @return void
     */
    protected function setUp()
    {
    }
    /**
     * Performs assertions shared by all tests of a test case.
     *
     * This method is called before the execution of a test starts and after setUp() is called.
     *
     * @return void
     */
    protected function assertPreConditions()
    {
    }
    /**
     * Performs assertions shared by all tests of a test case.
     *
     * This method is called before the execution of a test ends and before tearDown() is called.
     *
     * @return void
     */
    protected function assertPostConditions()
    {
    }
    /**
     * Tears down the fixture, for example, close a network connection.
     *
     * This method is called after each test.
     *
     * @return void
     */
    protected function tearDown()
    {
    }
    /**
     * This method is called after the last test of this test class is run.
     *
     * @codeCoverageIgnore
     *
     * @return void
     */
    public static function tearDownAfterClass()
    {
    }
    /**
     * This method is called before the first test of this test class is run.
     *
     * @return void
     */
    public static function set_up_before_class()
    {
    }
    /**
     * Sets up the fixture, for example, open a network connection.
     *
     * This method is called before each test.
     *
     * @return void
     */
    protected function set_up()
    {
    }
    /**
     * Performs assertions shared by all tests of a test case.
     *
     * This method is called before the execution of a test starts and after set_up() is called.
     *
     * @return void
     */
    protected function assert_pre_conditions()
    {
    }
    /**
     * Performs assertions shared by all tests of a test case.
     *
     * This method is called before the execution of a test ends and before tear_down() is called.
     *
     * @return void
     */
    protected function assert_post_conditions()
    {
    }
    /**
     * Tears down the fixture, for example, close a network connection.
     *
     * This method is called after each test.
     *
     * @return void
     */
    protected function tear_down()
    {
    }
    /**
     * This method is called after the last test of this test class is run.
     *
     * @return void
     */
    public static function tear_down_after_class()
    {
    }
}