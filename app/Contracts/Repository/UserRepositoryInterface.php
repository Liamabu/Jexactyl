<?php

namespace Pterodactyl\Contracts\Repository;

use Illuminate\Support\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Pterodactyl\Contracts\Repository\Attributes\SearchableInterface;

interface UserRepositoryInterface extends RepositoryInterface
{
    /**
     * Return all matching models for a user in a format that can be used for dropdowns.
     *
     * @param string|null $query
     * @return \Illuminate\Support\Collection
     */
    public function filterUsersByQuery(?string $query): Collection;

    /**
     * Returns a user with the given id in a format that can be used for dropdowns.
     *
     * @param int $id
     * @return \Pterodactyl\Models\Model
     */
    public function filterById(int $id): \Pterodactyl\Models\Model;
}
