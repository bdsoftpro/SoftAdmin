<?php

namespace SBD\Softadmin\Tests;

class RouteTest extends TestCase
{
    protected $withDummy = true;

    public function setUp()
    {
        parent::setUp();

        $this->install();
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testGetRoutes()
    {
        $this->visit(route('softadmin.login'));
        $this->type('admin@admin.com', 'email');
        $this->type('password', 'password');
        $this->press('Login Logging in');

        $urls = [
            route('softadmin.dashboard'),
            route('softadmin.media.index'),
            route('softadmin.settings.index'),
            route('softadmin.roles.index'),
            route('softadmin.roles.create'),
            route('softadmin.roles.show', ['role' => 1]),
            route('softadmin.roles.edit', ['role' => 1]),
            route('softadmin.users.index'),
            route('softadmin.users.create'),
            route('softadmin.users.show', ['user' => 1]),
            route('softadmin.users.edit', ['user' => 1]),
            route('softadmin.posts.index'),
            route('softadmin.posts.create'),
            route('softadmin.posts.show', ['post' => 1]),
            route('softadmin.posts.edit', ['post' => 1]),
            route('softadmin.pages.index'),
            route('softadmin.pages.create'),
            route('softadmin.pages.show', ['page' => 1]),
            route('softadmin.pages.edit', ['page' => 1]),
            route('softadmin.categories.index'),
            route('softadmin.categories.create'),
            route('softadmin.categories.show', ['category' => 1]),
            route('softadmin.categories.edit', ['category' => 1]),
            route('softadmin.menus.index'),
            route('softadmin.menus.create'),
            route('softadmin.menus.show', ['menu' => 1]),
            route('softadmin.menus.edit', ['menu' => 1]),
            route('softadmin.database.index'),
            //route('softadmin.database.edit_bread', ['id' => 5]),
            //route('softadmin.database.edit', ['table' => 'categories']),
            route('softadmin.database.create'),
        ];

        foreach ($urls as $url) {
            $response = $this->call('GET', $url);
            $this->assertEquals(200, $response->status(), $url.' did not return a 200');
        }
    }
}
