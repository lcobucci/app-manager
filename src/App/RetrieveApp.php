<?php
declare(strict_types=1);

namespace Lcobucci\Sample\App;

use Lcobucci\Sample\App\Message\RetrieveApp as RetrieveAppQuery;

final class RetrieveApp
{
    /**
     * @var Repository
     */
    private $apps;

    public function __construct(Repository $apps)
    {
        $this->apps = $apps;
    }

    public function handle(RetrieveAppQuery $query): App
    {
        return $this->apps->get($query->id);
    }
}
