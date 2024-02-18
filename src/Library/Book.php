<?php

declare(strict_types=1);

namespace SoapApi\Library;

class Book
{
    /**
     * Title of the book
     *
     * @var string $title
     */
    public string $title;

    /**
     * Description of the book
     *
     * @var string $description
     */
    public string $description;

    /**
     * Author of the book
     * 
     * @var string $author
     */
    public string $author;
    
    /**
     * Creates a new book.
     *
     * @param  mixed $title
     * @param  mixed $description
     * @param  mixed $author
     * @return void
     */
    public function __construct(string $title, string $description, string $author)
    {
        $this->title = $title;
        $this->description = $description;
        $this->author = $author;
    }
}
