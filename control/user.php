<?php
    include('sql.php');
    include('load_module.php');

    $book = new Book($db);

    var_dump($book->paid_money(3,100));
    /*var_dump($book->addBookList('聽風的書單11','測試用的書單',15,'2014/10/10',array(
        array(
            'name'=>'Applied Cal1',
            'author'=>'berkey',
            'isbn'=>'1234567890',
            'price'=>'399',
            'publisher'=>'bb',
            
        ),array(
            'name'=>'Applied Cal2',
            'author'=>'berkey',
            'isbn'=>'1234567890',
            'price'=>'399',
            'publisher'=>'bb',
            
        ),array(
            'name'=>'Applied Cal3',
            'author'=>'berkey',
            'isbn'=>'1234567890',
            'price'=>'399',
            'publisher'=>'bb',
            
        )
    )));*/

?>