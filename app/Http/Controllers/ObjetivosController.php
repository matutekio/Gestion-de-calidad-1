<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateObjetivosRequest;
use App\Http\Requests\UpdateObjetivosRequest;
use App\Repositories\ObjetivosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ObjetivosController extends AppBaseController
{
    /** @var  ObjetivosRepository */
    private $objetivosRepository;

    public function __construct(ObjetivosRepository $objetivosRepo)
    {
        $this->objetivosRepository = $objetivosRepo;
    }

    /**
     * Display a listing of the Objetivos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->objetivosRepository->pushCriteria(new RequestCriteria($request));
        $objetivos = $this->objetivosRepository->all();

        return view('objetivos.index')
            ->with('objetivos', $objetivos);
    }

    /**
     * Show the form for creating a new Objetivos.
     *
     * @return Response
     */
    public function create()
    {
        return view('objetivos.create');
    }

    /**
     * Store a newly created Objetivos in storage.
     *
     * @param CreateObjetivosRequest $request
     *
     * @return Response
     */
    public function store(CreateObjetivosRequest $request)
    {
        $input = $request->all();

        $objetivos = $this->objetivosRepository->create($input);

        Flash::success('Objetivos saved successfully.');

        return redirect(route('organizacions.show',Auth::user()->organizacion_id));
    }

    /**
     * Display the specified Objetivos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $objetivos = $this->objetivosRepository->findWithoutFail($id);

        if (empty($objetivos)) {
            Flash::error('Objetivos not found');

            return redirect(route('organizacions.show',Auth::user()->organizacion_id));
        }

        return view('objetivos.show')->with('objetivos', $objetivos);
    }

    /**
     * Show the form for editing the specified Objetivos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $objetivos = $this->objetivosRepository->findWithoutFail($id);

        if (empty($objetivos)) {
            Flash::error('Objetivos not found');

            return redirect(route('organizacions.show',Auth::user()->organizacion_id));
        }

        return view('objetivos.edit')->with('objetivos', $objetivos);
    }

    /**
     * Update the specified Objetivos in storage.
     *
     * @param  int              $id
     * @param UpdateObjetivosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateObjetivosRequest $request)
    {
        $objetivos = $this->objetivosRepository->findWithoutFail($id);

        if (empty($objetivos)) {
            Flash::error('Objetivos not found');

            return redirect(route('organizacions.show',Auth::user()->organizacion_id));
        }

        $objetivos = $this->objetivosRepository->update($request->all(), $id);

        Flash::success('Objetivos updated successfully.');

        return redirect(route('organizacions.show',Auth::user()->organizacion_id));
    }

    /**
     * Remove the specified Objetivos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $objetivos = $this->objetivosRepository->findWithoutFail($id);

        if (empty($objetivos)) {
            Flash::error('Objetivos not found');

            return redirect(route('organizacions.show',Auth::user()->organizacion_id));
        }

        $this->objetivosRepository->delete($id);

        Flash::success('Objetivos deleted successfully.');

        return redirect(route('organizacions.show',Auth::user()->organizacion_id));
    }
}
