<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDestinoRequest;
use App\Http\Requests\UpdateDestinoRequest;
use App\Repositories\DestinoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DestinoController extends AppBaseController
{
    /** @var  DestinoRepository */
    private $destinoRepository;

    public function __construct(DestinoRepository $destinoRepo)
    {
        $this->destinoRepository = $destinoRepo;
    }

    /**
     * Display a listing of the Destino.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->destinoRepository->pushCriteria(new RequestCriteria($request));
        if(Auth::user()->role == 2)
            $destinos = $this->destinoRepository->findWhere(['organizacion_id'=>Auth::user()->organizacion_id]);
        else
            $destinos = $this->destinoRepository->all();
        return view('destinos.index')
            ->with('destinos', $destinos);
    }

    /**
     * Show the form for creating a new Destino.
     *
     * @return Response
     */
    public function create()
    {
        return view('destinos.create');
    }

    /**
     * Store a newly created Destino in storage.
     *
     * @param CreateDestinoRequest $request
     *
     * @return Response
     */
    public function store(CreateDestinoRequest $request)
    {
        $input = $request->all();

        $destino = $this->destinoRepository->create($input);

        Flash::success('Destino saved successfully.');

        return redirect(route('destinos.index'));
    }

    /**
     * Display the specified Destino.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $destino = $this->destinoRepository->findWithoutFail($id);

        if (empty($destino)) {
            Flash::error('Destino not found');

            return redirect(route('destinos.index'));
        }

        return view('destinos.show')->with('destino', $destino);
    }

    /**
     * Show the form for editing the specified Destino.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $destino = $this->destinoRepository->findWithoutFail($id);

        if (empty($destino)) {
            Flash::error('Destino not found');

            return redirect(route('destinos.index'));
        }

        return view('destinos.edit')->with('destino', $destino);
    }

    /**
     * Update the specified Destino in storage.
     *
     * @param  int              $id
     * @param UpdateDestinoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDestinoRequest $request)
    {
        $destino = $this->destinoRepository->findWithoutFail($id);

        if (empty($destino)) {
            Flash::error('Destino not found');

            return redirect(route('destinos.index'));
        }

        $destino = $this->destinoRepository->update($request->all(), $id);

        Flash::success('Destino updated successfully.');

        return redirect(route('destinos.index'));
    }

    /**
     * Remove the specified Destino from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $destino = $this->destinoRepository->findWithoutFail($id);

        if (empty($destino)) {
            Flash::error('Destino not found');

            return redirect(route('destinos.index'));
        }

        $this->destinoRepository->delete($id);

        Flash::success('Destino deleted successfully.');

        return redirect(route('destinos.index'));
    }
}
