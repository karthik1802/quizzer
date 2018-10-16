<?php

function factScrap(){

// to do:
// make facts change daily

  $curl = curl_init();
  $all_data = array();
  $url ="https://www.thefactsite.com/2011/07/top-100-random-funny-facts.html";
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_exec($curl);


  $result = curl_exec($curl);

  $quotes = array();

//match movie title
  preg_match_all('!<li class="top-100-li">\s?<h2>(.*?)<\/h2>\s?!',$result,$match);


  $quotes['title'] = $match[1];
// html display
  echo '<p><h3>';
  echo $match[1][7];
  echo '</h3></p>';
}
?>
