<?php

namespace App\DataTables;

use App\Models\ShippingUsed;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class ShippingUsedDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'shipping_useds.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\ShippingUsed $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ShippingUsed $model)
    {
        return $model->newQuery()->with('shipping_cost_variables')->with('business_delivery_services');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id_shipping_cost_variable' => new \Yajra\DataTables\Html\Column([
                'data'  => 'shipping_cost_variables.is_paid_by_seller',
                'name'  => 'shipping_cost_variables.is_paid_by_seller',
                'title' => 'Apakah Biaya Pengiriman dibayar oleh penjual?',
            ]),
            'id_business_delivery_services' => new \Yajra\DataTables\Html\Column([
                'data'  => 'business_delivery_services.biaya',
                'name'  => 'business_delivery_services.biaya',
                'title' => 'Biaya Pengiriman',
            ]),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'shipping_useds_datatable_' . time();
    }
}
