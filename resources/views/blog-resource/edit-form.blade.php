<form class="form form-border mt-25"
      role="form"
      method="POST"
      action="{{ url('/blogresource/'. $blogresource->id) }}">

{{ method_field('PATCH') }}
{{ csrf_field() }}

<!-- title input -->

    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">

        <label class="control-label">Resource Title</label>

        <input type="text"
               class="form-control"
               name="title"
               value="{{ $blogresource->title }}" />

        @if ($errors->has('title'))

            <span class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
            </span>

        @endif

    </div>  <!-- end title input -->


    <!-- url input -->

    <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">

        <label class="control-label">Url</label>

        <input type="text"
               class="form-control"
               name="url"
               value="{{ $blogresource->url }}" />

        @if ($errors->has('url'))

            <span class="help-block">
                <strong>{{ $errors->first('url') }}</strong>
            </span>

        @endif

    </div>  <!-- url author input -->

    <!-- resource type select -->

    <div class="form-group{{ $errors->has('resource_type_id') ? ' has-error' : '' }}">

        <label class="control-label">Type</label>

        <select class="form-control" id="resource_type_id" name="resource_type_id">

            <option value="{{ $resourceTypeId }}">{{ $resourceTypeName }}</option>

            @foreach($resourceTypes as $type)

                <option value={{ $type->id }}>{{ $type->name }}</option>

            @endforeach

        </select>

        @if ($errors->has('resource_type_id'))

            <span class="help-block">

                <strong>{{ $errors->first('resource_type_id') }}</strong>

            </span>

        @endif

    </div> <!-- end resource type select -->


    <!-- is_featured select -->

    <div class="form-group{{ $errors->has('is_featured') ? ' has-error' : '' }}">

        <label class="control-label">Is Featured?</label>

        <select class="form-control" id="is_featured" name="is_featured">

            <option value="{{ $blogresource->is_featured }}">{{ $blogresource->is_featured == 1 ? 'Yes' : 'No' }}</option>
            <option value="0">No</option>
            <option value="1">Yes</option>

        </select>

        @if ($errors->has('is_featured'))

            <span class="help-block">

                <strong>{{ $errors->first('is_featured') }}</strong>

            </span>

        @endif

    </div>  <!-- end is featured select -->


    <!-- submit button -->

    <div class="form-group">

        <button type="submit"
                class="btn btn-primary btn-lg">

            Update

        </button>

    </div>

    <!-- end submit button -->

</form>

