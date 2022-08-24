# Interface Segregation Principle

Interface segregation principle states:

> A client should never be forced to implement an interface that it doesn’t use, or clients shouldn’t be forced to depend on methods they do not use. 

```php
interface ShapeInterface
{
    public function area();

    public function volume();
}
```
Now, any shape you create must implement the volume method, but you know that squares are flat shapes and that they do not have volumes, so this interface would force the Square class to implement a method that it has no use of.

```php
interface ShapeInterface
{
    public function area();
}

interface ThreeDimensionalShapeInterface
{
    public function volume();
}
```

This is a much better approach, but a pitfall to watch out for is when type-hinting these interfaces. Instead of using a ShapeInterface or a ThreeDimensionalShapeInterface, you can create another interface, maybe ManageShapeInterface, and implement it on both the flat and three-dimensional shapes.

```php
interface ManageShapeInterface
{
    public function calculate();
}
```