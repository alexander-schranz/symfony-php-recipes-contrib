# Symfony Recipes using PHP Config Files

This repository provides [symfony/recipes](https://github.com/symfony/recipes)
using `PHP` instead of YAML files.

The project is using [symplify/config-transformer](https://github.com/symplify/config-transformer)
to convert the `.yaml` config files to `.php` config files. To make 100%
sure you are getting the same recommendation as the official recipes provides.

A big thank you to [TomasVotruba](https://github.com/TomasVotruba) for providing the `symplify/config-transformer`
package and fixing a lot of issues which did make this project even possible.

The converter can be found in the [alexander-schranz/symfony-recipes-yaml-to-php-converter](https://github.com/alexander-schranz/symfony-recipes-yaml-to-php-converter)
repository.

## Skeletons

There are currently also 2 skeletons shipped which can be used to create new symfony projects:

```bash
# symfony/skeleton:
composer create-project schranz/symfony-php-skeleton

# symfony/website-skeleton:
composer create-project schranz/symfony-php-website-skeleton
```
