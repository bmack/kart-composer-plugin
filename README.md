# Composer-based listener provider for PSR-14

## What does it do?

This package is a composer plugin that hooks before "dump autoload", generates a PHP
class which contains Listeners that are simply registered by the "extra" section.

    "extra": {
        "psr-14": {
            "default": "src/Listeners"
        }
    }

This folder usually then contains listener classes/functions for PSR-14 events.

Once installed, all listeners are added to a class called

`Bmack\KartComposerPlugin\ComposerReflectionListenerProvider` which implements
the PSR-14 `ListenerProvider` interface.

This is based on `roave/better-reflection`.

Due to composer's dependency tree, all listeners are loaded and executed based
on their dependencies for a certain event.


## Usage

1. Install the composer plugin or any package that depends on the package.
2. Add the ListenerProvider to your dispatcher implementation.


## License

MIT

## Author

Benni Mack, 2019