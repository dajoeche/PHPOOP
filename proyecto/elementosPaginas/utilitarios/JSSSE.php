<?php

class JSSSE extends _JS
{
    public $elementosJS = '
                            if(typeof(EventSource) !== "undefined") {
                              var source = new EventSource("demo_sse.php");
                              source.onmessage = function(event) {
                                document.getElementById("result").innerHTML += event.data + "<br>";
                              };
                            } else {
                              document.getElementById("result").innerHTML = "Sorry, your browser does not support server-sent events...";
                            }';
}

?>
