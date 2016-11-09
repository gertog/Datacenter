#!/bin/bash
result=`curl -sL -w "%{http_code}\\n" "http://www.google.com" -o /dev/null`;
test="200";
if [[ $result ==  $test ]]
then
   echo "Conencted";
else
   echo "Not conencted";
fi

