<?php

class StyleSelectors extends _Style
{
    public $elementosStyle = '
    p {
    color: red;
    text-align: center;
  }

 #para1 {
  text-align: center;
  color: blue;
}

.center {
  text-align: center;
  color: green;
}

p.center {
  text-align: center;
  color: red;
}

p.large {
  font-size: 300%;
}

* {
  text-align: center;
  color: blue;
}

h1, h2, p {
  text-align: center;
  color: red;
}

  ';
}

?>
