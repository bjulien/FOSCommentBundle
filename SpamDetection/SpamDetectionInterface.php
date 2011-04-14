<?php

/**
 * This file is part of the FOS\CommentBundle.
 *
 * (c) Thibault Duplessis <thibault.duplessis@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace FOS\CommentBundle\SpamDetection;

use FOS\CommentBundle\Model\CommentInterface;

/**
 * Spam detection interface.
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 */
interface SpamDetectionInterface
{
    /**
     * Takes the comment instance and should return a boolean value
     * depending on if the Spam service thinks the comment is spam.
     *
     * @param CommentInterface $comment
     * @return boolean
     */
    function isSpam(CommentInterface $comment);
}
