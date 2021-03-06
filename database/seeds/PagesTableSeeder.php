<?php

use Illuminate\Database\Seeder;
use App\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {

        //Home
        $page = Page::firstOrNew([
            'slug' => 'home',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 0,
                'title'     => 'Startup Engine',
                'slug'     => 'home',
                'excerpt'   => 'Startup Engine is an API-based CMS for startups.',
                'body'      => null,
                'image'            => null,
                'meta_description' => 'Startup Engine is an API-based CMS for startups.',
                'meta_keywords'    => 'startup, cms, api, laravel',
                'status'           => 'ACTIVE',
            ])->save();
        }

        //Articles
        $page = Page::firstOrNew([
            'slug' => 'articles',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 0,
                'title'     => 'The Launchpad',
                'slug'     => 'articles',
                'excerpt'   => 'A blog about starting up and taking off.',
                'body'      => null,
                'image'            => null,
                'meta_description' => 'A blog about starting up and taking off.',
                'meta_keywords'    => 'startup, cms, api, content marketing, lean, metrics, analytics',
                'status'           => 'ACTIVE',
            ])->save();
        }

        //Search
        $page = Page::firstOrNew([
            'slug' => 'search',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 0,
                'title'     => 'Search',
                'slug'     => 'search',
                'excerpt'   => 'Startup Engine is an API-based CMS for startups.',
                'body'      => null,
                'image'            => null,
                'meta_description' => 'Startup Engine is an API-based CMS for startups.',
                'meta_keywords'    => 'startup, cms, api, laravel',
                'status'           => 'ACTIVE',
            ])->save();
        }

        //Search
        $page = Page::firstOrNew([
            'slug' => 'help',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 0,
                'title'     => 'Help & Documentation',
                'slug'     => 'help',
                'excerpt'   => 'Get answers to FAQs about Startup Engine.',
                'body'      => null,
                'image'            => null,
                'meta_description' => 'Get answers to FAQs about Startup Engine.',
                'meta_keywords'    => 'startup engine, help, documentation, install',
                'status'           => 'ACTIVE',
            ])->save();
        }

        //Browse
        $page = Page::firstOrNew([
            'slug' => 'browse',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 0,
                'title'     => 'Browse by category',
                'slug'     => 'browse',
                'excerpt'   => 'Browse content by category.',
                'body'      => null,
                'image'            => null,
                'meta_description' => 'Browse content by category.',
                'meta_keywords'    => 'startup engine, help, documentation, blog, articles',
                'status'           => 'ACTIVE',
            ])->save();
        }

        //Products
        $page = Page::firstOrNew([
            'slug' => 'products',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 0,
                'title'     => 'Products',
                'slug'     => 'products',
                'excerpt'   => 'Tools for the modern startup.',
                'body'      => null,
                'image'            => null,
                'meta_description' => 'Tools for the modern startup.',
                'meta_keywords'    => 'startup engine CMS, psychoanalytics, startup tools, open-source, software',
                'status'           => 'ACTIVE',
            ])->save();
        }

        //Products
        $page = Page::firstOrNew([
            'slug' => 'getting-started',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 0,
                'title'     => 'Getting Started with Startup Engine CMS',
                'slug'     => 'getting-started',
                'excerpt'   => 'Tools for the modern startup.',
                'body'      => null,
                'image'            => null,
                'meta_description' => 'You can be up and running in under 5 minutes.',
                'meta_keywords'    => 'startup engine CMS, install, quick start, beginner\'s guide',
                'status'           => 'ACTIVE',
            ])->save();
        }

    }
}
