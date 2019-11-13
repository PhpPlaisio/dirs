<?php
declare(strict_types=1);

namespace Plaisio\Dirs;

/**
 * Interface for getting directory names.
 *
 * Returned directory names MUST be absolute and without trailing directory separator.
 */
interface Dirs
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the directory for (web) assets.
   *
   * @return string
   */
  public function assetsDir(): string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the directory for executable commands.
   *
   * @return string
   */
  public function binDir(): string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the error directory.
   *
   * @return string
   */
  public function errDir(): string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the directory for configuration files.
   *
   * @return string
   */
  public function configDir(): string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the directory for log files.
   *
   * @return string
   */
  public function logDir(): string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the directory for lock files.
   *
   * @return string
   */
  public function lockDir(): string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the root directory of the (web) application.
   *
   * @return string
   */
  public function rootDir(): string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the directory for temporary files.
   *
   * This method MUST NOT return /tmp, /var/tmp or
   * (sys_get_temp_dir())[https://www.php.net/manual/function.sys-get-temp-dir.php]. These directories might severely
   * size restricted and will wreak havoc to your system when when the filesystem of these directories are full.
   *
   * @return string
   */
  public function tmpDir(): string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the directory for variable data files.
   *
   * @return string
   */
  public function varDir(): string;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
