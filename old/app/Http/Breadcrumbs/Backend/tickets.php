<?php

Breadcrumbs::register('admin.tickets.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('tickets', route('admin.tickets.index'));
});

Breadcrumbs::register('admin.tickets.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('tickets', route('admin.tickets.create'));
});

Breadcrumbs::register('admin.tickets.show', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(session()->get('title_tickets'), route('admin.tickets.show',\Route::current()->getParameter('tickets')));
});

Breadcrumbs::register('admin.tickets.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(session()->get('title_tickets'), route('admin.tickets.edit',\Route::current()->getParameter('tickets')));
});
