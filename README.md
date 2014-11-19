# PHP Spec test examples

This repository was created for experimentation on [DSpec][1], [Espérance][2]
and, maybe, other PHP test frameworks and assertion libraries.

## Running it

Clone the repos and install dependencies with composer.

    git clone https://github.com/paulodiovani/dspec-example-tests.git
    cd dspec-example-tests
    composer install

Test.

    composer test

You may prefer to run `dspec` manually, since through composer it [doesn't display
colors][10].

[1]: https://github.com/paulodiovani/dspec
[2]: https://github.com/paulodiovani/esperance

[10]: http://stackoverflow.com/questions/27024298/keep-color-output-when-running-scripts-on-composer