<!DOCTYPE html>
<html>

<body style="text-align:center; font-size:26px;">

    <?php
    class Shape
    {
        public string $name;

        public function __construct($name)
        {
            $this->name = $name;
        }
        function show()
        {
            echo "This is a shape name calling in parent class: $this->name<br><br>";
        }
    }

    class Rectangle extends Shape
    {
        public int $width;
        public int $height;
        public int $area;

        public function __construct($name, $height, $width)
        {
            parent::__construct($name);
            $this->height = $height;
            $this->width = $width;
        }

        function show()
        {
            echo "<h4 style='color:red'>The name of a the Class is: {$this->name}</h4><br>";
            echo "The height of {$this->name} is: {$this->height}<br>";
            echo "The width of {$this->name} is: {$this->width}<br>";
        }

        function area()
        {
            $area = $this->width * $this->height;
            echo "The area of the rectangle is: $area<br><br>";
        }
    }

    class Square extends Rectangle
    {

        public function __construct($sides)
        {
            parent::__construct('square', $sides, $sides);
        }

        function area()
        {
            echo " <h4 style='color:green'>The Name of a Class is:$this->name</h4><br> ";
            echo "The Side value of a square is:$this->height<br> ";
            $area = $this->height * $this->height;
            echo "The area of {$this->name} : $area<br><br>";
        }
    }

    class Circle extends Shape
    {
        public int $radius;

        public function __construct($radius)
        {
            parent::__construct('circle');
            $this->radius = $radius;
        }

        public function area()
        {
            echo " <h4 style='color:blue'>The Name of a Class is:$this->name</h4><br> ";
            echo " The Radious of a Circle is:$this->radius<br>";
            $area = pi() * pow($this->radius, 2);
            echo "The area of the circle is: $area<br><br>";
        }
    }

    class Triangle extends Shape
    {
        public int $base;
        public int $height;

        public function __construct($base, $height)
        {
            parent::__construct('triangle');
            $this->base = $base;
            $this->height = $height;
        }

        public function area()
        {
            echo " <h4 style='color:yellow'>The Name of a Class is:$this->name</h4><br> ";
            echo "The Base of Triangle is:$this->base<br>";
            echo "The Height of Triangle is:$this->height<br>";
            $area = ($this->base * $this->height) / 2;
            echo "The area of a triangle is: $area<br>";
        }
    }

    // objects of classes
    $shapeObj = new Shape('Shape class');
    $shapeObj->show();

    $rectangleObj = new Rectangle('rectangle', 10, 20);
    $rectangleObj->show();
    $rectangleObj->area();

    $squareObj = new Square(4);
    $squareObj->area();

    $circleObj = new Circle(5);
    $circleObj->area();

    $triangleObj = new Triangle(10, 5);
    $triangleObj->area();
    ?>

</body>

</html>