<?php   
require_once 'OST.php'; 
require_once 'song.php'; 

class Seeder {

    public static function initialize() {
        
        return array(
            new OST(1, "MC", "Minecraft", 2011, array(
            new song(1, "Stand Tall", "Lena Raine", 1, "5:08"), 
            new song(2, "Wending", "Lena Raine", 2, "5:14"),
            new song(3, "Floating Dream", "Lena Raine", 3, "3:25"),
            new song(4, "An Ordinairy Day", "Lena Raine", 4, "5:31"))),


            new OST(2, "R6", "Rainbow Six Siege", 2015, array(
            new song(5, "Baffin Bay", "Paul Haslinger", 1, "2:41"),
            new song(6, "Home", "Paul Haslinger", 2, "2:50"),
            new song(7, "Rainbow Fun Land", "Paul Haslinger", 3, "3:15"),
            new song(8, "Cool Vibes", "Paul Haslinger", 4, "4:12"))),


            new OST(3, "Valorant", "Valorant", 2020, array(
            new song(9, "Die For You", "Valorant", 1, "4:53"),
            new song(10, "Confused", "Hyume", 2, "2:25"),
            new song(11, "Drip", "Corbin Roe", 3, "3:54"),
            new song(12, "Underdogs", "Valorant", 4, "2:11")))
            
            );
    }
}


// Statische Klassenmethode
Seeder::initialize();