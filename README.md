# Universally Unique Identifier (UUID)

<a href="https://packagist.org/packages/davidvandertuijn/uuid"><img src="https://poser.pugx.org/davidvandertuijn/uuid/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/davidvandertuijn/uuid"><img src="https://poser.pugx.org/davidvandertuijn/uuid/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/davidvandertuijn/uuid"><img src="https://poser.pugx.org/davidvandertuijn/uuid/license.svg" alt="License"></a>

![Universally Unique Identifier (UUID)](https://cdn.davidvandertuijn.nl/github/uuid.png)

A Universally Unique Identifier (UUID) is a standardized identifier that is used to uniquely distinguish information in computer systems. UUIDs are essential in a wide range of applications, from database management to distributed computing, as they provide a reliable means of ensuring that each identifier is unique across space and time.

[!["Buy Me A Coffee"](https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png)](https://www.buymeacoffee.com/davidvandertuijn)

## Install

```
composer require davidvandertuijn/uuid
```

## Usage

```php
use Davidvandertuijn\Uuid;
```

**Generate**

```php
Uuid::generate(); // XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX
```
