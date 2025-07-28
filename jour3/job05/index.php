<?php
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
$dir = array("consonnes" => 0, "voyelles" => 0);
$vowels = array('a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y');

for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];
    if (ctype_alpha($char)) {if (in_array($char, $vowels)) {$dir["voyelles"]++;} 
    else {$dir["consonnes"]++;}
    }
}
?>

<table border="1">
    <thead>
        <tr>
    <th>Les consonnes</th>
    <th>Les voyelles</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $dir["consonnes"]; ?></td>
            <td><?php echo $dir["voyelles"]; ?></td>
        </tr>
    </tbody>
</table>
