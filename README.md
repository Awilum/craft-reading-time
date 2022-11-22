# reading-time
Estimated reading time plugin for Craft CMS

## Requirements

This plugin requires Craft CMS 4.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:
    ```
    cd /path/to/project
    ```

2. In your terminal run `composer require craft-plugins/reading-time`.

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
                'format': '{minutes_count} {minutes_label} – {seconds_count} {seconds_label}'
                }) }}
```

Display reading time with custom translates and format that with alternative format that hides the `minutes` and `seconds` label in the twig templates

```
{{ readingTime('Some text here ...', {
                'minute': 'Minute',
                'minutes': 'Minutes',
                'second':  'Second',
                'seconds': 'Seconds',
                'format': '{minutes_count} {minutes_label} – {seconds_count} {seconds_label}',
                'format.alt': '{minutes_count} : {seconds_count}',
                'format.alt: true
                }) }}
```

Also you can use `readingTime` filter in your twig templates: 

{{ 'Some text here ...'|readingTime }}

Display page view counter in the php:

```php
use function CraftPlugins\ReadingTime\readingTime;

echo readingTime($content, $options);
```

## LICENSE
[The MIT License (MIT)](https://github.com/craft-plugins/reading-time/blob/master/LICENSE.md)
Copyright (c) [Sergey Romanenko](https://awilum.github.io/)