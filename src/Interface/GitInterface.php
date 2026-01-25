<?php

declare(strict_types=1);

namespace Ghostwriter\Git\Interface;

use Ghostwriter\Git\Interface\ExceptionI\GitExceptionInterface;
use Ghostwriter\Shell\Interface\Exception\ShellExceptionInterface;
use Ghostwriter\Shell\Interface\ResultInterface;

interface GitInterface
{
    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function add(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function am(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function annotate(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function apply(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function archive(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function bisect(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function blame(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function branch(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function bundle(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function checkout(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function cherry(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function cherryPick(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function clean(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function clone(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function commit(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function config(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function describe(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function diff(string ...$arguments): ResultInterface;

    public function environmentVariables(): EnvironmentVariablesInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function exec(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function execute(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function fetch(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function fsck(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function grep(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function init(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function log(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function lsTree(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function merge(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function mv(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function notes(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function pull(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function push(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function rebase(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function reflog(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function remote(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function renameBranch(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function reset(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function restore(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function revParse(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function revert(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function rm(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function shortLog(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function show(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function stash(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function status(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function submodule(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function switch(string ...$arguments): ResultInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function tag(string ...$arguments): ResultInterface;

    public function workingDirectory(): WorkingDirectoryInterface;

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    public function worktree(string ...$arguments): ResultInterface;
}
