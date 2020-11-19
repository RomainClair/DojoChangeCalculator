# A simple cash machine

## Skills & concepts

* Arithmetic
* Arrays

## Set-up

This Dojo uses PHPunit for unit testing. After cloning the repository, you need to install it using composer :
```bash
composer install
```

## Goals

Add a getChange class method in the CashMachine class
This method returns an array containing the number of each bills and coins needed to have a given amount, using a minimum number of bills & coins.

We're assuming that we are dealing with euros so possible bills and coins are :
- 500
- 200
- 100
- 50
- 20
- 10
- 5
- 2
- 1

And there's not cents involved (so amount given will be an integer).

Examples :

* CashMachine::getChange(83) should return 
```php 
[50 => 1, 20 => 1, 10 => 1, 2 => 1, 1 => 1] 
```

## Test

You can run some predefined tests on your function using 
```bash
vendor/bin/phpunit test
```