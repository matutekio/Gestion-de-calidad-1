<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrganizacionRequest;
use App\Http\Requests\UpdateOrganizacionRequest;
use App\Models\Objetivos;
use App\User;
use function PHPSTORM_META\elementType;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\OrganizacionRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Organizacion;
use Illuminate\Http\Request;
use Response;
use Flash;

class OrganizacionController extends AppBaseController
{
    /** @var  OrganizacionRepository */
    private $organizacionRepository;

    public function __construct(OrganizacionRepository $organizacionRepo)
    {
        $this->organizacionRepository = $organizacionRepo;
    }

    /**
     * Display a listing of the Organizacion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->organizacionRepository->pushCriteria(new RequestCriteria($request));
        $organizacions = $this->organizacionRepository->all();

        return view('organizacions.index')->with('organizacions', $organizacions);
    }

    /**
     * Show the form for creating a new Organizacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('organizacions.create');
    }

    /**
     * Store a newly created Organizacion in storage.
     *
     * @param CreateOrganizacionRequest $request
     *
     * @return Response
     */
    public function store(CreateOrganizacionRequest $request)
    {
        $input = $request->all();

        $organizacion = $this->organizacionRepository->create($input);

        Flash::success('Organizacion saved successfully.');

        return redirect(route('organizacions.index'));
    }

    /**
     * Display the specified Organizacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $organizacion = $this->organizacionRepository->findWithoutFail($id);
        $objetivos = Objetivos::where('organizacion_id',$organizacion->id)->get();
        if (empty($organizacion)) {
            Flash::error('Organizacion not found');

            return redirect(route('organizacions.index'));
        }

        return view('organizacions.show',compact('objetivos','organizacion'));
//             ->with('organizacion', $organizacion);
    }

    /**
     * Show the form for editing the specified Organizacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $organizacion = $this->organizacionRepository->findWithoutFail($id);

        if (empty($organizacion)) {
            Flash::error('Organizacion not found');

            return redirect(route('organizacions.index'));
        }

        return view('organizacions.edit')->with('organizacion', $organizacion);
    }

    /**
     * Update the specified Organizacion in storage.
     *
     * @param  int              $id
     * @param UpdateOrganizacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrganizacionRequest $request)
    {
        $organizacion = $this->organizacionRepository->findWithoutFail($id);

        if (empty($organizacion)) {
            Flash::error('Organizacion not found');

            return redirect(route('organizacions.index'));
        }

        $organizacion = $this->organizacionRepository->update($request->all(), $id);

        Flash::success('Organizacion updated successfully.');

        return redirect(route('organizacions.index'));
    }

    /**
     * Remove the specified Organizacion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $organizacion = $this->organizacionRepository->findWithoutFail($id);

        if (empty($organizacion)) {
            Flash::error('Organizacion not found');

            return redirect(route('organizacions.index'));
        }

        $this->organizacionRepository->delete($id);

        Flash::success('Organizacion deleted successfully.');

        return redirect(route('organizacions.index'));
    }

    public function search(Request $request){
        $search = $request->term;
        $organizaciones = Organizacion::where('nombre','LIKE','%'.$search.'%')
             ->pluck('nombre','id');
        return response($organizaciones);
    }

    public function getEsuperadmin($id){
        $user = User::find($id);
        if($user->role == 1)
            return redirect(route('organizacions.index'));
        else if($user->role == 2)
            return redirect(route('organizacions.show',$user->organizacion_id));
        else
            return redirect(route('organizacions.show',$user->organizacion_id));
    }
}
