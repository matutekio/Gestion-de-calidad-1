<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFrecuenciaRequest;
use App\Http\Requests\UpdateFrecuenciaRequest;
use App\Repositories\FrecuenciaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FrecuenciaController extends AppBaseController
{
    /** @var  FrecuenciaRepository */
    private $frecuenciaRepository;

    public function __construct(FrecuenciaRepository $frecuenciaRepo)
    {
        $this->frecuenciaRepository = $frecuenciaRepo;
    }

    /**
     * Display a listing of the Frecuencia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->frecuenciaRepository->pushCriteria(new RequestCriteria($request));
        $freDefault = $this->frecuenciaRepository->findWhere(['organizacion_id'=>0]);
        if(Auth::user()->role == 2){
            $frecuencias = $this->frecuenciaRepository->findWhere(['organizacion_id'=>Auth::user()->organizacion_id]);
            $frecuencias = $frecuencias->merge($freDefault);
        }
        else
            $frecuencias = $this->frecuenciaRepository->all();

        return view('frecuencias.index')
            ->with('frecuencias', $frecuencias);
    }

    /**
     * Show the form for creating a new Frecuencia.
     *
     * @return Response
     */
    public function create()
    {
        return view('frecuencias.create');
    }

    /**
     * Store a newly created Frecuencia in storage.
     *
     * @param CreateFrecuenciaRequest $request
     *
     * @return Response
     */
    public function store(CreateFrecuenciaRequest $request)
    {
        $input = $request->all();

        $frecuencia = $this->frecuenciaRepository->create($input);

        Flash::success('Frecuencia saved successfully.');

        return redirect(route('frecuencias.index'));
    }

    /**
     * Display the specified Frecuencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $frecuencia = $this->frecuenciaRepository->findWithoutFail($id);

        if (empty($frecuencia)) {
            Flash::error('Frecuencia not found');

            return redirect(route('frecuencias.index'));
        }

        return view('frecuencias.show')->with('frecuencia', $frecuencia);
    }

    /**
     * Show the form for editing the specified Frecuencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $frecuencia = $this->frecuenciaRepository->findWithoutFail($id);

        if (empty($frecuencia)) {
            Flash::error('Frecuencia not found');

            return redirect(route('frecuencias.index'));
        }

        return view('frecuencias.edit')->with('frecuencia', $frecuencia);
    }

    /**
     * Update the specified Frecuencia in storage.
     *
     * @param  int              $id
     * @param UpdateFrecuenciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFrecuenciaRequest $request)
    {
        $frecuencia = $this->frecuenciaRepository->findWithoutFail($id);

        if (empty($frecuencia)) {
            Flash::error('Frecuencia not found');

            return redirect(route('frecuencias.index'));
        }

        $frecuencia = $this->frecuenciaRepository->update($request->all(), $id);

        Flash::success('Frecuencia updated successfully.');

        return redirect(route('frecuencias.index'));
    }

    /**
     * Remove the specified Frecuencia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $frecuencia = $this->frecuenciaRepository->findWithoutFail($id);

        if (empty($frecuencia)) {
            Flash::error('Frecuencia not found');

            return redirect(route('frecuencias.index'));
        }

        $this->frecuenciaRepository->delete($id);

        Flash::success('Frecuencia deleted successfully.');

        return redirect(route('frecuencias.index'));
    }
}
