<form action="{{ route('customers.store') }}" class="forms-sample" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleInputName1">Name</label>
        <input type="text" name="name" value="{{ isset($customer) ? $customer->name : '' }}" class="form-control" id="exampleInputName1" placeholder="Name">
        @if (isset($customer))
        <input type="hidden" name="customer_id" value="{{ $customer->id }}">
        @endif
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail3">Email address</label>
                <input type="email" name="email" value="{{ isset($customer) ? $customer->email : '' }}" class="form-control" id="exampleInputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail3">Phone</label>
                <input type="tel" name="phone" value="{{ isset($customer) ? $customer->phone : '' }}" class="form-control" id="exampleInputEmail3" placeholder="Phone">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword4">Company</label>
        <input type="text" name="company" value="{{ isset($customer) ? $customer->company : '' }}" class="form-control" id="exampleInputPassword4" placeholder="Company">
    </div>

    <div class="form-group">
        <label for="exampleTextarea1">Address</label>
        <textarea class="form-control" name="address" id="exampleTextarea1" rows="4">{{ isset($customer) ? $customer->address : '' }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary mr-2">Submit</button>
    <button class="btn btn-light">Cancel</button>
</form>
