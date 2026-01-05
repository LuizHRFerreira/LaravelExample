
<div class="row form-divider">
    <div class="form-group col-md-6">
        <label>{{ trans('attributes.name') }}:</label>
        @if(isset($product))
            <input type="text" class="form-control" value="{{ $product->name }}" name="name" id="name">
        @else
            <input type="text" class="form-control" name="name" id="name">
        @endif
    </div>

    <div class="form-group col-md-6">
        <label>{{ trans('attributes.value') }}:</label>
        @if(isset($product))
            <input type="text" class="form-control" value="{{ $product->name }}" name="value" id="value">
        @else
            <input type="text" class="form-control" name="value" id="name">
        @endif
    </div>

    <div class="form-group col-md-12">
        <label>{{ trans('attributes.user') }}:</label>
        <select name="user_id" class="form-control" id="product_id">
            @foreach($users as $user)
            <option value="{{ $user['id']  }}">{{ $user['name']  }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-md-12">
        <label>{{ trans('attributes.description') }}:</label>
        @if(isset($product))
            <textarea type="text" class="form-control" value="{{ $product->name }}" name="description" id="description"></textarea>
        @else
            <textarea type="text" class="form-control" name="description" id="name"></textarea>
        @endif
    </div>

</div>