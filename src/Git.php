<?php

declare(strict_types=1);

namespace Ghostwriter\Git;

use Ghostwriter\Container\Container;
use Ghostwriter\Container\Interface\ContainerExceptionInterface;
use Ghostwriter\Git\Exception\GitCommandFailedException;
use Ghostwriter\Git\Interface\EnvironmentVariablesInterface;
use Ghostwriter\Git\Interface\ExceptionI\GitExceptionInterface;
use Ghostwriter\Git\Interface\GitInterface;
use Ghostwriter\Git\Interface\WorkingDirectoryInterface;
use Ghostwriter\Shell\Interface\Exception\ShellExceptionInterface;
use Ghostwriter\Shell\Interface\ResultInterface;
use Ghostwriter\Shell\Interface\ShellInterface;
use Override;
use Tests\Unit\GitTest;
use Throwable;

use const PHP_EOL;

use function implode;
use function mb_trim;
use function sprintf;

/** @see GitTest */
final readonly class Git implements GitInterface
{
    private const string ADD = 'add';

    private const string AM = 'am';

    private const string ANNOTATE = 'annotate';

    private const string APPLY = 'apply';

    private const string ARCHIVE = 'archive';

    private const string BISECT = 'bisect';

    private const string BLAME = 'blame';

    private const string BRANCH = 'branch';

    private const string BUNDLE = 'bundle';

    private const string CHECKOUT = 'checkout';

    private const string CHERRY = 'cherry';

    private const string CHERRY_PICK = 'cherry-pick';

    private const string CLEAN = 'clean';

    private const string CLONE = 'clone';

    private const string COMMAND = 'git';

    private const string COMMIT = 'commit';

    private const string CONFIG = 'config';

    private const string DESCRIBE = 'describe';

    private const string DIFF = 'diff';

    private const string EXEC = 'exec';

    private const string FETCH = 'fetch';

    private const string FSCK = 'fsck';

    private const string GREP = 'grep';

    private const string INIT = 'init';

    private const string LOG = 'log';

    private const string LS_TREE = 'ls-tree';

    private const string MERGE = 'merge';

    private const string MV = 'mv';

    private const string NOTES = 'notes';

    private const string PULL = 'pull';

    private const string PUSH = 'push';

    private const string REBASE = 'rebase';

    private const string REFLOG = 'reflog';

    private const string REMOTE = 'remote';

    private const string RESET = 'reset';

    private const string RESTORE = 'restore';

    private const string REVERT = 'revert';

    private const string REV_PARSE = 'rev-parse';

    private const string RM = 'rm';

    private const string SHORTLOG = 'shortlog';

    private const string SHOW = 'show';

    private const string STASH = 'stash';

    private const string STATUS = 'status';

    private const string SUBMODULE = 'submodule';

    private const string SWITCH = 'switch';

    private const string TAG = 'tag';

    private const string WORKTREE = 'worktree';

    public function __construct(
        private WorkingDirectoryInterface $workingDirectory,
        private EnvironmentVariablesInterface $environmentVariables,
        private ShellInterface $shell
    ) {}

    /**
     * @throws ContainerExceptionInterface
     * @throws Throwable
     */
    public static function new(string $workingDirectory, array $environment = []): self
    {
        return Container::getInstance()->build(self::class, [
            'workingDirectory' => WorkingDirectory::new($workingDirectory),
            'environmentVariables' => EnvironmentVariables::new($environment),
        ]);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function add(string ...$arguments): ResultInterface
    {
        return $this->execute(self::ADD, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function am(string ...$arguments): ResultInterface
    {
        return $this->execute(self::AM, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function annotate(string ...$arguments): ResultInterface
    {

        return $this->execute(self::ANNOTATE, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function apply(string ...$arguments): ResultInterface
    {
        return $this->execute(self::APPLY, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function archive(string ...$arguments): ResultInterface
    {

        return $this->execute(self::ARCHIVE, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function bisect(string ...$arguments): ResultInterface
    {

        return $this->execute(self::BISECT, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function blame(string ...$arguments): ResultInterface
    {

        return $this->execute(self::BLAME, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function branch(string ...$arguments): ResultInterface
    {

        return $this->execute(self::BRANCH, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function bundle(string ...$arguments): ResultInterface
    {

        return $this->execute(self::BUNDLE, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function checkout(string ...$arguments): ResultInterface
    {

        return $this->execute(self::CHECKOUT, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function cherry(string ...$arguments): ResultInterface
    {

        return $this->execute(self::CHERRY, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function cherryPick(string ...$arguments): ResultInterface
    {

        return $this->execute(self::CHERRY_PICK, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function clean(string ...$arguments): ResultInterface
    {

        return $this->execute(self::CLEAN, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function clone(string ...$arguments): ResultInterface
    {

        return $this->execute(self::CLONE, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function commit(string ...$arguments): ResultInterface
    {

        return $this->execute(self::COMMIT, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function config(string ...$arguments): ResultInterface
    {

        return $this->execute(self::CONFIG, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function describe(string ...$arguments): ResultInterface
    {

        return $this->execute(self::DESCRIBE, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function diff(string ...$arguments): ResultInterface
    {

        return $this->execute(self::DIFF, ...$arguments);
    }

    public function environmentVariables(): EnvironmentVariablesInterface
    {
        return $this->environmentVariables;
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function exec(string ...$arguments): ResultInterface
    {
        return $this->execute(self::EXEC, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function fetch(string ...$arguments): ResultInterface
    {

        return $this->execute(self::FETCH, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function fsck(string ...$arguments): ResultInterface
    {

        return $this->execute(self::FSCK, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function grep(string ...$arguments): ResultInterface
    {

        return $this->execute(self::GREP, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function init(string ...$arguments): ResultInterface
    {

        return $this->execute(self::INIT, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function log(string ...$arguments): ResultInterface
    {

        return $this->execute(self::LOG, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function lsTree(string ...$arguments): ResultInterface
    {

        return $this->execute(self::LS_TREE, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function merge(string ...$arguments): ResultInterface
    {

        return $this->execute(self::MERGE, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function mv(string ...$arguments): ResultInterface
    {

        return $this->execute(self::MV, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function notes(string ...$arguments): ResultInterface
    {

        return $this->execute(self::NOTES, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function pull(string ...$arguments): ResultInterface
    {

        return $this->execute(self::PULL, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function push(string ...$arguments): ResultInterface
    {

        return $this->execute(self::PUSH, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function rebase(string ...$arguments): ResultInterface
    {

        return $this->execute(self::REBASE, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function reflog(string ...$arguments): ResultInterface
    {

        return $this->execute(self::REFLOG, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function remote(string ...$arguments): ResultInterface
    {

        return $this->execute(self::REMOTE, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function renameBranch(string ...$arguments): ResultInterface
    {

        return $this->execute(self::BRANCH, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function reset(string ...$arguments): ResultInterface
    {

        return $this->execute(self::RESET, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function restore(string ...$arguments): ResultInterface
    {

        return $this->execute(self::RESTORE, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws ShellExceptionInterface
     * @throws GitExceptionInterface
     */
    #[Override]
    public function revParse(string ...$arguments): ResultInterface
    {
        return $this->execute(self::REV_PARSE, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function revert(string ...$arguments): ResultInterface
    {

        return $this->execute(self::REVERT, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function rm(string ...$arguments): ResultInterface
    {

        return $this->execute(self::RM, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function shortLog(string ...$arguments): ResultInterface
    {

        return $this->execute(self::SHORTLOG, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function show(string ...$arguments): ResultInterface
    {

        return $this->execute(self::SHOW, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function stash(string ...$arguments): ResultInterface
    {

        return $this->execute(self::STASH, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function status(string ...$arguments): ResultInterface
    {

        return $this->execute(self::STATUS, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function submodule(string ...$arguments): ResultInterface
    {

        return $this->execute(self::SUBMODULE, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function switch(string ...$arguments): ResultInterface
    {

        return $this->execute(self::SWITCH, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function tag(string ...$arguments): ResultInterface
    {

        return $this->execute(self::TAG, ...$arguments);
    }

    #[Override]
    public function workingDirectory(): WorkingDirectoryInterface
    {
        return $this->workingDirectory;
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function worktree(string ...$arguments): ResultInterface
    {
        return $this->execute(self::WORKTREE, ...$arguments);
    }

    /**
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    private function execute(string ...$arguments): ResultInterface
    {
        $result = $this->shell->execute(
            command: self::COMMAND,
            arguments: $arguments,
            workingDirectory: $this->workingDirectory->toString(),
            environmentVariables: $this->environmentVariables->toArray(),
        );

        if ($result->exitCode() === 0) {
            return $result;
        }

        throw new GitCommandFailedException(sprintf(
            'Git command "%s" failed with exit code %s.%sSTDOUT: %s%sSTDERR: %s%sWorking Directory: %s%s',
            implode(' ', $result->command()),
            $result->exitCode(),
            PHP_EOL,
            mb_trim($result->stdout()),
            PHP_EOL,
            mb_trim($result->stderr()),
            PHP_EOL,
            $this->workingDirectory->toString(),
            PHP_EOL,
        ));
    }
}
