<?php

namespace Scrapers;

interface ScraperInterface
{
    /**
     * Returns whether or not the scraper found available tickets.
     *
     * @return bool
     */
    public function hasTickets(): bool;

    /**
     * Returns the list of available tickets with the quantity and the buy link.
     *
     * @return array
     */
    public function getTicketsLinks(): array;
}