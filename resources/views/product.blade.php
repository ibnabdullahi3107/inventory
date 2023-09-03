<x-app-layout>
    <div class="content-body">
        <div class="col-lg-12 p-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Product</h4>
                    <div class="basic-form">
                        <form action="#">
                            <div class="input-group mb-3">
                                {{-- <div class="input-group-prepend"><span class="input-group-text">@</span>
                                </div> --}}
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="input-group mb-3">
                                <input type="decimal" name="price" class="form-control" placeholder="Price">
                                {{-- <div class="input-group-append"><span class="input-group-text">@example.com</span>
                                </div> --}}
                            </div>
                            <div class="input-group mb-3">
                                {{-- <div class="input-group-prepend"><span class="input-group-text">Quantity</span>
                                </div> --}}
                                <input type="number" name="quantity" class="form-control" placeholder="Quantity">
                            </div>
                            <div class="input-group mb-3">
                                <select name="category" id="" class="form-control">
                                    <option value="">-- Select Category --</option>
                                    <option value="1">option 1</option>
                                    <option value="2">option 1</option>

                                    <option value="3">option 1</option>

                                </select>

                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">Description</span>
                                </div>
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>
</x-app-layout>
