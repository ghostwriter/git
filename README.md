# Git

[![Automation](https://github.com/ghostwriter/git/actions/workflows/automation.yml/badge.svg)](https://github.com/ghostwriter/git/actions/workflows/automation.yml)
[![PHP Version](https://badgen.net/packagist/php/ghostwriter/git?color=777BB4)](https://www.php.net/supported-versions)
[![Packagist Downloads](https://badgen.net/packagist/dt/ghostwriter/git?color=F28D1A)](https://packagist.org/packages/ghostwriter/git)
[![PayPal](https://img.shields.io/badge/paypal-@codepoet-0079C1?logo=paypal&logoColor=002991)](https://paypal.me/codepoet)
[![Sponsors via GitHub](https://img.shields.io/github/sponsors/ghostwriter?label=Sponsor+@ghostwriter/git&logo=GitHub+Sponsors)](https://github.com/sponsors/ghostwriter)

PHP wrapper for Git commands

## Installation

You can install the package via composer:

``` bash
composer require ghostwriter/git
```

### Star ⭐️ this repo if you find it useful

You can also star (🌟) this repo to find it easier later.

## Usage

```php
use Ghostwriter\Git\Git;

$environmentVariables = [
    'GIT_AUTHOR_NAME'  => 'Nathanael Esayeas',
    'GIT_AUTHOR_EMAIL' => 'nathanael.esayeas@protonmail.com',
];

$git = Git::new('/path/to/repo', $environmentVariables);
$git->init();
$git->add('file.txt');
$git->commit('-m', 'Initial commit');
$git->push('origin', 'main');

// Cloning a repository
$git->clone('git@github.com:ghostwriter/git.git', '--depth=1', '/path/to/clone');

// Each cloned repository should be managed with its own Git instance as follows:
$environmentVariables['GIT_AUTHOR_NAME'] = 'ghostwriter';
$environmentVariables['GIT_AUTHOR_EMAIL'] = 'ghostwriter@users.noreply.github.com';

$clonedGit = Git::new('/path/to/clone', $environmentVariables);
$clonedGit->status();
```

### Credits

- [Nathanael Esayeas](https://github.com/ghostwriter)
- [All Contributors](https://github.com/ghostwriter/git/contributors)

### Changelog

Please see [CHANGELOG.md](./CHANGELOG.md) for more information on what has changed recently.

### License

Please see [LICENSE](./LICENSE) for more information on the license that applies to this project.

### Security

Please see [SECURITY.md](./SECURITY.md) for more information on security disclosure process.
