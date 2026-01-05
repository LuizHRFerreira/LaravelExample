<div class="row">

    <div class="form-group col-md-6">
        <label>{{ trans('attributes.name') }}<span class="text-danger">*</span>:</label>
        @if(isset($user))
            <input type="text" class="form-control" value="{{ $user->name }}" name="name" id="name" required>
        @else
            <input type="text" class="form-control" name="name" id="name" required>
        @endif
    </div>

    <div class="form-group col-md-6">
        <label>{{ trans('attributes.email') }}:</label>
        @if(isset($user))
            <input type="email" class="form-control" value="{{ $user->email }}" name="email" id="email">
        @else
            <input type="email" class="form-control" name="email" id="email">
        @endif
    </div>

    <div class="form-group col-md-6">
        <label>{{ trans('attributes.password') }}:</label>
        <input type="password" class="form-control" name="password" id="password">
    </div>

    {{-- Foto Field --}}
    <div class="form-group col-md-12">
        <label for="description">{{ trans('attributes.photo') }}:</label>
        @if (isset($user))
            <!-- Div needed to restrict link to img -->
            <div style="width:10%">
                <a href="{!! $user->photo !!}" target="_blank">
                    @if($user->photo)
                    <img class="logo-edit" src="{{ Storage::url($user->photo)  }}"/>
                    @else
                    <img class="logo-edit" src="{{ asset('dist/images/sidebar/user_placeholder.jpg') }}"/>
                    @endif
                </a>
            </div>
            <!-- Delete img -->
            <div class="form-group col-md-12 no-padding" style="margin-bottom:10px">
                <div class="icheck">
                    <label>
                        <input type="checkbox" name="delete" id="">
                        <span>{{ trans('text.delete') }}</span>
                    </label>
                </div>
            </div>
        @else
            <img src=""/>
        @endif
        <input type="file" name="photo" id="">
        <p class="text-warning">{{ trans('message.use_images_in_size_690_x_690') }}</p>
    </div> 
     
</div>
