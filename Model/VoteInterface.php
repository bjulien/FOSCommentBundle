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

/**
 * Methods a vote should implement.
 *
 * @author Tim Nagel <tim@nagel.com.au>
 */
interface VoteInterface
{
    const VOTE_UP = 1;
    const VOTE_DOWN = -1;

    /**
     * @return mixed unique ID for this vote
     */
    function getId();

    /**
     * @return SignedCommentInterface
     */
    function getComment();

    /**
     * @param VotableCommentInterface $comment
     */
    function setComment(VotableCommentInterface $comment);

    /**
     * @return integer the modification applied to the comment by this vote
     */
    function getValue();

    /**
     * @return DateTime
     */
    function getCreatedAt();
}
