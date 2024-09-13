<?php
echo"this ismy firsst CLI script in php";
$people = [
    $person1, //   [...$person1]
    [
      'first_name' => 'John',
      'last_name' => 'Doe',
      'email' => 'john@gmail.com',
    ],
    $person2,
    ['first_name' => 'bane',
      'last_name' => 'Doe',
      'email' => 'jane@gmail.com',
    ],
    $person3,
    [
      'first_name' => 'cane',
      'last_name' => 'Doe',
      'email' => 'jane@gmail.com',
    ],
  ];
  var_dump($people);
  for($f=3; $f>=1;$f--){
    echo $people[$f];
  }
for ($x=10; $x>=1;$x--){
    echo "numba:$x <br>";
}