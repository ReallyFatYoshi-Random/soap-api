<?php

declare(strict_types=1);

namespace SoapApi\Library;

class BookCase
{
    /**
     * Catelog of books.
     *
     * @var array<\SoapApi\Library\Book> $books
     */
    public array $books = [];

    public function __construct(int $amountOfBooks = 10)
    {
        for ($i=0; $i < max($amountOfBooks, 5); $i++) { 
            array_push(
                $this->books, new Book(
                    fake()->unique()->word(), 
                    fake()->unique()->sentence(50), 
                    fake()->unique()->name()
                )
            );
        }
    }
    
        /**
     * @soap
     * Picks a random book description out.
     *
     * @return string
     */
    public function pickRandomDescription(): string
    {
        return $this->pickBook()->description;
    }

    /**
     * @soap
     * Picks a random book title out.
     *
     * @return string
     */
    public function pickRandomTitle(): string
    {
        return $this->pickBook()->title;
    }

    /**
     * @soap
     * Picks a random author out.
     *
     * @return string
     */
    public function pickRandomAuthor(): string
    {
        return $this->pickBook()->author;
    }

    /**
     * @soap
     * Picks a random books out.
     *
     * @param int $amount
     *
     * @return object[]
     */
    public function pickRandomBooks(int $amount): array
    {
        $list = [];

        for ($i = 0; $i < $amount; $i++) {
            array_push($list, json_encode($this->pickBook()));
        }

        return $list;
    }
    
    /**
     * Picks a random book out.
     *
     * @return Book
     */
    protected function pickBook(): Book
    {
        return $this->books[array_rand($this->books)];
    }
}
