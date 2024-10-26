![laravel-loghole-repo-banner](https://pbs.twimg.com/profile_banners/593785558/1671194657/1500x500)

# Packages Testing

The Packages Testing project serves as a testing ground for various Laravel packages, including the LogHole package. This repository provides an easy way to set up your development environment using Docker.

[![Latest version](https://img.shields.io/github/release/digitaldev-lx/loghole?style=flat-square)](https://github.com/digitaldev-lx/loghole/releases)
[![GitHub license](https://img.shields.io/github/license/digitaldev-lx/loghole?style=flat-square)](https://github.com/digitaldev-lx/loghole/blob/master/LICENSE)

---

## Requirements

| Release |  PHP   | Laravel |
|---------|:------:|:-------:|
| 1.0.0   | >= 8.2 |   10    |

---

## Installation

To get started, follow these steps:

Clone the repository:

```bash
git clone https://github.com/digitaldev-lx/packages-testing
cd packages-testing

```

Install dependencies:

```bash
composer install
```

Run Docker:

```bash
docker-compose up -d
```

## Log-Hole Package Development
The LogHole package is currently being developed in the log-hole branch. To test the package with your packages-testing environment, you'll need to create a symlink to the LogHole package directory.

## Creating a Symlink
To create a symlink between the packages-testing project and the log-hole package, ensure you have the following in your composer.json:

```php
"minimum-stability": "dev",
"prefer-stable": true,
"repositories": [
    {
        "type": "path",
        "url": "./log-hole",
        "options": {
            "symlink": true
        }
    }
]
```

This configuration allows Composer to link the LogHole package directly into your project, facilitating real-time testing of any changes you make.

## Docker Volumes Explanation

In your docker-compose.yml file, you should have the following volumes configuration:


```yaml
volumes:
    - "./:/app"
    - "../log-hole:/app/log-hole"
```

The first line ("./:/app") mounts the current directory into the Docker container, allowing you to access your application code. The second line ("../log-hole:/app/log-hole") mounts the LogHole package directory into the container, ensuring that any updates you make to the package are immediately reflected in your testing environment. This setup is essential for efficient development and testing.


---

## License

**digitaldev-lx/log-hole** is open-sourced software licensed under the [MIT license](https://github.com/digitaldev-lx/laravel-eupago/blob/master/LICENSE).


## About DigitalDev

[DigitalDev](https://www.digitaldev.pt) is a web development agency based on Lisbon, Portugal. We specialize in Laravel, Livewire, and Tailwind CSS.
[Codeboys](https://www.codeboys.pt) is our special partner and we work together to deliver the best solutions for our clients.



