<?php
class OST implements JsonSerializable
{
    private int $id;
    private string $name;
    private string $videoGameName;
    private int $releaseYear;
    private array $songs;


    function __construct(int $id, string $name, string $videoGameName, int $releaseYear, array $songs)
    {
        $this->id = $id;
        $this->name = $name; 
        $this->videoGameName = $videoGameName; 
        $this->releaseYear = $releaseYear; 
        $this->songs = $songs; 
    }

    public function getId() : int
    {
        return $this->id;
    }
    public function jsonSerialize(){
        return array(
            'id' => $this->id,
            'name' => $this->name,
            'videoGameName' => $this->videoGameName,
            'releaseYear' => $this->releaseYear,
            'songs' => $this->songs,
        );
    }
    }


