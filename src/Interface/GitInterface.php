<?php

declare(strict_types=1);

namespace Ghostwriter\Git\Interface;

use Ghostwriter\Git\Interface\ExceptionI\GitExceptionInterface;
use Ghostwriter\Shell\Interface\Exception\ShellExceptionInterface;
use Ghostwriter\Shell\Interface\ResultInterface;
use Ghostwriter\Shell\Interface\ShellInterface;

interface GitInterface
{
    /**
     * Example: git add ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function add(string ...$arguments): ResultInterface;

    /**
     * Example: git am ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function am(string ...$arguments): ResultInterface;

    /**
     * Example: git annotate ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function annotate(string ...$arguments): ResultInterface;

    /**
     * Example: git apply ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function apply(string ...$arguments): ResultInterface;

    /**
     * Example: git archive ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function archive(string ...$arguments): ResultInterface;

    /**
     * Example: git bisect ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function bisect(string ...$arguments): ResultInterface;

    /**
     * Example: git blame ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function blame(string ...$arguments): ResultInterface;

    /**
     * Example: git branch ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function branch(string ...$arguments): ResultInterface;

    /**
     * Example: git bundle ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function bundle(string ...$arguments): ResultInterface;

    /**
     * Example: git cat-file ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function catFile(string ...$arguments): ResultInterface;

    /**
     * Example: git check-ignore ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function checkIgnore(string ...$arguments): ResultInterface;

    /**
     * Example: git checkout ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function checkout(string ...$arguments): ResultInterface;

    /**
     * Example: git checkout-index ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function checkoutIndex(string ...$arguments): ResultInterface;

    /**
     * Example: git cherry ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function cherry(string ...$arguments): ResultInterface;

    /**
     * Example: git cherry-pick ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function cherryPick(string ...$arguments): ResultInterface;

    /**
     * Example: git clean ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function clean(string ...$arguments): ResultInterface;

    /**
     * Example: git clone ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function clone(string ...$arguments): ResultInterface;

    /**
     * Example: git commit ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function commit(string ...$arguments): ResultInterface;

    /**
     * Example: git commit-tree ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function commitTree(string ...$arguments): ResultInterface;

    /**
     * Example: git config ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function config(string ...$arguments): ResultInterface;

    /**
     * Example: git count-objects ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function countObjects(string ...$arguments): ResultInterface;

    /**
     * Example: git daemon ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function daemon(string ...$arguments): ResultInterface;

    /**
     * Example: git describe ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function describe(string ...$arguments): ResultInterface;

    /**
     * Example: git diff ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function diff(string ...$arguments): ResultInterface;

    /**
     * Example: git diff-index ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function diffIndex(string ...$arguments): ResultInterface;

    public function environmentVariables(): EnvironmentVariablesInterface;

    /**
     * Example: git ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function execute(string ...$arguments): ResultInterface;

    /**
     * Example: git fast-import ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function fastImport(string ...$arguments): ResultInterface;

    /**
     * Example: git fetch ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function fetch(string ...$arguments): ResultInterface;

    /**
     * Example: git filter-branch ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function filterBranch(string ...$arguments): ResultInterface;

    /**
     * Example: git for-each-ref ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function forEachRef(string ...$arguments): ResultInterface;

    /**
     * Example: git format-patch ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function formatPatch(string ...$arguments): ResultInterface;

    /**
     * Example: git fsck ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function fsck(string ...$arguments): ResultInterface;

    /**
     * Example: git gc ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function gc(string ...$arguments): ResultInterface;

    /**
     * Example: git grep ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function grep(string ...$arguments): ResultInterface;

    /**
     * Example: git hash-object ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function hashObject(string ...$arguments): ResultInterface;

    /**
     * Example: git imap-send ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function imapSend(string ...$arguments): ResultInterface;

    /**
     * Example: git init ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function init(string ...$arguments): ResultInterface;

    /**
     * Example: git instaweb ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function instaweb(string ...$arguments): ResultInterface;

    /**
     * Example: git log ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function log(string ...$arguments): ResultInterface;

    /**
     * Example: git ls-files ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function lsFiles(string ...$arguments): ResultInterface;

    /**
     * Example: git ls-tree ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function lsTree(string ...$arguments): ResultInterface;

    /**
     * Example: git merge ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function merge(string ...$arguments): ResultInterface;

    /**
     * Example: git merge-base ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function mergeBase(string ...$arguments): ResultInterface;

    /**
     * Example: git mv ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function mv(string ...$arguments): ResultInterface;

    /**
     * Example: git notes ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function notes(string ...$arguments): ResultInterface;

    /**
     * Example: git pack-objects ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function packObjects(string ...$arguments): ResultInterface;

    /**
     * Example: git prune ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function prune(string ...$arguments): ResultInterface;

    /**
     * Example: git pull ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function pull(string ...$arguments): ResultInterface;

    /**
     * Example: git push ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function push(string ...$arguments): ResultInterface;

    /**
     * Example: git read-tree ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function readTree(string ...$arguments): ResultInterface;

    /**
     * Example: git rebase ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function rebase(string ...$arguments): ResultInterface;

    /**
     * Example: git reflog ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function reflog(string ...$arguments): ResultInterface;

    /**
     * Example: git remote ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function remote(string ...$arguments): ResultInterface;

    /**
     * Example: git request-pull ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function requestPull(string ...$arguments): ResultInterface;

    /**
     * Example: git reset ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function reset(string ...$arguments): ResultInterface;

    /**
     * Example: git restore ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function restore(string ...$arguments): ResultInterface;

    /**
     * Example: git rev-list ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function revList(string ...$arguments): ResultInterface;

    /**
     * Example: git rev-parse ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function revParse(string ...$arguments): ResultInterface;

    /**
     * Example: git revert ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function revert(string ...$arguments): ResultInterface;

    /**
     * Example: git rm ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function rm(string ...$arguments): ResultInterface;

    /**
     * Example: git send-email ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function sendEmail(string ...$arguments): ResultInterface;

    public function shell(): ShellInterface;

    /**
     * Example: git shortlog ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function shortLog(string ...$arguments): ResultInterface;

    /**
     * Example: git show ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function show(string ...$arguments): ResultInterface;

    /**
     * Example: git show-ref ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function showRef(string ...$arguments): ResultInterface;

    /**
     * Example: git stash ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function stash(string ...$arguments): ResultInterface;

    /**
     * Example: git status ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function status(string ...$arguments): ResultInterface;

    /**
     * Example: git submodule ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function submodule(string ...$arguments): ResultInterface;

    /**
     * Example: git svn ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function svn(string ...$arguments): ResultInterface;

    /**
     * Example: git switch ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function switch(string ...$arguments): ResultInterface;

    /**
     * Example: git symbolic-ref ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function symbolicRef(string ...$arguments): ResultInterface;

    /**
     * Example: git tag ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function tag(string ...$arguments): ResultInterface;

    /**
     * Example: git unpack-objects ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function unpackObjects(string ...$arguments): ResultInterface;

    /**
     * Example: git update-index ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function updateIndex(string ...$arguments): ResultInterface;

    /**
     * Example: git update-ref ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function updateRef(string ...$arguments): ResultInterface;

    /**
     * Example: git update-server-info ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function updateServerInfo(string ...$arguments): ResultInterface;

    /**
     * Example: git verify-pack ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function verifyPack(string ...$arguments): ResultInterface;

    public function workingDirectory(): WorkingDirectoryInterface;

    /**
     * Example: git worktree ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function worktree(string ...$arguments): ResultInterface;

    /**
     * Example: git write-tree ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function writeTree(string ...$arguments): ResultInterface;
}
