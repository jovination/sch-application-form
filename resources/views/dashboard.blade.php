
<x-app-layout>


    <div class="row page-titles mx-0 border">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Dashboard</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                        <i class="icon-key text-danger"></i>
                        <span class="ml-2 text-danger">Logout </span>
                    </x-responsive-nav-link>
                </form>
            </ol>
        </div>
    </div>

   </x-app-layout>
