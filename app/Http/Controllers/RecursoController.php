<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRecursoRequest;
use App\Http\Requests\UpdateRecursoRequest;
use App\Repositories\RecursoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RecursoController extends AppBaseController
{
    /** @var  RecursoRepository */
    private $recursoRepository;

    public function __construct(RecursoRepository $recursoRepo)
    {
        $this->recursoRepository = $recursoRepo;
    }

    /**
     * Display a listing of the Recurso.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->recursoRepository->pushCriteria(new RequestCriteria($request));
        if(Auth::user()->role == 2)
            $recursos = $this->recursoRepository->findWhere(['organizacion_id'=>Auth::user()->organizacion_id]);
        else
            $recursos = $this->recursoRepository->all();

        return view('recursos.index')
            ->with('recursos', $recursos);
    }

    /**
     * Show the form for creating a new Recurso.
     *
     * @return Response
     */
    public function create()
    {
        return view('recursos.create');
    }

    /**
     * Store a newly created Recurso in storage.
     *
     * @param CreateRecursoRequest $request
     *
     * @return Response
     */
    public function store(CreateRecursoRequest $request)
    {
        $input = $request->all();

        $recurso = $this->recursoRepository->create($input);

        Flash::success('Recurso saved successfully.');

        return redirect(route('recursos.index'));
    }

    /**
     * Display the specified Recurso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $recurso = $this->recursoRepository->findWithoutFail($id);

        if (empty($recurso)) {
            Flash::error('Recurso not found');

            return redirect(route('recursos.index'));
        }

        return view('recursos.show')->with('recurso', $recurso);
    }

    /**
     * Show the form for editing the specified Recurso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $recurso = $this->recursoRepository->findWithoutFail($id);

        if (empty($recurso)) {
            Flash::error('Recurso not found');

            return redirect(route('recursos.index'));
        }

        return view('recursos.edit')->with('recurso', $recurso);
    }

    /**
     * Update the specified Recurso in storage.
     *
     * @param  int              $id
     * @param UpdateRecursoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRecursoRequest $request)
    {
        $recurso = $this->recursoRepository->findWithoutFail($id);

        if (empty($recurso)) {
            Flash::error('Recurso not found');

            return redirect(route('recursos.index'));
        }

        $recurso = $this->recursoRepository->update($request->all(), $id);

        Flash::success('Recurso updated successfully.');

        return redirect(route('recursos.index'));
    }

    /**
     * Remove the specified Recurso from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $recurso = $this->recursoRepository->findWithoutFail($id);

        if (empty($recurso)) {
            Flash::error('Recurso not found');

            return redirect(route('recursos.index'));
        }

        $this->recursoRepository->delete($id);

        Flash::success('Recurso deleted successfully.');

        return redirect(route('recursos.index'));
    }
}
