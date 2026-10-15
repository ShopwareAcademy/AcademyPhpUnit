![Workflow Status](https://github.com/ShopwareAcademy/AcademyPhpUnit/actions/workflows/phpunit.yml/badge.svg)

# AcademyPhpUnit

This plugin is part of the **Backend Development Essentials** learning path of the Shopware Academy.

It demonstrates how to:

- Add a simple Symfony console command to a Shopware plugin.
- Configure and bootstrap PHPUnit for a Shopware plugin.
- Write a PHPUnit test for a command.
- Run the test locally and in a CI workflow.

Tested for **Shopware 6.7**.

## Install

Run the following commands to install the plugin:

**Shopware CLI:**

```bash
shopware-cli project console plugin:refresh
shopware-cli project console plugin:install AcademyPhpUnit --activate --clearCache
```

**Direct Shopware Console:**

```bash
bin/console plugin:refresh
bin/console plugin:install AcademyPhpUnit --activate --clearCache
```

## Run Tests

If PHPUnit is not available in your Shopware project, install it first:

**Shopware CLI:**

```bash
shopware-cli project composer require --dev phpunit/phpunit
```

**Direct Composer:**

```bash
composer require --dev phpunit/phpunit
```

Then run the test from the Shopware project root:

**Shopware CLI:**

```bash
shopware-cli project composer exec phpunit -- -c custom/plugins/AcademyPhpUnit/phpunit.xml
```

**Direct PHPUnit Binary:**

```bash
vendor/bin/phpunit -c custom/plugins/AcademyPhpUnit/phpunit.xml
```

The first test run prepares the Shopware test environment. This can create or reset the test database, run migrations, refresh plugins, install the example plugin, and clear caches.

If PHPUnit reports deprecations but the test status is `OK`, the test itself still passed. Review the deprecations because they may require future code or configuration updates.

## License

MIT License.

You may use this plugin in commercial and professional projects.
It is provided as an educational example and comes without a warranty and without support.

## Contributing

This plugin is part of the Shopware Academy curriculum.