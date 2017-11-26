[![PDS Skeleton](https://img.shields.io/badge/pds-skeleton-blue.svg?style=flat-square)](https://github.com/php-pds/skeleton)

# PHP Package Skeleton

This skeleton is an example package using the standard filesystem structure as proposed by <https://github.com/php-pds/skeleton>.
In contrast to PDS Skeleton it adds some additional folders and files.

## Summary

The package contains the following root-level directories:

| Directory              | Description                                   |
| ---------------------- | --------------------------------------------- |
| `bin/`                 | command-line executables                      |
| `config/`              | configuration files                           |
| `docs/`                | documentation files                           |
| `examples/`            | example files                                 |
| `public/`              | web server files                              |
| `resources/`           | other resource files                          |
| `src/`                 | PHP source code                               |
| `tests/`               | test code                                     |
| `vendor/`              | vendor files managed by composer              |

The package contains the following root-level files:

| Files                  | Description                                   |
| ---------------------- | --------------------------------------------- |
| `CHANGELOG.md`         | a log of changes between releases             |
| `CONTRIBUTING.md`      | guidelines for contributors                   |
| `LICENSE`              | licensing information                         |
| `README.md`            | information about the package itself          |

The package contains the following scripts:

| Script                 | Description                                   |
| ---------------------- | --------------------------------------------- |
| `composer test`        | run minimal testsuite with phpunit and phpcs  |
| `composer run`         | start webserver from public directory         |
| `composer phpunit`     | run unit tests                                |
| `composer phpcs`       | run php code sniffer                          |
| `composer docs:build`  | build project documentation                   |
| `composer docs:serve`  | serv project documentation                    |


## Root-Level Directories

### bin/

### config/

### docs/

### examples/

### public/

### resources/

### src/

### tests/

### vendor/

### Other Directories

## Root-Level Files

### .gitignore

### .travis.yml

### CHANGELOG.md

### .composer.json

### .composer.lock

### CONTRIBUTING.md

### LICENSE

### mkdocs.yml

### phpcs.xml

### phpunit.xml

### README.md

### Other Files

## Scripts

A script, in Composer's terms, is either a PHP callbacks or any command-line executable command.
They are defined in the root `composer.json` package and are useful for executing a package's custom code or package-specific commands during the Composer execution process.
