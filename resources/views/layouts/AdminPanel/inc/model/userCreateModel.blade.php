<!-- Modal -->
<div wire:ignore.self class="modal fade" id="userCreateModel" tabindex="-1" aria-labelledby="userCreateModelLabel"
    aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userCreateModelLabel">Add User</h5>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="saveUser">
                    <div>
                        <div class="container">

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">User name</label>
                                <input type="text" wire:model="username"
                                    class="form-control @error('username') is-invalid @enderror">
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">First name</label>
                                <input type="text"
                                    wire:model="firstname"class="form-control @error('firstname') is-invalid @enderror">

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="" class="form-label">Last name</label>
                                <input type="text"
                                    wire:model="lastname"class="form-control @error('lastname') is-invalid @enderror">

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="" class="form-label">Email address</label>
                                <input type="email" wire:model="email" class="form-control @error('email') is-invalid @enderror"
                                    id="" aria-describedby="emailHelp">


                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" wire:click="closeModel" class="btn btn-danger btn-sm"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success btn-sm ">Add User </button>
                    </div>
            </div>
            </form>
        </div>

    </div>
