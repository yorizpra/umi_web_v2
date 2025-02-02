<?php

namespace App\DataTables;

use App\Models\BusinessFile;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class BusinessFileDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'business_files.datatables_actions')->addColumn('nama_usaha', function ($data) {
            return $data->businesses->nama_usaha;
        })->addColumn('is_video', function ($model) {
            if ($model->is_video == '1') {
                return "Ya" ;
            } else {
                return  "Tidak";
            }
        })->addColumn('is_photo', function ($model) {
            if ($model->is_photo == '1') {
                return "Ya" ;
            } else {
                return  "Tidak";
            }
        })->addColumn('file', function($data){
            return '<img src="'.$data->file.'" width="400px" style="border-radius: 1%">';
        })->rawColumns(['file', 'action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\BusinessFile $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(BusinessFile $model)
    {
        return $model->newQuery()->with('businesses');
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

                        if(i === kolom['0'].length - 1 || i === kolom['0'].length - 4){
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
            'nama_usaha' => ([
                'data'  => 'businesses.nama_usaha',
                'name'  => 'businesses.nama_usaha',
                'title' => 'Nama Usaha'
            ]),
            'file',
            'is_photo' => ['title' => 'Apakah menggunakan foto?'],
            'is_video' => ['title' => 'Apakah menggunakan video?'],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'business_files_datatable_' . time();
    }
}
