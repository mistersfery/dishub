<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateKuisionerAPIRequest;
use App\Http\Requests\API\UpdateKuisionerAPIRequest;
use App\Models\Kuisioner;
use App\Repositories\KuisionerRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class KuisionerController
 * @package App\Http\Controllers\API
 */

class KuisionerAPIController extends AppBaseController
{
    /** @var  KuisionerRepository */
    private $kuisionerRepository;

    public function __construct(KuisionerRepository $kuisionerRepo)
    {
        $this->kuisionerRepository = $kuisionerRepo;
    }

    /**
     * Display a listing of the Kuisioner.
     * GET|HEAD /kuisioners
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $kuisioners = $this->kuisionerRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($kuisioners->toArray(), 'Kuisioners retrieved successfully');
    }

    /**
     * Store a newly created Kuisioner in storage.
     * POST /kuisioners
     *
     * @param CreateKuisionerAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateKuisionerAPIRequest $request)
    {
        $input = $request->all();

        $kuisioner = $this->kuisionerRepository->create($input);

        return $this->sendResponse($kuisioner->toArray(), 'Kuisioner saved successfully');
    }

    /**
     * Display the specified Kuisioner.
     * GET|HEAD /kuisioners/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Kuisioner $kuisioner */
        $kuisioner = $this->kuisionerRepository->find($id);

        if (empty($kuisioner)) {
            return $this->sendError('Kuisioner not found');
        }

        return $this->sendResponse($kuisioner->toArray(), 'Kuisioner retrieved successfully');
    }

    /**
     * Update the specified Kuisioner in storage.
     * PUT/PATCH /kuisioners/{id}
     *
     * @param int $id
     * @param UpdateKuisionerAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKuisionerAPIRequest $request)
    {
        $input = $request->all();

        /** @var Kuisioner $kuisioner */
        $kuisioner = $this->kuisionerRepository->find($id);

        if (empty($kuisioner)) {
            return $this->sendError('Kuisioner not found');
        }

        $kuisioner = $this->kuisionerRepository->update($input, $id);

        return $this->sendResponse($kuisioner->toArray(), 'Kuisioner updated successfully');
    }

    /**
     * Remove the specified Kuisioner from storage.
     * DELETE /kuisioners/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Kuisioner $kuisioner */
        $kuisioner = $this->kuisionerRepository->find($id);

        if (empty($kuisioner)) {
            return $this->sendError('Kuisioner not found');
        }

        $kuisioner->delete();

        return $this->sendSuccess('Kuisioner deleted successfully');
    }
}
