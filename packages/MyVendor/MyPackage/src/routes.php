<?php
/**
 * Created by PhpStorm.
 * User: pathao
 * Date: 8/1/18
 * Time: 12:56 PM
 */

Route::get('my-package', function(){
    echo 'Hello from the my package!';
});
Route::get('echo/{a}', 'MyVendor\MyPackage\SkeletonClass@echoPhrase');