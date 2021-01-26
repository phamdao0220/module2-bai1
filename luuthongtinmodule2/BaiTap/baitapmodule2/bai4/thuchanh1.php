<?php

class Application
{
    public $name;
    public static $count = 0;

    public function __construct($name)
    {
        $this->name = $name;
        self::$count++;
    }

    public function __toString()
    {
        return ' Application name : ' . $this->name;
    }
}

echo "Total objects count : " . Application::$count . "<br/>";
$app1 = new Application("apple one");
echo "Total objects count : " . Application::$count . "<br/>";
$app2 = new Application("apple two");
echo "Total objects count : " . Application::$count . "<br/>";
echo $app1 . "<br/>";
echo $app2 . "<br/>";
