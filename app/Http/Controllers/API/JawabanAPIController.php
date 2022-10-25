<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateJawabanAPIRequest;
use App\Http\Requests\API\UpdateJawabanAPIRequest;
use App\Models\Jawaban;
use App\Repositories\JawabanRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class JawabanController
 * @package App\Http\Controllers\API
 */

class JawabanAPIController extends AppBaseController
{
    /** @var  JawabanRepository */
    private $jawabanRepository;

    public function __construct(JawabanRepository $jawabanRepo)
    {
        $this->jawabanRepository = $jawabanRepo;
    }

    /**
     * Display a listing of the Jawaban.
     * GET|HEAD /jawabans
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $jawabans = $this->jawabanRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($jawabans->toArray(), 'Jawabans retrieved successfully');
    }

    /**
     * Store a newly created Jawaban in storage.
     * POST /jawabans
     *
     * @param CreateJawabanAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateJawabanAPIRequest $request)
    {
        $input = $request->all();

        $jawaban = $this->jawabanRepository->create($input);

        return $this->sendResponse($jawaban->toArray(), 'Jawaban saved successfully');
    }

    /**
     * Display the specified Jawaban.
     * GET|HEAD /jawabans/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Jawaban $jawaban */
        $jawaban = $this->jawabanRepository->find($id);

        if (empty($jawaban)) {
            return $this->sendError('Jawaban not found');
        }

        return $this->sendResponse($jawaban->toArray(), 'Jawaban retrieved successfully');
    }

    /**
     * Update the specified Jawaban in storage.
     * PUT/PATCH /jawabans/{id}
     *
     * @param int $id
     * @param UpdateJawabanAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJawabanAPIRequest $request)
    {
        $input = $request->all();

        /** @var Jawaban $jawaban */
        $jawaban = $this->jawabanRepository->find($id);

        if (empty($jawaban)) {
            return $this->sendError('Jawaban not found');
        }

        $jawaban = $this->jawabanRepository->update($input, $id);

        return $this->sendResponse($jawaban->toArray(), 'Jawaban updated successfully');
    }

    /**
     * Remove the specified Jawaban from storage.
     * DELETE /jawabans/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Jawaban $jawaban */
        $jawaban = $this->jawabanRepository->find($id);

        if (empty($jawaban)) {
            return $this->sendError('Jawaban not found');
        }

        $jawaban->delete();

        return $this->sendSuccess('Jawaban deleted successfully');
    }
}
