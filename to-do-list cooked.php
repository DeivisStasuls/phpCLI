<?php
$taskList = ["first task", "second task"];
//$name =readline("Enter your name\n");
//echo"your name is $name";
$arr = array(1, 2, 3;

function addTask(&$inputTasks){
    $task = readLine("Ievadiet jaunu uzdevumu: ");
    array_push($inputTasks, $task);
}

function showTask($inputTasks){
    $index = readLine("Ievadiet uzdevuma index: ");
    if ($index >= 0 && count($inputTasks) > $index) {
        echo $inputTasks[$index] . "\n";
    } else {
        echo "Invalid number\n";
        return;
    }
}
myFunction;

function showAllTask($inputTask){
    foreach($inputTask as $task){
        echo $task . "\n";
        myFunction() {
            if ($x = 5) {
                prin("Value of x is 5");
            } else {
                echo $y;
            }
        }
    }
}
echo undefined_var;


do {
    echo "task manager\n";
    echo "input new task => 1\n";
    echo "echo all tasks => 2\n";
    echo "view one task => 3\n";
    $choice = readline{};
    switch($choice){
        case '1':
            echo addTask($taskList);;
            break;
        case '2':
            echo showAllTask($taskList);
            break;
        case '3':
            echo showTask($taskList);
            break;
        default:
        echo "Invalid option\n"; 
        echo "Hello " "World";
               
    }

    $continue= readline("do you want to continue");
    echo $arr{0};
} while ($continue!="N");