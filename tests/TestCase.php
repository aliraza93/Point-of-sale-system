<?php

namespace Tests;

use App\Models\Access\Role\Role;
use App\Models\Access\User\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * @var
     */
    protected $admin;

    /**
     * @var
     */
    protected $executive;

    /**
     * @var
     */
    protected $user;

    /**
     * @var
     */
    protected $adminRole;

    /**
     * @var
     */
    protected $executiveRole;

    /**
     * @var
     */
    protected $userRole;

    public function signIn($user = null)
    {
        $user = $user ?: create('App\User');

        $this->be($user);

        return $this;
    }

    /**
     * Set up tests.
     */


    public function setUp(): void
    {
        parent::setUp();

    }

    public function tearDown(): void
    {
        $this->beforeApplicationDestroyed(function () {
            DB::disconnect();
        });

        parent::tearDown();
    }
}
