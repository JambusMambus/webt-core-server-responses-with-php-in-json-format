<?php

class song
{
    private int $id;
    private string $name;
    private string $artist;
    private int $trackNr;
    private string $duration;

    function __construct(int $id, string $name, string $artist, int $trackNr, string $duration)
    {
        $this->id = $id;
        $this->name = $name; 
        $this->artist = $artist; 
        $this->trackNr = $trackNr; 
        $this->duration = $duration; 
    }

    public function getId()
    {
        return $this->id;
    }

    public function jsonSerialize(){
    return array(
        'id' => $this->id,
        'name' => $this->name,
        'artist' => $this->artist,
        'trackNumber' => $this->trackNumber,
        'duration' => $this->duration,
    );
    }
}