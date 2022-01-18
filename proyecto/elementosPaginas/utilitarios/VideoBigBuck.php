<?php

class VideoBigBuck extends _Video
{

    public $atributosSourceMultimedia = array(
                                    "src"=>"../../../assets/videos/mov_bbb.mp4",
                                    "type"=>"video/mp4",
                                  );

    public $atributosVideo = array(
                                        "width"=>"400",
                                        "controls",
                                        "autiplay",
                                        "muted",
                                      );
    public $elementosVideo = "Your browser does not support HTML video.";

}

?>
