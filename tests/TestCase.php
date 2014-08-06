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

class TestCase extends PHPUnit_Framework_TestCase
{
  public function tearDown()
  {
    Mockery::close();
  }
}
