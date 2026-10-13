# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project

Ingatlan.One is a real estate showcase site (Hungarian market, Hungarian UI text) built on a small custom PHP micro-framework with DDD-inspired layering. The goal is architectural clarity without a full framework. Don't add a full framework (Symfony, Laravel, etc.); add only the small pieces that are actually needed.

## Commands

- Dev environment (PHP 8.4 + Apache + Xdebug, MySQL 8, a one-shot composer container that runs `composer update`):
  `docker compose -f .docker/docker-compose.yml up -d --build`. The site is served at http://localhost (document root `public/`).
- Shell into the PHP container: `docker exec -it i1-php-apache bash` (project mounted at `/var/www`).
- CLI entry point: `php cli.php <command> [args]`. Commands are registered in `config/cli/commands.php` (name → invokable class resolved from the container, called as `__invoke(array $args): int`); without a command it lists them.
- `phpunit` and `php-cs-fixer` are in `require-dev`, but there is no `tests/` directory or cs-fixer config yet.

## Architecture

**Bootstrapping:** `public/index.php` → `config/http/bootstrap.php` builds a PHP-DI container (autowiring plus explicit definitions in `config/container.php`) → `App\Framework\Kernel\Http::run()`. `cli.php` → `config/cli/bootstrap.php` → `Kernel\Console`. Interface bindings (e.g. `Application\Contract\MarkdownRenderer` → `Infrastructure\Markdown\LeagueMarkdownRenderer`) go in `config/container.php`.

**Layers (`src/`, namespace `App\`):**
- `Domain/`: data objects (`PropertyData`, `LocationData`, …) and many backed enums. Enums implement `Domain\LabeledEnum::label()` for Hungarian display labels (a stopgap until i18n). Property details are an open list of `PropertyAttributeData(PropertyAttribute::X, value)`.
- `Application/`: one invokable use case per class (`GetProperty`, `GetArticle`, `GetRelatedProperties`), a `*Query` that loads domain data, and a `*Factory` that maps domain data to `*ViewModel`s. Presentation consumes only view models.
- `Presentation/`: invokable controllers/components, each next to its `*.tpl.php` template. Templates are rendered with `Framework\View::render(__DIR__, 'name', [...])`, which `extract()`s the data array into plain PHP templates.
- `Cli/`: invokable console commands (`__invoke(array $args): int`), registered in `config/cli/commands.php`. They parse arguments, call an Application use case and print the result.
- `Infrastructure/`: adapters for `Application/Contract` interfaces.
- `Framework/`: kernel, `View`, and `Path` (resolves paths relative to the project root; use it instead of `__DIR__` chains).

**Frontend:** static assets in `public/` (`css/i1.css`, `js/property.js` + PhotoSwipe gallery, `js/calculator*.js`, Lucide icons; highlight icons in property data are Lucide icon names).

## Conventions

- `declare(strict_types=1);`, constructor property promotion with `private readonly`, and invokable single-purpose classes (`__invoke`).
- follow DDD principles
- create minimal changes, document features in .md files in the directory of the source code file
  define the feature first, look for edge cases, start with a unit test if it makes sense
- try to introduce the least dependencies possible, if a dependency is needed start looking for alternatives first, justify your decision
