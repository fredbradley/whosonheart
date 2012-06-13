<?php
/*
$result = $db->getrows("SELECT * FROM woh_guesses");
//$result[] = mysql_fetch_assoc($result);
var_dump($result);
// input misspelled word
$input = $_GET['word'];

// array of words to check against
$words  = array('apple','pineapple','banana','orange',
                'radish','carrot','pea','bean','potato');
// no shortest distance found, yet
$shortest = -1;

// loop through words to find the closest
foreach ($words as $word) {

    // check for an exact match
    if ($input == $word) {

        // closest word is this one (exact match)
        $closest = $word;
        $shortest = 0;

        // break out of the loop; we've found an exact match
        break;
    }

    // calculate the distance between the input word,
    // and the current word
    $lev = levenshtein($input, $word);

    // if this distance is less than the next found shortest
    // distance, OR if a next shortest word has not yet been found
    if ($lev <= $shortest || $shortest < 0) {
        // set the closest match, and shortest distance
        $closest  = $word;
        $shortest = $lev;
    }
}
echo "Input word: $input\n";
if ($shortest == 0) {
    echo "<b>Exact match found: $closest\n</b>";
} else {
    echo "<b>Did you mean: $closest?\n</b>";
}
*/
?>
