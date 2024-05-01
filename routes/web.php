<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $markdown = <<<'MARKDOWN'
    # This is a title

    This is regular text with **bold font**

    - This
    - Is
    - A List

    Here is a [link](https://youtube.com/@Tuto1902)

    And finally, some code

    ```php
    public function foo($bar) {
        $foo = $bar;

        echo $foo;
    }
    ```
    MARKDOWN;

    return view('markdown', ['markdown' => $markdown]);
});
