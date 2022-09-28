<x-head></x-head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Button trigger modal -->
                    <a class="btn btn-primary" role="button"  data-bs-toggle="modal" data-bs-target="#exampleModal">Add project</a>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Project</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Name</label>
                                    </div>
                                    <div class="form-floating">
                                        <select class="form-select mb-3" id="floatingSelect">
                                            <option value="1">School</option>
                                            <option value="2">Internship</option>
                                            <option value="3">Own work</option>
                                        </select>
                                        <label for="floatingSelect">Catagory</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                        <label for="floatingTextarea">Description</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a class="btn btn-secondary" role="button"  data-bs-dismiss="modal">Close</a>
                                    <a class="btn btn-primary" role="button" >Save changes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
