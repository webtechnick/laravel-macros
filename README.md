# laravel-macros

A useful set of macros for laravel's collection.

### noPreserveReverse

Consider the following:

```
$col = collect(['foo', 'bar', 'baz']);

for ($i = 0; $i < count($col); $i++) {
   echo $col[$i];
}
// foo, bar, baz. expected.

$colreverse = $col->reverse();
for ($i = 0; $i < count($colreverse); $i++) {
   echo $colreverse[$i];
}
// also foo, bar, baz because keys are preserved by default. unexpected.

$colnopreserve = $col->noPreserveReverse();
for ($i = 0; $i < count($colnopreserve); $i++) {
   echo $colnopreserve[$i];
}
// baz, bar, foo. expected.
```



