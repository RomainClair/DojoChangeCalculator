# A simple cash machine

## Skills & concepts

* Arithmetic
* Arrays
* Tests & TDD

## Goals

Add a getChange class method in the CashMachine class using a TDD approach.

This method returns an array containing the number of each bills and coins needed to have a given amount, using a minimum number of bills & coins.

We're assuming that we are dealing with euros so possible bills and coins are :

* 200
* 100
* 50
* 20
* 10
* 5
* 2
* 1

And there's no cents involved (so amount given will be an integer).

Examples :

* CashMachine::getChange(83) should return

```php
[50 => 1, 20 => 1, 10 => 1, 2 => 1, 1 => 1] 
```

## Walkthough

### Step 1

Create the new project using composer.
You need to add phpunit as a dev dependency and to configure a PSR-4 autoloader

### Step 2

Create then run the tests. They should fail

### Step 3

Discuss your algorithmic strategy

### Step 4

Add a getChange class method in the CashMachine class
