<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProcesoRecursoRequest;
use App\Http\Requests\UpdateProcesoRecursoRequest;
use App\Models\Procesos;
use App\Models\Recurso;
use App\Repositories\ProcesoRecursoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ProcesoRecursoController extends AppBaseController
{
    /** @var  ProcesoRecursoRepository */
    private $procesoRecursoRepository;

    public function __construct(ProcesoRecursoRepository $procesoRecursoRepo)
    {
        $this->procesoRecursoRepository = $procesoRecursoRepo;
    }

    /**
     * Display a listing of the ProcesoRecurso.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->procesoRecursoRepository->pushCriteria(new RequestCriteria($request));
        $procesoRecursos = $this->procesoRecursoRepository->all();

        return view('proceso_recursos.index')
            ->with('procesoRecursos', $procesoRecursos);
    }

    /**
     * Show the form for creating a new ProcesoRecurso.
     *
     * @return Response
     */
    public function create()
    {
        return view('proceso_recursos.create');
    }
    public function getCreate($procesoId)
    {
        $proceso = Procesos::find($procesoId);
        $recursos = Recurso::where('organizacion_id',$proceso->organizacion_id)->pluck('recurso','id');
        return view('proceso_recursos.create',compact('proceso','recursos'));
    }


    /**
     * Store a newly created ProcesoRecurso in storage.
     *
     * @param CreateProcesoRecursoRequest $request
     *
     * @return Response
     */
    public function store(CreateProcesoRecursoRequest $request)
    {
        $input = $request->all();

        $procesoRecurso = $this->procesoRecursoRepository->create($input);

        Flash::success('Proceso Recurso saved successfully.');

        return redirect(route('procesos.show',$procesoRecurso->proceso_id));
    }

    /**
     * Display the specified ProcesoRecurso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $procesoRecurso = $this->procesoRecursoRepository->findWithoutFail($id);

        if (empty($procesoRecurso)) {
            Flash::error('Proceso Recurso not found');

            return redirect(route('procesos.index'));
        }

        return view('proceso_recursos.show')->with('procesoRecurso', $procesoRecurso);
    }

    /**
     * Show the form for editing the specified ProcesoRecurso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $procesoRecurso = $this->procesoRecursoRepository->findWithoutFail($id);

        if (empty($procesoRecurso)) {
            Flash::error('Proceso Recurso not found');

            return redirect(route('procesos.index'));
        }

        return view('proceso_recursos.edit')->with('procesoRecurso', $procesoRecurso);
    }

    /**
     * Update the specified ProcesoRecurso in storage.
     *
     * @param  int              $id
     * @param UpdateProcesoRecursoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProcesoRecursoRequest $request)
    {
        $procesoRecurso = $this->procesoRecursoRepository->findWithoutFail($id);

        if (empty($procesoRecurso)) {
            Flash::error('Proceso Recurso not found');

            return redirect(route('procesos.index'));
        }

        $procesoRecurso = $this->procesoRecursoRepository->update($request->all(), $id);

        Flash::success('Proceso Recurso updated successfully.');

        return redirect(route('procesos.show',$procesoRecurso->proceso_id));
    }

    /**
     * Remove the specified ProcesoRecurso from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $procesoRecurso = $this->procesoRecursoRepository->findWithoutFail($id);

        if (empty($procesoRecurso)) {
            Flash::error('Proceso Recurso not found');

            return redirect(route('procesos.show',$procesoRecurso->proceso_id));
        }

        $this->procesoRecursoRepository->delete($id);

        Flash::success('Proceso Recurso deleted successfully.');

        return redirect(route('procesos.show',$procesoRecurso->proceso_id));
    }
}
