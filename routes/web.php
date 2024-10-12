<?php

use Illuminate\Support\Facades\Route;

Route::get( '/', function () {
    return view( 'welcome' );
} );

Route::get( 'send/email', function () {

    $send_mail = 'minhazul234@gmail.com';

    for ( $i = 0; $i <= 10; $i++ ) {
        dispatch( new App\Jobs\SendEmailQueueJob( $send_mail ) );
    }
    dd( 'send mail successfully !!' );
} );