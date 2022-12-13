<h1 align="center">Reading Time plugin for <a href="https://github.com/craftcms">Craft CMS</a></h1>

<p align="center">
<img src="https://img.shields.io/badge/license-MIT-blue.svg?label=License" alt="License MIT"> <img alt="GitHub Repo stars" src="https://img.shields.io/github/stars/awilum/craft-reading-time?label=Stars"> <img alt="GitHub forks" src="https://img.shields.io/github/forks/awilum/craft-reading-time?label=Forks"> <a href="https://hitsofcode.com"><img alt="Hits of Code" src="https://hitsofcode.com/github/awilum/craft-reading-time?branch=1.x"></a>
</p>

Reading Time plugin shows the estimated reading time of the content, in seconds or minutes.

## Requirements

* **Craft CMS**: ^4.0
* **PHP**: ^8.0

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:
    ```
    cd /path/to/project
    ```

2. In your terminal run `composer require awilum/craft-reading-time`.

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Reading Time.

### Usage

Display reading time in the twig templates:

```
{{ readingTime('Some text here ...') }}
```

Display reading time with custom translates in the twig templates:

```
{{ readingTime('Some text here ...', {
                'minute': 'Minute',
                'minutes': 'Minutes',
                'second':  'Second',
                'seconds': 'Seconds'
                }) }}
```

Display reading time with custom translates and format in the twig templates:

```
{{ readingTime('Some text here ...', {
                'minute': 'Minute',
                'minutes': 'Minutes',
                'second':  'Second',
                'seconds': 'Seconds',
                'format': '[minutes_count] [minutes_label] – [seconds_count] [seconds_label]'
                }) }}
```

Display reading time with custom translates and format that with alternative format that hides the `minutes` and `seconds` label in the twig templates

```
{{ readingTime('Some text here ...', {
                'minute': 'Minute',
                'minutes': 'Minutes',
                'second':  'Second',
                'seconds': 'Seconds',
                'format': '[minutes_count] [minutes_label] – [seconds_count] [seconds_label]'
                }) }}
```

Also you can use `readingTime` filter in your twig templates: 

```
{{ 'Some text here ...'|readingTime }}
```

Use `readingTime` function in the PHP:

```php
use function Awilum\CraftReadingTime\readingTime;

echo readingTime('Some text here ...');
```

## LICENSE
[The MIT License (MIT)](https://github.com/awilum/craft-reading-time/blob/master/LICENSE.md)
Copyright (c) [Sergey Romanenko](https://awilum.github.io/)
