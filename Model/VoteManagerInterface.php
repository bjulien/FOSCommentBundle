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
 * Manages voting scores for comments.
 *
 * @author Tim Nagel <tim@nagel.com.au>
 */
interface VoteManagerInterface
{
    /**
     * Returns the class of the Vote object.
     *
     * @return string
     */
    function getClass();

    /**
     * Creates a Vote object.
     *
     * @return VoteInterface
     */
    function createVote();

    /**
     * Persists a vote against a specified VotableCommentInterface.
     *
     * @param VoteInterface $vote
     * @param VotableCommentInterface $comment
     * @return void
     */
    function addVote(VoteInterface $vote, VotableCommentInterface $comment);

    /**
     * Finds a vote by specified criteria.
     *
     * @param array $criteria
     * @return VoteInterface
     */
    function findVoteBy(array $criteria);

    /**
     * Finds a vote by identifier.
     *
     * @param  $id
     * @return VoteInterface
     */
    function findVoteById($id);

    /**
     * Finds all votes for a comment.
     *
     * @param CommentInterface $comment
     * @return array of VoteInterface
     */
    function findVotesByComment(CommentInterface $comment);
}