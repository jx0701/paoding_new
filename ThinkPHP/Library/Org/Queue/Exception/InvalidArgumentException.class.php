<?php
/**
 * This file is part of Org\Queue
 *
 * Copyright (c) PMG <https://www.pmg.com>
 *
 * For full copyright information see the LICENSE file distributed
 * with this source code.
 *
 * @license     http://opensource.org/licenses/Apache-2.0 Apache-2.0
 */

namespace Org\Queue\Exception;

use Org\Queue\QueueException;

/**
 * Extend `InvalidArgumentException` so we can marker interface it.
 *
 * @since   2.0
 */
final class InvalidArgumentException extends \InvalidArgumentException implements QueueException
{

}