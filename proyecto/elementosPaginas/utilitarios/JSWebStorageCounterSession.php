<?php

class JSWebStorageCounterSession extends _JS
{
    public $elementosJS = '
                            function clickCounter2() {
                            if (typeof(Storage) !== "undefined") {
                              if (sessionStorage.clickcount) {
                                sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;
                              } else {
                                sessionStorage.clickcount = 1;
                              }
                              document.getElementById("result3").innerHTML = "You have clicked the button " + sessionStorage.clickcount + " time(s) in this session.";
                            } else {
                              document.getElementById("result3").innerHTML = "Sorry, your browser does not support web storage...";
                            }
                          }';
}

?>
