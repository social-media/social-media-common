<?php

namespace SocialMedia\Common;

/*
 * This file is part of the Social Media library from Jeroen Desloovere.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

/**
 * Item you want to publish/unpublish
 *
 * @author Jeroen Desloovere <info@jeroendesloovere.be>
 */
interface ItemInterface
{
    /**
     * Construct
     *
     * @param string identifier
     */
    public function __construct(
        $identifier
    )

    /**
     * Get identifier
     */
    public function getIdentifier();
}
