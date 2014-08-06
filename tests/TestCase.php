<?php

namespace Composer\Plugin;

interface PluginInterface
{

}

namespace Composer\Installer;

use Composer\Package\PackageInterface;

class LibraryInstaller
{
  public function getPackageBasePath(PackageInterface $package)
  {
    return "mocked parent method";
  }
}

namespace Composer\IO;

interface IOInterface
{

}

namespace Composer\Package;

interface PackageInterface
{

}

namespace TypedPHP\Composer\Tests;

use Mockery;
use PHPUnit_Framework_TestCase;
use ReflectionClass;
use ReflectionProperty;

class TestCase extends PHPUnit_Framework_TestCase
{
  public function tearDown()
  {
    Mockery::close();
  }

  /**
   * @param mixed  $class
   * @param string $property
   * @param mixed  $value
   */
  public function setProtectedProperty($class, $property, $value)
  {
    $reflection = $this->getNewReflectionClass($class);
    $property   = $this->getNewReflectionProperty($reflection, $property);

    $property->setValue($class, $value);
  }

  /**
   * @param mixed $class
   *
   * @return ReflectionClass
   */
  protected function getNewReflectionClass($class)
  {
    return new ReflectionClass($class);
  }

  /**
   * @param ReflectionClass $class
   * @param string          $property
   *
   * @return ReflectionProperty
   */
  protected function getNewReflectionProperty($class, $property)
  {
    $reflection = $class->getProperty($property);
    $reflection->setAccessible(true);

    return $reflection;
  }
}
