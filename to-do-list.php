<?php

//$name =readline("Enter your name\n");
//echo"your name is $name";

function showAllTask($inputTask){
    foreach($inputTask as $task){
        echo $task . "\n";
    }
}

do {
    echo "task manager\n";
    echo "input new task => 1\n";
    $choice = readline("Izvelies darbibu: ");
    switch($choice){
        case '1':
            echo 'WIP';
            break;
        case '2':
            echo showAllTask($taskList);
            break;
        case '3':
            echo 'WIP';
            break;
        default:
        echo "WIP\n";                
    }

    $continue= readline("do you want to continue");
} while ($continue!="N");