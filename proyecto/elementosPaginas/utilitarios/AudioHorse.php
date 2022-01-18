<?php

class AudioHorse extends _Audio
{

    public $atributosSourceMultimedia = array(
                                    "src"=>"../../../assets/audios/horse.ogg",
                                    "type"=>"audio/ogg",
                                  );

    public $atributosAudio = array(
                                        "controls",
                                        "autoplay",
                                        "muted",

                                      );
    public $elementosAudio = "Your browser does not support the audio element.";

}

?>
