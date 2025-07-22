<?php

$booleanVar = true;
$integerVar = 42;
$stringVar = "Hello";
$floatVar = 3.14;
//table
echo "<table border='1'>
        <thead>
            <tr>
                <th>Type</th>
                <th>Name</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Boolean</td>
                <td>booleanVar</td>
                <td>" . ($booleanVar ? 'true' : 'false') . "</td>
            </tr>
            <tr>
                <td>Integer</td>
                <td>integerVar</td>
                <td>$integerVar</td>
            </tr>
            <tr>
                <td>String</td>
                <td>stringVar</td>
                <td>$stringVar</td>
            </tr>
            <tr>
                <td>Float</td>
                <td>floatVar</td>
                <td>$floatVar</td>
            </tr>
        </tbody>
      </table>";