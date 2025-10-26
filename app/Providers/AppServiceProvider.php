<?php

namespace App\Providers;

use App\Models\App;
use App\Policies\AppPolicy;
use App\Policies\FieldPolicy;
use App\Policies\NodePolicy;
use App\Policies\ResourcePolicy;
use App\Policies\RowPolicy;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Gate;
use App\Policies\RegisteredUserAppPolicy;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(App $app): void
    {

        Gate::define('view', [RegisteredUserAppPolicy::class, 'view']);
        Gate::define('store', [RegisteredUserAppPolicy::class, 'store']);
        Gate::define('editSharing', [RegisteredUserAppPolicy::class, 'editSharing']);
        Gate::define('updateSharing', [RegisteredUserAppPolicy::class, 'updateSharing']);
        Gate::define('updateSharing2', [RegisteredUserAppPolicy::class, 'updateSharing2']);

        Gate::define('appIndex', [AppPolicy::class, 'appIndex']);
        Gate::define('appStore', [AppPolicy::class, 'appStore']);
        Gate::define('appEdit', [AppPolicy::class, 'appEdit']);
        Gate::define('appUpdate', [AppPolicy::class, 'appUpdate']);
        Gate::define('appDelete', [AppPolicy::class, 'appDelete']);

        Gate::define('resourceIndex', [ResourcePolicy::class, 'resourceIndex']);
        Gate::define('resourceStore', [ResourcePolicy::class, 'resourceStore']);
        Gate::define('resourceEdit', [ResourcePolicy::class, 'resourceEdit']);
        Gate::define('resourceUpdate', [ResourcePolicy::class, 'resourceUpdate']);
        Gate::define('resourceDelete', [ResourcePolicy::class, 'resourceDelete']);

        Gate::define('fieldIndex', [FieldPolicy::class, 'fieldIndex']);
        Gate::define('fieldStore', [FieldPolicy::class, 'fieldStore']);
        Gate::define('fieldEdit', [FieldPolicy::class, 'fieldEdit']);
        Gate::define('fieldUpdate1', [FieldPolicy::class, 'fieldUpdate1']);
        Gate::define('fieldUpdateBoolean2', [FieldPolicy::class, 'fieldUpdateBoolean2']);
        Gate::define('fieldUpdateEnum2', [FieldPolicy::class, 'fieldUpdateEnum2']);
        Gate::define('fieldUpdateFloat2', [FieldPolicy::class, 'fieldUpdateFloat2']);
        Gate::define('fieldUpdateInteger2', [FieldPolicy::class, 'fieldUpdateInteger2']);
        Gate::define('fieldUpdateString2', [FieldPolicy::class, 'fieldUpdateString2']);
        Gate::define('fieldDelete', [FieldPolicy::class, 'fieldDelete']);


        Gate::define('nodeIndex', [NodePolicy::class, 'nodeIndex']);
        Gate::define('nodeStore', [NodePolicy::class, 'nodeStore']);
        Gate::define('nodeEdit', [NodePolicy::class, 'nodeEdit']);
        Gate::define('nodeUpdate', [NodePolicy::class, 'nodeUpdate']);
        Gate::define('nodeDelete', [NodePolicy::class, 'nodeDelete']);
        Gate::define('nodeStoreChild', [NodePolicy::class, 'nodeStoreChild']);
        Gate::define('nodeUpdateInputText', [NodePolicy::class, 'nodeUpdateInputText']);
        Gate::define('nodeUpdateNavLink', [NodePolicy::class, 'nodeUpdateNavLink']);
        Gate::define('nodeUpdateHtmlList', [NodePolicy::class, 'nodeUpdateHtmlList']);
        Gate::define('nodeRender', [NodePolicy::class, 'nodeRender']);


        Gate::define('rowStore', [RowPolicy::class, 'rowStore']);
        Gate::define('rowEdit', [RowPolicy::class, 'rowEdit']);
        Gate::define('rowDelete', [RowPolicy::class, 'rowDelete']);

    }
}
