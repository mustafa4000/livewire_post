<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h2 class="font-weight-bold">Product List</h2>
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <img <img src="{{ asset('storage/images/'.$product->image ) }}" alt="product image" class="img-fluid">
                                </div>
                                <div class="card-footer">
                                    <h6 class="text-center font-weight-bold">{{ $product->name }}</h6>
                                    <button wire:click="addItem{{ $product->id }}" class="btn btn-primary btn-sm btn-block">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h2 class="font-weight-bold">Cart</h2>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @forelse ($carts as $index=>$cart)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $cart['name'] }} || {{ $cart['qty'] }}</td>
                                <td>{{ $cart['price'] }}</td>
                            </tr>
                        @empty
                            <td colspan="3"> <h6 class="text-center">Empty Cart</h6> </td>
                        @endforelse
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
