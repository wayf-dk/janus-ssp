# Introduction #

JANUS offers the possibility to define your own custom validation functions for your metadata fields. Just write your function and add the function name to the config file.


# Details #

You can define your function in the `Metadata.php` file in the `<PATH TO JANUS>/lib/Validation` directory. An example of a function can be seen here:
```
'leneq40' => array(
    'code' => '
        if(strlen($value) == 40) return true; 
        else return false;
    ',
),
```
The above function checks that the entered value is no longer that 40 characters.

Your function should always return `true` or `false`. The value of the metadata field is always accessible in the `$value` variable.