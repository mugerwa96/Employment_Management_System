@section('content-header')
    Users
@endsection
<div>
    <div class="row justify-content-center align-items-center">
        <div class="container">

            <div class="col-md-10 ">

                <div class="card-body">

                    <div class="row ">
                        <div class="col-md-6">
                            <input type="search" wire:model="search" class="form-control  mb-2"
                                id="inlineFormInput" placeholder="Jane Doe">

                        </div>
                        <div class="spinner-border" wire:loading wire:target="search" role="status">

                        </div>
                        <div class="col-md-6">
                            
                            <button type="button"  wire:click="openUserCreateModel" class="btn btn-primary" >
                                New User
                            </button>
                       
                        </div>
                    </div>


                    <div class="table-all" wire:target="search" wire:loading.remove>


                        <table class="table bg-white shadow rounded">
                            <thead>
                                <tr>
                                    
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Manage</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                       
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <div class="btn-group">

                                              
                                                <button class="btn btn-sm btn-success">Edit</button>
                                              
                                                <button wire:click="deleteUser({{ $user->id }})"
                                                    class="btn btn-sm btn-danger "disabled>Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <th>No Results</th>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="my-2">

                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- bootstrapmodels --}}
    @include('layouts.AdminPanel.inc.model.userCreateModel')
</div>
</div>
