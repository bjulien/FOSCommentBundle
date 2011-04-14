<?php

/**
 * This file is part of the FOS\CommentBundle.
 *
 * (c) Tim Nagel <tim@nagel.com.au>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace FOS\CommentBundle\Model;

use FOS\UserBundle\Model\UserInterface;

/**
 * A signed vote is bound to a FOS\UserBundle User model.
 *
 * @author Tim Nagel <tim@nagel.com.au>
 */
interface SignedVoteInterface extends VoteInterface
{
    /**
     * Sets the owner of the vote
     *
     * @param UserInterface $user
     */
    function setVoter(UserInterface $voter);

    /**
     * Gets the owner of the vote
     *
     * @return UserInterface
     */
    function getVoter();
}
