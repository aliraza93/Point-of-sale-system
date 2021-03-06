<?php
namespace App\Repositories\Focus\role;
use App\Exceptions\GeneralException;
use App\Models\Access\Permission\Permission;
use App\Repositories\BaseRepository;
use DB;
//use App\Events\Backend\Access\Permission\PermissionCreated;
//use App\Events\Backend\Access\Permission\PermissionDeleted;
//use App\Events\Backend\Access\Permission\PermissionUpdated;

/**
 * Class PermissionRepository.
 */
class PermissionRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Permission::class;

    /**
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->select([
                'id',
                'name',
                'display_name',
                'sort',
                'created_at',
                'updated_at',
            ]);
    }

    /**
     * @param array $input
     *
     * @throws GeneralException
     *
     * @return bool
     */
    public function create(array $input)
    {
        if ($this->query()->where('name', $input['name'])->first()) {
            throw new GeneralException(trans('exceptions.backend.access.permissions.already_exists'));
        }

        DB::transaction(function () use ($input) {
            $permission = self::MODEL;
            $permission = new $permission();
            $permission->name = $input['name'];
            $permission->display_name = $input['display_name'];
            $permission->sort = isset($input['sort']) && strlen($input['sort']) > 0 && is_numeric($input['sort']) ? (int) $input['sort'] : 0;
            $permission->status = 1;
            $permission->created_by = access()->user()->id;

            if ($permission->save()) {
               // event(new PermissionCreated($permission));

                return true;
            }

            throw new GeneralException(trans('exceptions.backend.access.permissions.create_error'));
        });
    }

    /**
     * @param Model $permission
     * @param  $input
     *
     * @throws GeneralException
     *
     * @return bool
     */
    public function update($permission, array $input)
    {


        $permission->display_name = strip_tags($input['display_name']);
        $permission->sort = isset($input['sort']) && strlen($input['sort']) > 0 && is_numeric($input['sort']) ? (int) $input['sort'] : 0;
        $permission->status = 1;
        $permission->updated_by = access()->user()->id;

        DB::transaction(function () use ($permission, $input) {
            if ($permission->save()) {
               // event(new PermissionUpdated($permission));

                return true;
            }

            throw new GeneralException(trans('exceptions.backend.access.permission.update_error'));
        });
    }

    /**
     * @param Model $permission
     *
     * @throws GeneralException
     *
     * @return bool
     */
    public function delete($permission)
    {
        DB::transaction(function () use ($permission) {
            if ($permission->delete()) {
                //event(new PermissionDeleted($permission));

                return true;
            }

            throw new GeneralException(trans('exceptions.backend.access.permission.delete_error'));
        });
    }
}
