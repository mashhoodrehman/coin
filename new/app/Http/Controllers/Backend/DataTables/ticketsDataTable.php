<?php

namespace App\Http\Controllers\Backend\DataTables;

use App\Models\tickets\tickets;
use Yajra\DataTables\Services\DataTable;
use Analytics;


class ticketsDataTable extends DataTable
{
    /**
     * Display ajax response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
           $this->datatables
            ->eloquent($this->query())
            //->addColumn('action', 'path.to.action.view')
            ->addColumn('action', '<a href="{{ url( \'admin\tickets\', array( $id,\'\' )) }}" class="btn btn-xs btn-info"><i class="fa fa-search" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.view').'"></i></a>
             <a href="{{ url( \'admin\tickets\', array( $id,\'edit\' )) }}" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.edit').'"></i></a>

              <a href="{{ url( \'admin\tickets\', array( $id,\'\' )) }}" data-method="delete"
              data-trans-button-cancel="'.trans('buttons.general.cancel').'"
              data-trans-button-confirm="'.trans('buttons.general.crud.delete').'"
              data-trans-title="'.trans('strings.backend.general.are_you_sure').'" class="btn btn-xs btn-danger"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.delete').'"></i></a>

                ')
            ->make(true);

      }

    /**
     * Get the query object to be processed by dataTables.
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder|\Illuminate\Support\Collection
     */
    public function query()
    {
        $query = tickets::query();

        return $this->applyScopes($query);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    // ->columns([
        // 'id',
        // 'name',
        // 'ticket',
        // 'created_at',
        // 'updated_at',

                    // ])
                    ->ajax('')
                    ->addAction(['width' => '80px'])
                    ->parameters([
                        // 'dom' => 'Bfrtip',
                        'dom' => 'Blfrtip',
                        // 'buttons' => ['export','reset', 'reload'],
                        'buttons' => ['csv', 'excel', 'print', 'reset', 'reload'],
                        // 'buttons' => ['csv', 'excel', 'pdf', 'print', 'reset', 'reload'],
                        'pageLength' => 30,
                        "lengthMenu" => [ 10, 25,30, 50, 75, 100 ,150],
                    ]);
                    // ->parameters($this->getBuilderParameters());
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id',
        // 'id',
        // 'name',
        // 'ticket',
        // 'created_at',
        // 'updated_at',

            'created_at',
            'updated_at',
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'tickets_' . time();
    }
}
