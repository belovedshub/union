<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.union-poll', function ($trail) {
    $trail->push(__('strings.backend.poll.poll'), route('admin.union-poll'));
});

Breadcrumbs::for('admin.create-poll', function ($trail) {
    $trail->push(__('strings.backend.poll.create-poll'), route('admin.create-poll'));
});

Breadcrumbs::for('admin.union-full', function ($trail) {
    $trail->push(__('strings.backend.union.union'), route('admin.union-full'));
});

Breadcrumbs::for('admin.create-union', function ($trail) {
    $trail->push(__('strings.backend.union.create-union'), route('admin.create-union'));
});

// Breadcrumbs::for('admin.edit-union', function ($trail) {
//     $trail->push(__('strings.backend.union.edit-union'), route('admin.edit-union'));
// });

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
