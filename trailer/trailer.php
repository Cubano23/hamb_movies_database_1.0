<?php include("../inithtml.php"); ?>

<?php include("../header.php"); ?>


<?php
$movie = $_GET["name"];
$year = $_GET["year"];

class MovieTrailer
{
    /**
    * Private variables for website interaction
    */
    private $movieName;
    private $movieYear;
    private $page;
    private $embed;
    private $matches;
 
    /**
    * Fetch movie trailer from YouTube
    *
    * @param $movie Movie Name
    * @param $year Movie Year
    * @return none
    */
    public function __construct($movie, $year)
    {
        $this->movieName = str_replace(' ', '+', $movie);
        $this->movieYear = $year;
        $this->page = file_get_contents('http://www.youtube.com/results?search_query='.$this->movieName.'+'.$this->movieYear.'+trailer&aq=1&hl=en');
 
        if($this->page)
        {
            if(preg_match('~<a .*?href="/watch\?v=(.*?)".*?</div>~s', $this->page, $this->matches))
            {
                $this->embed = '<iframe id="iframe-movie" width="100%" height="700" src="https://www.youtube.com/embed/'.$this->matches[1].'?autoplay=1" frameborder="0" allowfullscreen> </iframe> ';
                echo $this->embed;
            }
        }
        else
        {
            echo "<b>check internet connection.....</b>";
        }
    }
}


new MovieTrailer("$movie", $year);

?>

<?php include("../footer.php"); ?>

<?php include("../endhtml.php"); ?>
    

