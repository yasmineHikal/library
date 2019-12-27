<?php

namespace Tests\Feature;

use App\Book;
use Tests\TestCase;

class BookReservationTest extends TestCase
{

    /** @test */
    public function a_book_can_be_added_to_library ()
    {

        $this->withoutExceptionHandling();
        $response = $this->post('/books',[
            'title' => 'nice book',
            'author' => 'yasmin',
        ]);

        $response->assertOk();
        $this->assertCount(1, Book::all());

    }
}
