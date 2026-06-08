![Workflow Status](https://github.com/ShopwareAcademy/AcademyPhpUnit/actions/workflows/phpunit.yml/badge.svg)

# AcademyPhpUnit

This plugin is part of the **Backend Development Essentials** learning path of the Shopware Academy.

It demonstrates how to:

- Add a simple Symfony console command to a Shopware plugin.
- Configure PHPUnit for a Shopware plugin.
- Bootstrap the Shopware test environment for plugin tests.
- Write a PHPUnit test for a command.
- Run the test locally and in a CI workflow.

Tested for **Shopware 6.7**

## Install

Run the following commands from your Shopware root directory to install the plugin:

```bash
bin/console plugin:refresh
bin/console plugin:install AcademyPhpUnit --activate --clearCache
```

## Run Tests

Run the PHPUnit test suite from your Shopware root directory:

```bash
vendor/bin/phpunit -c custom/plugins/AcademyPhpUnit/phpunit.xml
```

The first test run prepares the Shopware test environment. This can create or reset the test database, run migrations, refresh plugins, install the example plugin, and clear caches.

If PHPUnit reports deprecations but the test status is `OK`, the test itself still passed. Deprecations should still be reviewed because they may require future code or configuration updates.

## Features

- Adds the command `swag-commands:example`.
- Tests the command with PHPUnit.
- Includes a `TestBootstrap.php` file for the Shopware test environment.
- Includes a GitHub Actions workflow for running PHPUnit in CI.

## License

MIT License.

You may use this plugin in commercial and professional projects.
It is provided as an educational example and comes without a warranty and without support.

## Contributing

This plugin is part of the Shopware Academy curriculum.