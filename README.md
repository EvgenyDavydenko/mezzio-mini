# mezzio

*Develop PSR-7 middleware applications in minutes!*

mezzio builds on [laminas-stratigility](https://github.com/laminas/laminas-stratigility)
to provide a minimalist PSR-7 middleware framework for PHP, with the following
features:

- Routing. Choose your own router; we support:
    - [Aura.Router](https://github.com/auraphp/Aura.Router)
    - [FastRoute](https://github.com/nikic/FastRoute)
    - [laminas-router](https://github.com/mezzio/mezzio-router)
- DI Containers, via [PSR-11 Container](https://github.com/php-fig/container).
  Middleware matched via routing is retrieved from the composed container.
- Optionally, templating. We support:
    - [Plates](http://platesphp.com/)
    - [Twig](http://twig.sensiolabs.org/)
    - [Laminas's PhpRenderer](https://github.com/laminas/laminas-view)

## Installation

We provide two ways to install Mezzio, both using
[Composer](https://getcomposer.org): via our
[skeleton project and installer](https://github.com/mezzio/mezzio-skeleton),
or manually.

### Manual Composer installation

You can install Mezzio standalone using Composer:

```bash
$ composer require mezzio/mezzio
```

However, at this point, Mezzio is not usable, as you need to supply
minimally:

- a router.
- a dependency injection container.

We currently support and provide the following routing integrations:

- [FastRoute](https://github.com/nikic/FastRoute):
  `composer require mezzio/mezzio-fastroute`

We recommend using a dependency injection container, and typehint against
[PSR-11 Container](https://github.com/php-fig/container). We
can recommend the following implementations:

- [laminas-servicemanager](https://github.com/laminas/laminas-servicemanager):
  `composer require laminas/laminas-servicemanager`

Additionally, you may optionally want to install a template renderer
implementation, and/or an error handling integration. These are covered in the
documentation.

## Documentation

Additionally, public-facing, browseable documentation is available at
https://docs.mezzio.dev/mezzio/

# Mini Mezzio

https://github.com/asgrim/mini-mezzio


