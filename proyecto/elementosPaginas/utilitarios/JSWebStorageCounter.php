<?php

class JSWebStorageCounter extends _JS
{
    public $elementosJS = '
                            function clickCounter() {
                              if (typeof(Storage) !== "undefined") {
                                if (localStorage.clickcount) {
                                  localStorage.clickcount = Number(localStorage.clickcount)+1;
                                } else {
                                  localStorage.clickcount = 1;
                                }
                                document.getElementById("result2").innerHTML = "You have clicked the button " + localStorage.clickcount + " time(s).";
                              } else {
                                document.getElementById("result2").innerHTML = "Sorry, your browser does not support web storage...";
                              }
                            }';
}

?>
