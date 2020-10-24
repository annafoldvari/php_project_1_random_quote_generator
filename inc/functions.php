<?php

$quotes = array(
  array('quote' => 'Just keep in mind: the more we value things outside our control, the less control we have.',
        'source' => 'Epictetus',
        'tags' => array('philosophy', 'stoicism')   
  ),
  array('quote' => 'The whole future lies in uncertainty: live immediately.',
        'source' => 'Seneca',
        'tags' => array('philosophy', 'stoicism')     
  ),
  array('quote' => 'When someone is properly grounded in life, they shouldn’t have to look outside themselves for approval.',
        'source' => 'Epictetus',
        'tags' => array('philosophy', 'stoicism')     
  ),
  array('quote' => 'It’s silly to try to escape other people’s faults. They are inescapable. Just try to escape your own.',
        'source' => 'Marcus Aurelius',
        'citation' => 'Mediatations',
        'tags' => array('philosophy', 'stoicism'),  
        'year' => 'Between 170 - 180 AD'   
  ),
  array('quote' => 'Self-knowledge is no guarantee of happiness, but it is on the side of happiness and can supply the courage to fight for it.',
        'source' => 'Simone de Beauvoir',
        'citation' => 'Force of Circumstances Vol. III',
        'tags' => array('philosophy', 'feminism'), 
        'year' => '1963'   
  )  
);

$classes = array('aquamarine', 'blueviolet', 'crimson', 'darkcyan', 'darkorange'); 

//Selects random quote array

function getRandomQuote($array) {
  $random_index = rand(0,4);
  return $array[$random_index];
}

// Prints out the selected quote array details

function printQuote($array) {
  $quote_array = getRandomQuote($array);
  $output = '';
  $output .= 
  '<p class="quote">' . $quote_array['quote'] . '</p>
   <p class="source">' . $quote_array['source']; 
  $quote_array['citation'] ? $output .= '<span class="citation">' . $quote_array['citation'] . '</span>' : $output .= '';
  $quote_array['year'] ? $output .='<span class="year">' . $quote_array['year'] . '</span>' : $output .='';
  $output .= '</p>';

   if ($quote_array['tags']) {
     $output .= '<p>Tags: ';
     foreach($quote_array['tags'] as $index => $tag) {
        if ( $index != (count($quote_array['tags']) - 1) ) {
          $output .= $tag . ", ";
        }
        else {
          $output .= $tag;
        }
     }
     $output .= '</p>';
   } 
   echo $output;
}

// This selects a random class for the changing background color.

function getClass($array) {
  $random_index = rand(0,4);
  return $array[$random_index];
}