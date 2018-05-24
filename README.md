# Magento 2 - Custom Route Module

## Overview

A Magento 2 module demonstrating how to add and configure a dynamic route from the admin.

## Requirements

Magento Open Source (CE) Version 2.1.x, 2.2.x

## Installation

Include the package.

```bash
$ composer require sussexdev/module-customroute
```

Enable the module.

```bash
$ php bin/magento module:enable SussexDev_CustomRoute
$ php bin/magento setup:upgrade
$ php bin/magento cache:clean
```

## Usage

In the admin, head to ```Stores -> Configuration -> Sussex Dev -> Custom Route``` and activate the module.
