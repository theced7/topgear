#!/bin/bash
get_iplayer > /dev/null #Debug, to make sure no junk ends up in $final 
raw=$(get_iplayer "top gear")
#echo "$raw"
basic=$(echo "$raw" | cut -d: -f3 | cut -d, -f1) # First run, now: Series a - Episode b
#echo "$basic"

#echo "$basic" | cut -d" " -f3,6 | sed '/^$/d' | sed '/^This/d' | sed '/^conditions/d'
final=$(echo "$basic" | cut -d" " -f3,6 | sed '1,6d')
echo "$final" | tr ' ' '\n' > feeds.txt # tr to replace space with newline, to ease parsing in PHP arrays 
