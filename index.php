class IndeedFetch {

public static function fetchJobs($brands,$locations) {



//Loop through each brand
foreach ($brands as $brand) {

//prepare the brand parameters
$brandTitle = $brand['brand_title'];
$brandId = $brand['brand_id'];

//we need to use this brand title format for first page at indeeed.com
$brandTitle1 = str_replace(' ', '-', $brandTitle);

//we need to use this brand title format for other pages

$brandTitle = str_replace(' ', '+', $brandTitle);

//loop through each locations
foreach ($locations as $location) {

//prepare the location parameters to save in the database
$locationTitle = $location['name'];
$locationId = $location['location_id'];
$locationTitle1 = str_replace(' ', '-', $locationTitle);
$locationTitle = str_replace(' ', '+', $locationTitle);


//Get jobs for the first page
$url = "https://www.indeed.com.pk/q-" . $brandTitle1 . "-l-" . $locationTitle1 . "-jobs.html";
$jobLinks = self::getJobLinks($url);

//Url for other pages


for ($i = 10; $i <= 50; $i=$i + 10) { $url="https://www.indeed.com.pk/jobs?q=" . $brandTitle . "&l=" . $locationTitle
    . "&start=" . $i; if (is_array($jobLinks)) { $jobLinks=array_merge($jobLinks, self::getJobLinks($url)); } } //end
    for loop $jobs=array(); foreach ($jobLinks as $jobLink) { $job=self::getJobDetails($jobLink); if ($job) {
    $jobs[]=array_merge($jobs, $job); } //end this if condition } //end this foreach loop for jobliniks
    $jobArray[$location]=$jobs; } //end locations loop }//End brands loop return $jobArray; } //end function public
    static function getJobLinks($url) { $html=file_get_contents($url); $jobLinks=array(); $job_doc=new DOMDocument();
    libxml_use_internal_errors(TRUE); //disable libxml errors if (!empty($html)) { //if any html is actually returned
    $job_doc->loadHTML($html);
    libxml_clear_errors(); //remove errors for yucky html

    $job_xpath = new DOMXPath($job_doc);

    //get all elements in this class

    $anchors = $job_xpath->query('//h2[@class="jobtitle"]/a');



    if ($anchors->length > 0) {

    //loop through all the pokemons
    foreach ($anchors as $a) {

    $jobLinks[] = "https://www.indeed.com" . $a->getAttribute("href") . "
    ";
    }
    }
    }


    return $jobLinks;
    }

    public static function getJobDetails($url) {

    //disable the redirection
    $context = stream_context_create(
    array(
    'http' => array(
    'follow_location' => false
    )
    )
    );

    //Get the required parameter from url to reform it
    $parts = parse_url($url);
    parse_str($parts['query'], $query);
    $last = isset($query['jk']) ? $query['jk'] : 0;

    //form the url correctly because original url is giving errors
    if ($last) {

    $url = "https://www.indeed.com/viewjob?jk=" . $last;
    } else {
    return Null;
    }

    $html = file_get_contents($url, false, $context);


    $job_doc = new DOMDocument();

    libxml_use_internal_errors(TRUE); //disable libxml errors

    if (!empty($html)) { //if any html is actually returned
    $job_doc->loadHTML($html);
    libxml_clear_errors(); //remove errors for yucky html

    $job_xpath = new DOMXPath($job_doc);

    $title = $job_xpath->query('//b[@class="jobtitle"]', $job_doc)->item(0)->nodeValue;
    $description = $job_xpath->query('//span[@id="job_summary"]', $job_doc)->item(0)->nodeValue;
    $link = $job_xpath->query('//div[@class="job-footer-button-row"]/a');


    //If we have option selected which needs to fetch jobs for this day only


    $date = $job_xpath->query('//span[@class="date"]', $job_doc)->item(0)->nodeValue;
    $postDate = strtotime($date);
    $lastDay = strtotime('-1 day');

    if (!$postDate) {
    return Null;
    }

    if ($postDate < $lastDay) { return Null; } } if ($link->length > 0) {

        $applyLink = "https://www.indeed.com" . $link->item(0)->getAttribute("href");





        $job = array(
        'title' => $title,
        'description' => $description,
        'link' => $applyLink
        );
        }


        return $job;
        }