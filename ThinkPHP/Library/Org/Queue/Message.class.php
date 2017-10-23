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

namespace Org\Queue;

/**
 * A marker interface for messages.
 *
 * @since   2.0
 */
interface Message
{
    /**
     * Get the name of the message. This is used for routing things to queues.
     *
     * @return  string
     */
    public function getName();
}
