<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKuisionerRequest;
use App\Http\Requests\UpdateKuisionerRequest;
use App\Repositories\KuisionerRepository;
use App\Models\Jawaban;
use Illuminate\Database\Eloquent\Model;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class KuisionerController extends AppBaseController
{
    /** @var KuisionerRepository $kuisionerRepository*/
    private $kuisionerRepository;
 

    public function __construct(KuisionerRepository $kuisionerRepo)
    {
        $this->kuisionerRepository = $kuisionerRepo;
    
    }
    

    /**
     * Display a listing of the Kuisioner.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
       
        
        $kuisioners = $this->kuisionerRepository->paginate(10);

        return view('kuisioners.index',compact('kuisioners'));
          
    }

    /**
     * Show the form for creating a new Kuisioner.
     *
     * @return Response
     */
    public function create()
    {
        return view('kuisioners.create');
    }

    /**
     * Store a newly created Kuisioner in storage.
     *
     * @param CreateKuisionerRequest $request
     *
     * @return Response
     */
    public function store(CreateKuisionerRequest $request)
    {
        $input = $request->all();

        $kuisioner = $this->kuisionerRepository->create($input);

        Flash::success('Kuisioner saved successfully.');

        return redirect(route('kuisioners.index'));
    }

    /**
     * Display the specified Kuisioner.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jawabans=Jawaban::where('idkuisioner',$id)->paginate(10);
        $kuisioner = $this->kuisionerRepository->find($id);

        if (empty($kuisioner)) {
            Flash::error('Kuisioner not found');

            return redirect(route('kuisioners.index'));
        }

        return view('kuisioners.show')
        ->with('kuisioner', $kuisioner)
        ->with('jawabans',$jawabans);
    }

    /**
     * Show the form for editing the specified Kuisioner.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $kuisioner = $this->kuisionerRepository->find($id);

        if (empty($kuisioner)) {
            Flash::error('Kuisioner not found');

            return redirect(route('kuisioners.index'));
        }

        return view('kuisioners.edit')->with('kuisioner', $kuisioner);
    }

    /**
     * Update the specified Kuisioner in storage.
     *
     * @param int $id
     * @param UpdateKuisionerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKuisionerRequest $request)
    {
        $kuisioner = $this->kuisionerRepository->find($id);

        if (empty($kuisioner)) {
            Flash::error('Kuisioner not found');

            return redirect(route('kuisioners.index'));
        }

        $kuisioner = $this->kuisionerRepository->update($request->all(), $id);

        Flash::success('Kuisioner updated successfully.');

        return redirect(route('kuisioners.index'));
    }

    /**
     * Remove the specified Kuisioner from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $kuisioner = $this->kuisionerRepository->find($id);

        if (empty($kuisioner)) {
            Flash::error('Kuisioner not found');

            return redirect(route('kuisioners.index'));
        }

        $this->kuisionerRepository->delete($id);

        Flash::success('Kuisioner deleted successfully.');

        return redirect(route('kuisioners.index'));
    }
}
