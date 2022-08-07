<?php

namespace App\DataTables;

use App\Models\BusinessDeliveryService;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class BusinessDeliveryServiceDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'business_delivery_services.datatables_actions')->addColumn('biaya', function ($model) {
            if ($model->biaya == '0') {
                return "Invalid Request" ;
            } else {
                return  "Rp. " .number_format($model->biaya, 0, ',', '.');
            }
        });;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\BusinessDeliveryService $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(BusinessDeliveryService $model)
    {
        return $model->newQuery()->with('businesses')->with('master_delivery_services');
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
                'stateSave' => false,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
'initComplete' => "function () {
                    var kolom = this.api().columns();
                    kolom.every(function (i) {

                        if(i === kolom['0'].length - 1){
                            return false;
                        }
                        var column = this;
                        var input = document.createElement(\"input\");
                        input.setAttribute('id', i);
                        $(input).appendTo($(column.footer()).empty())
                        .on('keyup', function () {
                            column.search($(this).val()).draw();
                        }).attr('placeholder', 'Search');                        
                    }); 
                }",
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
            'id' => ['visible' => false],
            'id_usaha' => ([
                'data'  => 'businesses.nama_usaha',
                'title' => 'Nama Lapak'
            ]),
            'id_master_jasa_pengiriman' => ([
                'data'  => 'master_delivery_services.nama_jasa_pengiriman',
                'title' => 'Nama Jasa Pengiriman'
            ]),
            'biaya'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'business_delivery_services_datatable_' . time();
    }
}
