# compare-string-array
This PHP function allows you to compare two strings or a string and an array to see if it is similar.
You can set the percentage of similarity you require and if lesser it will return false; else true.
For example is_similar_text('stringA','stringB', 30); would return true if the similarity is greater than 30%.
It is just a more advance use of the php inbuilt function 'similar_text'.
You can also use it to compare a string and an array, if there is any similar string in the array it will return true;
In future versions i will add ability to compare unlimited arrays and strings.
