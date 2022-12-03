<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('course.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.course.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="course.name">
        <div class="validation-message">
            {{ $errors->first('course.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.course.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('course.course_title') ? 'invalid' : '' }}">
        <label class="form-label required" for="course_title">{{ trans('cruds.course.fields.course_title') }}</label>
        <input class="form-control" type="text" name="course_title" id="course_title" required wire:model.defer="course.course_title">
        <div class="validation-message">
            {{ $errors->first('course.course_title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.course.fields.course_title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('course.course_desc') ? 'invalid' : '' }}">
        <label class="form-label" for="course_desc">{{ trans('cruds.course.fields.course_desc') }}</label>
        <textarea class="form-control" name="course_desc" id="course_desc" wire:model.defer="course.course_desc" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('course.course_desc') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.course.fields.course_desc_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.courses.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>