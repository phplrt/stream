<?php
/**
 * This file is part of Phplrt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Phplrt\Stream;

/**
 * Interface StreamProviderInterface
 */
interface StreamProviderInterface
{
    /**
     * Returns content stream
     *
     * @param array $options Stream context options.
     * @return StreamInterface
     */
    public function getStream(array $options = []): StreamInterface;
}
