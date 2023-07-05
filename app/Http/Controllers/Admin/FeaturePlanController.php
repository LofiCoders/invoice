<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyFeaturePlanRequest;
use App\Http\Requests\StoreFeaturePlanRequest;
use App\Http\Requests\UpdateFeaturePlanRequest;
use App\Models\Feature;
use App\Models\FeaturePlan;
use App\Models\Plan;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class FeaturePlanController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('feature_plan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $featurePlans = FeaturePlan::with(['plan', 'feature'])->get();

        return view('admin.featurePlans.index', compact('featurePlans'));
    }

    public function create()
    {
        abort_if(Gate::denies('feature_plan_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $plans = Plan::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $features = Feature::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.featurePlans.create', compact('features', 'plans'));
    }

    public function store(StoreFeaturePlanRequest $request)
    {
        $featurePlan = FeaturePlan::create($request->all());

        return redirect()->route('admin.feature-plans.index');
    }

    public function edit(FeaturePlan $featurePlan)
    {
        abort_if(Gate::denies('feature_plan_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $plans = Plan::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $features = Feature::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $featurePlan->load('plan', 'feature');

        return view('admin.featurePlans.edit', compact('featurePlan', 'features', 'plans'));
    }

    public function update(UpdateFeaturePlanRequest $request, FeaturePlan $featurePlan)
    {
        $featurePlan->update($request->all());

        return redirect()->route('admin.feature-plans.index');
    }

    public function destroy(FeaturePlan $featurePlan)
    {
        abort_if(Gate::denies('feature_plan_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $featurePlan->delete();

        return back();
    }

    public function massDestroy(MassDestroyFeaturePlanRequest $request)
    {
        $featurePlans = FeaturePlan::find(request('ids'));

        foreach ($featurePlans as $featurePlan) {
            $featurePlan->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
