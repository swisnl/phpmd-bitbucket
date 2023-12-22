# PHPMD Bitbucket error renderer

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Buy us a tree][ico-treeware]][link-treeware]
[![Total Downloads][ico-downloads]][link-downloads]
[![Maintained by SWIS][ico-swis]][link-swis]

This PHPMD renderer will add annotations in Bitbucket, for example in pull requests, similar to the built-in GitHub formatting.

## Installation

Via Composer

```bash
composer require --dev swisnl/phpmd-bitbucket
```

## Usage

To use this custom renderer you need to run PHPMD with the FQCN of the renderer. For example:

```bash
phpmd . "\Swis\PHPMD\Renderer\BitbucketRenderer" phpmd.ruleset.xml
```

## Screenshots

TODO

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email security@swis.nl instead of using the issue tracker.

## Credits

- [Jasper Zonneveld][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

This package is [Treeware](https://treeware.earth). If you use it in production, then we ask that you [**buy the world a tree**][link-treeware] to thank us for our work. By contributing to the Treeware forest you’ll be creating employment for local families and restoring wildlife habitats.

## SWIS :heart: Open Source

[SWIS][link-swis] is a web agency from Leiden, the Netherlands. We love working with open source software.

[ico-version]: https://img.shields.io/packagist/v/swisnl/phpmd-bitbucket.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-treeware]: https://img.shields.io/badge/Treeware-%F0%9F%8C%B3-lightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/swisnl/phpmd-bitbucket.svg?style=flat-square
[ico-swis]: https://img.shields.io/badge/%F0%9F%9A%80-maintained%20by%20SWIS-%230737A9.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/swisnl/phpmd-bitbucket
[link-downloads]: https://packagist.org/packages/swisnl/phpmd-bitbucket
[link-treeware]: https://plant.treeware.earth/swisnl/phpmd-bitbucket
[link-fork]: https://github.com/modprobe/phpmd-bitbucket
[link-author]: https://github.com/JaZo
[link-contributors]: ../../contributors
[link-swis]: https://www.swis.nl
