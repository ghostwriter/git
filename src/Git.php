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

    private const string CAT_FILE = 'cat-file';

    private const string CHECKOUT = 'checkout';

    private const string CHECKOUT_INDEX = 'checkout-index';

    private const string CHECK_IGNORE = 'check-ignore';

    private const string CHERRY = 'cherry';

    private const string CHERRY_PICK = 'cherry-pick';

    private const string CLEAN = 'clean';

    private const string CLONE = 'clone';

    private const string COMMAND = 'git';

    private const string COMMIT = 'commit';

    private const string COMMIT_TREE = 'commit-tree';

    private const string CONFIG = 'config';

    private const string COUNT_OBJECTS = 'count-objects';

    private const string DAEMON = 'daemon';

    private const string DESCRIBE = 'describe';

    private const string DIFF = 'diff';

    private const string DIFF_INDEX = 'diff-index';

    private const string FAST_IMPORT = 'fast-import';

    private const string FETCH = 'fetch';

    private const string FILTER_BRANCH = 'filter-branch';

    private const string FORMAT_PATCH = 'format-patch';

    private const string FOR_EACH_REF = 'for-each-ref';

    private const string FSCK = 'fsck';

    private const string GC = 'gc';

    private const string GREP = 'grep';

    private const string HASH_OBJECT = 'hash-object';

    private const string IMAP_SEND = 'imap-send';

    private const string INIT = 'init';

    private const string INSTAWEB = 'instaweb';

    private const string LOG = 'log';

    private const string LS_FILES = 'ls-files';

    private const string LS_TREE = 'ls-tree';

    private const string MERGE = 'merge';

    private const string MERGE_BASE = 'merge-base';

    private const string MV = 'mv';

    private const string NOTES = 'notes';

    private const string PACK_OBJECTS = 'pack-objects';

    private const string PRUNE = 'prune';

    private const string PULL = 'pull';

    private const string PUSH = 'push';

    private const string READ_TREE = 'read-tree';

    private const string REBASE = 'rebase';

    private const string REFLOG = 'reflog';

    private const string REMOTE = 'remote';

    private const string REQUEST_PULL = 'request-pull';

    private const string RESET = 'reset';

    private const string RESTORE = 'restore';

    private const string REVERT = 'revert';

    private const string REV_LIST = 'rev-list';

    private const string REV_PARSE = 'rev-parse';

    private const string RM = 'rm';

    private const string SEND_EMAIL = 'send-email';

    private const string SHORTLOG = 'shortlog';

    private const string SHOW = 'show';

    private const string SHOW_REF = 'show-ref';

    private const string STASH = 'stash';

    private const string STATUS = 'status';

    private const string SUBMODULE = 'submodule';

    private const string SVN = 'svn';

    private const string SWITCH = 'switch';

    private const string SYMBOLIC_REF = 'symbolic-ref';

    private const string TAG = 'tag';

    private const string UNPACK_OBJECTS = 'unpack-objects';

    private const string UPDATE_INDEX = 'update-index';

    private const string UPDATE_REF = 'update-ref';

    private const string UPDATE_SERVER_INFO = 'update-server-info';

    private const string VERIFY_PACK = 'verify-pack';

    private const string WORKTREE = 'worktree';

    private const string WRITE_TREE = 'write-tree';

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
     * Example: git add ...
     *
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
     * Example: git am ...
     *
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
     * Example: git annotate ...
     *
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
     * Example: git apply ...
     *
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
     * Example: git archive ...
     *
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
     * Example: git bisect ...
     *
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
     * Example: git blame ...
     *
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
     * Example: git branch ...
     *
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
     * Example: git bundle ...
     *
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
     * Example: git cat-file ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function catFile(string ...$arguments): ResultInterface
    {
        return $this->execute(self::CAT_FILE, ...$arguments);
    }

    /**
     * Example: git check-ignore ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function checkIgnore(string ...$arguments): ResultInterface
    {
        return $this->execute(self::CHECK_IGNORE, ...$arguments);
    }

    /**
     * Example: git checkout ...
     *
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
     * Example: git checkout-index ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function checkoutIndex(string ...$arguments): ResultInterface
    {
        return $this->execute(self::CHECKOUT_INDEX, ...$arguments);
    }

    /**
     * Example: git cherry ...
     *
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
     * Example: git cherry-pick ...
     *
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
     * Example: git clean ...
     *
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
     * Example: git clone ...
     *
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
     * Example: git commit ...
     *
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
     * Example: git commit-tree ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function commitTree(string ...$arguments): ResultInterface
    {
        return $this->execute(self::COMMIT_TREE, ...$arguments);
    }

    /**
     * Example: git config ...
     *
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
     * Example: git count-objects ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function countObjects(string ...$arguments): ResultInterface
    {
        return $this->execute(self::COUNT_OBJECTS, ...$arguments);
    }

    /**
     * Example: git daemon ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function daemon(string ...$arguments): ResultInterface
    {
        return $this->execute(self::DAEMON, ...$arguments);
    }

    /**
     * Example: git describe ...
     *
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
     * Example: git diff ...
     *
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

    /**
     * Example: git diff-index ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function diffIndex(string ...$arguments): ResultInterface
    {
        return $this->execute(self::DIFF_INDEX, ...$arguments);
    }

    #[Override]
    public function environmentVariables(): EnvironmentVariablesInterface
    {
        return $this->environmentVariables;
    }

    /**
     * Example: git ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function execute(string ...$arguments): ResultInterface
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

        throw new GitCommandFailedException($result, $this->workingDirectory);
    }

    /**
     * Example: git fast-import ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function fastImport(string ...$arguments): ResultInterface
    {
        return $this->execute(self::FAST_IMPORT, ...$arguments);
    }

    /**
     * Example: git fetch ...
     *
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
     * Example: git filter-branch ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function filterBranch(string ...$arguments): ResultInterface
    {
        return $this->execute(self::FILTER_BRANCH, ...$arguments);
    }

    /**
     * Example: git for-each-ref ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function forEachRef(string ...$arguments): ResultInterface
    {
        return $this->execute(self::FOR_EACH_REF, ...$arguments);
    }

    /**
     * Example: git format-patch ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function formatPatch(string ...$arguments): ResultInterface
    {
        return $this->execute(self::FORMAT_PATCH, ...$arguments);
    }

    /**
     * Example: git fsck ...
     *
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
     * Example: git gc ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function gc(string ...$arguments): ResultInterface
    {
        return $this->execute(self::GC, ...$arguments);
    }

    /**
     * Example: git grep ...
     *
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
     * Example: git hash-object ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function hashObject(string ...$arguments): ResultInterface
    {
        return $this->execute(self::HASH_OBJECT, ...$arguments);
    }

    /**
     * Example: git imap-send ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function imapSend(string ...$arguments): ResultInterface
    {
        return $this->execute(self::IMAP_SEND, ...$arguments);
    }

    /**
     * Example: git init ...
     *
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
     * Example: git instaweb ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function instaweb(string ...$arguments): ResultInterface
    {
        return $this->execute(self::INSTAWEB, ...$arguments);
    }

    /**
     * Example: git log ...
     *
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
     * Example: git ls-files ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function lsFiles(string ...$arguments): ResultInterface
    {
        return $this->execute(self::LS_FILES, ...$arguments);
    }

    /**
     * Example: git ls-tree ...
     *
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
     * Example: git merge ...
     *
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
     * Example: git merge-base ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function mergeBase(string ...$arguments): ResultInterface
    {
        return $this->execute(self::MERGE_BASE, ...$arguments);
    }

    /**
     * Example: git mv ...
     *
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
     * Example: git notes ...
     *
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
     * Example: git pack-objects ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function packObjects(string ...$arguments): ResultInterface
    {
        return $this->execute(self::PACK_OBJECTS, ...$arguments);
    }

    /**
     * Example: git prune ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function prune(string ...$arguments): ResultInterface
    {
        return $this->execute(self::PRUNE, ...$arguments);
    }

    /**
     * Example: git pull ...
     *
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
     * Example: git push ...
     *
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
     * Example: git read-tree ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function readTree(string ...$arguments): ResultInterface
    {
        return $this->execute(self::READ_TREE, ...$arguments);
    }

    /**
     * Example: git rebase ...
     *
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
     * Example: git reflog ...
     *
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
     * Example: git remote ...
     *
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
     * Example: git request-pull ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function requestPull(string ...$arguments): ResultInterface
    {
        return $this->execute(self::REQUEST_PULL, ...$arguments);
    }

    /**
     * Example: git reset ...
     *
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
     * Example: git restore ...
     *
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
     * Example: git rev-list ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function revList(string ...$arguments): ResultInterface
    {
        return $this->execute(self::REV_LIST, ...$arguments);
    }

    /**
     * Example: git rev-parse ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function revParse(string ...$arguments): ResultInterface
    {
        return $this->execute(self::REV_PARSE, ...$arguments);
    }

    /**
     * Example: git revert ...
     *
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
     * Example: git rm ...
     *
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
     * Example: git send-email ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function sendEmail(string ...$arguments): ResultInterface
    {
        return $this->execute(self::SEND_EMAIL, ...$arguments);
    }

    #[Override]
    public function shell(): ShellInterface
    {
        return $this->shell;
    }

    /**
     * Example: git shortlog ...
     *
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
     * Example: git show ...
     *
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
     * Example: git show-ref ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function showRef(string ...$arguments): ResultInterface
    {
        return $this->execute(self::SHOW_REF, ...$arguments);
    }

    /**
     * Example: git stash ...
     *
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
     * Example: git status ...
     *
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
     * Example: git submodule ...
     *
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
     * Example: git svn ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function svn(string ...$arguments): ResultInterface
    {
        return $this->execute(self::SVN, ...$arguments);
    }

    /**
     * Example: git switch ...
     *
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
     * Example: git symbolic-ref ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function symbolicRef(string ...$arguments): ResultInterface
    {
        return $this->execute(self::SYMBOLIC_REF, ...$arguments);
    }

    /**
     * Example: git tag ...
     *
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

    /**
     * Example: git unpack-objects ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function unpackObjects(string ...$arguments): ResultInterface
    {
        return $this->execute(self::UNPACK_OBJECTS, ...$arguments);
    }

    /**
     * Example: git update-index ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function updateIndex(string ...$arguments): ResultInterface
    {
        return $this->execute(self::UPDATE_INDEX, ...$arguments);
    }

    /**
     * Example: git update-ref ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function updateRef(string ...$arguments): ResultInterface
    {
        return $this->execute(self::UPDATE_REF, ...$arguments);
    }

    /**
     * Example: git update-server-info ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function updateServerInfo(string ...$arguments): ResultInterface
    {
        return $this->execute(self::UPDATE_SERVER_INFO, ...$arguments);
    }

    /**
     * Example: git verify-pack ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function verifyPack(string ...$arguments): ResultInterface
    {
        return $this->execute(self::VERIFY_PACK, ...$arguments);
    }

    #[Override]
    public function workingDirectory(): WorkingDirectoryInterface
    {
        return $this->workingDirectory;
    }

    /**
     * Example: git worktree ...
     *
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
     * Example: git write-tree ...
     *
     * @param list<non-empty-string> $arguments
     *
     * @throws GitExceptionInterface
     * @throws ShellExceptionInterface
     */
    #[Override]
    public function writeTree(string ...$arguments): ResultInterface
    {
        return $this->execute(self::WRITE_TREE, ...$arguments);
    }
}
