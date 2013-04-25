ZertzBugBundle
========================

WARNING: Not ready for prime-time, still in very early development

This bundle provides a issue tracking tool built on top of Symfony 2 and
Sonata, useful for providing your users with a simple way to communicate with
developers.

### Features
- Issues
- Custom types

### Upcoming features
- Comments

1) Requirements
----------------------------------

There are very few requirements to get the bundle up and running, the most
important being a working installation of Symfony 2.

2) Installation
----------------------------------

### Using Composer

In your composer.json, add the following line:

    "require": {
        ...,

        "stof/doctrine-extensions-bundle": "dev-master",

        "zertz/bug-bundle": "dev-master"
    }

You will then need to run an update:

    php composer.phar update

3) Configuration
----------------------------------

### AppKernel.php

In your AppKernel, you need to include these dependencies:

    public function registerBundles()
    {
        $bundles = array(
            ...,

            new Zertz\BugBundle\ZertzBugBundle()
        );
        ...
    }

4) Database
----------------------------------

To update your schema, run the following command:

    php app/console doctrine:schema:update --force

5) Usage
----------------------------------

The bundle is configured with a service that automatically connects with
SonataAdminBundle.
