<?php

namespace App\Http\Controllers;

use Response;
use Exception;
use App\Models\User;
use App\Models\Address;
use App\Http\Requests;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Models\MasterPrivilege;
use App\Models\MasterStatusUser;
use App\DataTables\UserDataTable;
use App\Helpers\ResponseFormatter;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\AppBaseController;

class UserController extends AppBaseController
{
    /** @var UserRepository $userRepository*/
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the User.
     *
     * @param UserDataTable $userDataTable
     *
     * @return Response
     */
    public function index(UserDataTable $userDataTable)
    {
        return $userDataTable->render('users.index');
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        $master_privileges = MasterPrivilege::query()->select('nama_hak_akses_pengguna', 'id')->get();
        $master_status_users = MasterStatusUser::query()->select('nama_status_pengguna', 'id')->get();

        return view('users.create')->with('master_privileges', $master_privileges)->with('master_status_users', $master_status_users);
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    { 
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $result = $this->userRepository->create($input);


        $validator  = Validator::make($request->all(), [
            'profile_photo_path' => 'required|image'
        ],);
        if ($validator->fails()) {
            Flash::danger('Gambar harus diisi.');
        }
        if ($request->file('profile_photo_path')) {
            
            $file = $request->profile_photo_path->store('assets/user', 'public');     
            // $user = $request->user();
             $result ->profile_photo_path = $file;
            $result->update();
            // dd($result);
        }

        Flash::success('User saved successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Display the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        // $user = $this->userRepository->find($id);
        $user = User::with(['addresses'])->where('id', $id)->first();
        // dd($user->addresses);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->find($id);
        // $master_privileges = MasterPrivilege::query()->pluck('nama_hak_akses_pengguna', 'id');
        // $master_status_users = MasterStatusUser::query()->pluck('nama_status_pengguna', 'id');
        $master_privileges = MasterPrivilege::query()->select('nama_hak_akses_pengguna', 'id')->get();
        $master_status_users = MasterStatusUser::query()->select('nama_status_pengguna', 'id')->get();

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('users.edit')->with('user', $user)->with('master_privileges', $master_privileges)->with('master_status_users', $master_status_users);
    }

    /**
     * Update the specified User in storage.
     *
     * @param int $id
     * @param   UserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        User::findOrFail($id)->fill(
            [
                'name' => $request->name,
                'username' => $request->username,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tanggal_lahir' => $request->tanggal_lahir,
                'no_hp' => $request->no_hp,
                'foto' => $request->foto,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'id_privilege' => $request->id_privilege,
                'id_status_pengguna' => $request->id_status_pengguna,
            ]
        )->save();

        Flash::success('User updated successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $this->userRepository->delete($id);

        Flash::success('User deleted successfully.');

        return redirect(route('users.index'));
    }
}
