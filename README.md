# Heureka

```php
$feedGenerator = new Sylapi\Feeds\FeedGenerator();
$feedGenerator->setFeed(new Sylapi\Feeds\Heureka\Feed(
    Sylapi\Feeds\Parameters::create([])
));

for($i = 0; $i < 100; $i++) 
{
    $product = new \Sylapi\Feeds\Models\Product();
    $feedGenerator->appendProduct($product);
}
```
