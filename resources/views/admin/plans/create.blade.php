
@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.plan.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.plans.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.plan.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.plan.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="price">{{ trans('cruds.plan.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', '') }}" step="1" required>
                @if($errors->has('price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.plan.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.plan.fields.payment_period') }}</label>
                <select class="form-control {{ $errors->has('payment_period') ? 'is-invalid' : '' }}" name="payment_period" id="payment_period" required>
                    <option value disabled {{ old('payment_period', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Plan::PAYMENT_PERIOD_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('payment_period', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('payment_period'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_period') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.plan.fields.payment_period_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="stripeid">{{ trans('cruds.plan.fields.stripeid') }}</label>
                <input class="form-control {{ $errors->has('stripe_plan_id') ? 'is-invalid' : '' }}" type="text" name="stripe_plan_id" id="stripeid" value="{{ old('stripe_plan_id', '') }}">
                @if($errors->has('stripe_plan_id'))
                    <div class="invalid-feedback">
                        {{ $errors->first('stripeplanid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.plan.fields.stripeid_helper') }}</span>
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