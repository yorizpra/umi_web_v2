<?php

namespace App\DataTables;

use App\Models\ProductDiscount;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class ProductDiscountDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'product_discounts.datatables_actions')
        
            ->addColumn('nama', function ($data) {
                return $data->products->nama;
            
            })
            
            ->addColumn('id_discount', function ($product) {
                if ($product->nama_promo == null) {
                    return "Belum ada promo" ;
                } else {
                    return $product->discounts->nama_promo;
                }
            })

            ->addColumn('harga_diskon', function ($model) {
                if ($model->harga_diskon == '0') {
                    return "Invalid Request" ;
                } else {
                    return  "Rp. " .number_format($model->harga_diskon, 0, ',', '.');
                }
            })
            
            ->addColumn('batas_pembelian', function ($model) {
                if ($model->batas_pembelian == null) {
                    return "Tidak ada batas pembelian" ;
                } else {
                    return  $model->batas_pembelian;
                }
            });

            
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\ProductDiscount $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ProductDiscount $model)
    {
        return $model->newQuery()->with(['products', 'discounts']);
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
                    // ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
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
            'nama',
            // 'nama_promo',
            // 'id_discount' => ([
            //     'data' => 'discounts.nama_promo',
            //     'name' => 'discounts.nama_promo',
            //     'title' => 'Nama Promo',
            // ]),
            'harga_diskon',
            'batas_pembelian'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'product_discounts_datatable_' . time();
    }
}
