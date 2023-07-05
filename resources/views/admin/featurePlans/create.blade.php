@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.featurePlan.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.feature-plans.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="plan_id">{{ trans('cruds.featurePlan.fields.plan') }}</label>
                <select class="form-control select2 {{ $errors->has('plan') ? 'is-invalid' : '' }}" name="plan_id" id="plan_id" required>
                    @foreach($plans as $id => $entry)
                        <option value="{{ $id }}" {{ old('plan_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('plan'))
                    <div class="invalid-feedback">
                        {{ $errors->first('plan') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.featurePlan.fields.plan_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="feature_id">{{ trans('cruds.featurePlan.fields.feature') }}</label>
                <select class="form-control select2 {{ $errors->has('feature') ? 'is-invalid' : '' }}" name="feature_id" id="feature_id" required>
                    @foreach($features as $id => $entry)
                        <option value="{{ $id }}" {{ old('feature_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('feature'))
                    <div class="invalid-feedback">
                        {{ $errors->first('feature') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.featurePlan.fields.feature_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="quota">{{ trans('cruds.featurePlan.fields.quota') }}</label>
                <input class="form-control {{ $errors->has('quota') ? 'is-invalid' : '' }}" type="number" name="quota" id="quota" value="{{ old('quota', '') }}" step="1" required>
                @if($errors->has('quota'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quota') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.featurePlan.fields.quota_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection